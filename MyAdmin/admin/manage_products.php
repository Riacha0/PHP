<?php

include("../includes/session.php");
include("../includes/header.php");
include("../includes/db_connection.php");

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

                            <tr>

                                <td colspan="7" class="text-center text-muted py-5">

                                    <i class="bi bi-box-seam fs-1"></i>

                                    <br><br>

                                    No products available.

                                    <br>

                                    Click <strong>Add Product</strong> to add your first item.

                                </td>

                            </tr>

                        </tbody>

                    </table>

                </div>

            </div>

        </div>

    </div>

</div>

<div class="modal fade" id="addProductModal">

    <div class="modal-dialog modal-lg">

        <form action="" method="POST" enctype="multipart/form-data">

            <div class="modal-content">

                <div class="modal-header">

                    <h5 class="fw-bold">

                        Add New Product

                    </h5>

                    <button
                        type="button"
                        class="btn-close"
                        data-bs-dismiss="modal">

                    </button>

                </div>

                <div class="modal-body">

                    <div class="row">

                        <div class="col-md-6 mb-3">

                            <label class="form-label">

                                Product Name

                            </label>

                            <input
                                type="text"
                                class="form-control"
                                name="product_name"
                                required>

                        </div>

                        <div class="col-md-6 mb-3">

                            <label class="form-label">

                                Category

                            </label>

                            <select
                                class="form-select"
                                name="category_id"
                                required>

                                <option value="">

                                    Select Category

                                </option>

                                <?php

                                $category = mysqli_query($conn,"SELECT * FROM categories");

                                while($row = mysqli_fetch_assoc($category)){

                                ?>

                                    <option value="<?php echo $row['category_id']; ?>">

                                        <?php echo $row['category_name']; ?>

                                    </option>

                                <?php

                                }

                                ?>

                            </select>

                        </div>

                        <div class="col-md-12 mb-3">

                            <label class="form-label">

                                Description

                            </label>

                            <textarea
                                class="form-control"
                                rows="3"
                                name="description"
                                required></textarea>

                        </div>

                        <div class="col-md-4 mb-3">

                            <label class="form-label">

                                Price

                            </label>

                            <input
                                type="number"
                                class="form-control"
                                name="price"
                                required>

                        </div>

                        <div class="col-md-4 mb-3">

                            <label class="form-label">

                                Stock

                            </label>

                            <input
                                type="number"
                                class="form-control"
                                name="stock"
                                required>

                        </div>

                        <div class="col-md-4 mb-3">

                            <label class="form-label">

                                Product Image

                            </label>

                            <input
                                type="file"
                                class="form-control"
                                name="image"
                                accept="image/*"
                                required>

                        </div>

                    </div>

                </div>

                <div class="modal-footer">

                    <button
                        type="button"
                        class="btn btn-secondary"
                        data-bs-dismiss="modal">

                        Cancel

                    </button>

                    <button
                        type="submit"
                        class="btn btn-primary"
                        name="save_product">

                        <i class="bi bi-floppy"></i>

                        Save Product

                    </button>

                </div>

            </div>

        </form>

    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>

<?php include("../includes/footer.php"); ?>