<?php

include("../includes/session.php");
include("../includes/header.php");

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

                                    No products available.

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

        <div class="modal-content">

            <div class="modal-header">

                <h5>

                    Add New Product

                </h5>

                <button
                    class="btn-close"
                    data-bs-dismiss="modal">

                </button>

            </div>

            <div class="modal-body">

                <div class="row">

                    <div class="col-md-6 mb-3">

                        <label>

                            Product Name

                        </label>

                        <input
                            type="text"
                            class="form-control">

                    </div>

                    <div class="col-md-6 mb-3">

                        <label>

                            Category

                        </label>

                        <select class="form-select">

                            <option>

                                Select Category

                            </option>

                        </select>

                    </div>

                    <div class="col-md-12 mb-3">

                        <label>

                            Description

                        </label>

                        <textarea
                            class="form-control"
                            rows="3">

                        </textarea>

                    </div>

                    <div class="col-md-4 mb-3">

                        <label>

                            Price

                        </label>

                        <input
                            type="number"
                            class="form-control">

                    </div>

                    <div class="col-md-4 mb-3">

                        <label>

                            Stock

                        </label>

                        <input
                            type="number"
                            class="form-control">

                    </div>

                    <div class="col-md-4 mb-3">

                        <label>

                            Product Image

                        </label>

                        <input
                            type="file"
                            class="form-control">

                    </div>

                </div>

            </div>

            <div class="modal-footer">

                <button
                    class="btn btn-secondary"
                    data-bs-dismiss="modal">

                    Cancel

                </button>

                <button class="btn btn-primary">

                    Save Product

                </button>

            </div>

        </div>

    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>

<?php include("../includes/footer.php"); ?>