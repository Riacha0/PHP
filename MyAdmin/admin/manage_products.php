<?php

include("../includes/session.php");
include("../includes/db_connection.php");
include("../includes/header.php");

/** @var mysqli $conn */

?>

<?php

$edit_product = null;

if(isset($_GET['edit_id'])){

    $edit_id = $_GET['edit_id'];

    $edit_sql = "SELECT * FROM products WHERE product_id='$edit_id'";

    $edit_result = mysqli_query($conn, $edit_sql);

    if(mysqli_num_rows($edit_result) == 1){

        $edit_product = mysqli_fetch_assoc($edit_result);

    }

}

if(isset($_POST['update_product'])){

    $product_id = $_POST['product_id'];
    $product_name = $_POST['product_name'];
    $category_id = $_POST['category_id'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $stock = $_POST['stock'];
    $old_image = $_POST['old_image'];

    if($_FILES['image']['name'] != ""){

        $image = $_FILES['image']['name'];
        $temp_image = $_FILES['image']['tmp_name'];

        move_uploaded_file($temp_image, "../uploads/".$image);

    }
    else{

        $image = $old_image;

    }

    $sql = "UPDATE products
            SET category_id='$category_id',
                product_name='$product_name',
                description='$description',
                price='$price',
                stock='$stock',
                image='$image'
            WHERE product_id='$product_id'";

    if(mysqli_query($conn, $sql)){

        echo "<script>
                alert('Product Updated Successfully.');
                window.location='manage_products.php';
              </script>";

    }
    else{

        echo "<script>
                alert('Unable to update product.');
              </script>";

    }

}

?>

<?php

if(isset($_POST['save_product'])){

    $product_name = $_POST['product_name'];
    $category_id = $_POST['category_id'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $stock = $_POST['stock'];

    $image = $_FILES['image']['name'];
    $temp_image = $_FILES['image']['tmp_name'];

    move_uploaded_file($temp_image, "../uploads/".$image);

    $sql = "INSERT INTO products
            (category_id, product_name, description, price, stock, image)

            VALUES

            ('$category_id',
             '$product_name',
             '$description',
             '$price',
             '$stock',
             '$image')";

    if(mysqli_query($conn,$sql)){

        echo "<script>

                alert('Product Added Successfully.');

                window.location='manage_products.php';

              </script>";

    }

    else{

        echo "<script>

                alert('Unable to save product.');

              </script>";

    }

}

?>

<div class="container-fluid">

    <div class="row">

        <?php include("../includes/sidebar.php"); ?>

        <div class="col-lg-10 p-4">

            <div class="topbar d-flex justify-content-between align-items-center">

                <div>

                    <h2 class="text-primary fw-bold">
                        Manage Products
                    </h2>

                    <small>
                        Add, edit and manage all products.
                    </small>

                </div>

                <button
                    class="btn btn-primary"
                    data-bs-toggle="modal"
                    data-bs-target="#addProductModal">

                    <i class="bi bi-plus-circle"></i>

                    Add Product

                </button>

            </div>

            <div class="card shadow mt-4">

                <div class="card-body">

                    <div class="row mb-3">

                        <div class="col-md-4">

                            <input
                                type="text"
                                class="form-control"
                                placeholder="Search Product">

                        </div>

                    </div>

                    <table class="table table-hover align-middle">

                        <thead class="table-light">

                            <tr>

                                <th>Image</th>
                                <th>Product</th>
                                <th>Category</th>
                                <th>Price</th>
                                <th>Stock</th>
                                <th>Status</th>
                                <th width="180">Actions</th>

                            </tr>

                        </thead>

                        <tbody>

<?php

$sql = "SELECT products.*, categories.category_name
        FROM products
        LEFT JOIN categories
        ON products.category_id = categories.category_id";

$result = mysqli_query($conn,$sql);

if(mysqli_num_rows($result) > 0){

    while($row = mysqli_fetch_assoc($result)){

?>

<tr>

    <td>

        <img
            src="../uploads/<?php echo $row['image']; ?>"
            width="70"
            height="70"
            style="object-fit:cover; border-radius:10px;">

    </td>

    <td>

        <?php echo $row['product_name']; ?>

    </td>

    <td>

        <?php echo $row['category_name']; ?>

    </td>

    <td>

        ₱ <?php echo number_format($row['price'],2); ?>

    </td>

    <td>

        <?php echo $row['stock']; ?>

    </td>

    <td>

        <?php

        if($row['stock'] <= 0){

            echo "<span class='badge bg-danger'>Out of Stock</span>";

        }

        else if($row['stock'] <= 5){

            echo "<span class='badge bg-warning text-dark'>Low Stock</span>";

        }

        else{

            echo "<span class='badge bg-success'>In Stock</span>";

        }

        ?>

    </td>

   <td>

    <a
        href="manage_products.php?edit_id=<?php echo $row['product_id']; ?>"
        class="btn btn-sm btn-primary">

        <i class="bi bi-pencil-square"></i>

    </a>

    <button
        class="btn btn-sm btn-danger">

        <i class="bi bi-trash"></i>

    </button>

</td>

</tr>

<?php

    }

}

else{

?>

<tr>

    <td colspan="7" class="text-center text-muted py-5">

        <i class="bi bi-box-seam fs-1"></i>

        <br><br>

        No products available.

    </td>

</tr>

<?php

}

?>

</tbody>

                    </table>

                </div>

            </div>

        </div>

    </div>

</div>

<?php include("../includes/add_product_modal.php"); ?>

<?php include("../includes/edit_product_modal.php"); ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>

<?php if($edit_product){ ?>

<script>

document.addEventListener("DOMContentLoaded", function(){

    var editModal = new bootstrap.Modal(document.getElementById("editProductModal"));

    editModal.show();

});

</script>

<?php } ?>

<?php include("../includes/footer.php"); ?>