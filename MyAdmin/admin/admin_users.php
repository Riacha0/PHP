<?php

include("../includes/session.php");
include("../includes/db_connection.php");
include("../includes/header.php");

?>

<div class="container-fluid">

    <div class="row">

        <?php include("../includes/sidebar.php"); ?>

        <div class="col-lg-10 p-4">

            <div class="topbar d-flex justify-content-between align-items-center">

                <div>

                    <h2 class="text-primary fw-bold">
                        Admin Users
                    </h2>

                    <small>
                        Manage administrator accounts.
                    </small>

                </div>

                <button
                    class="btn btn-success"
                    data-bs-toggle="modal"
                    data-bs-target="#addAdminModal">

                    <i class="bi bi-person-plus"></i>

                    Add Admin

                </button>

            </div>

            <div class="card shadow mt-4">

                <div class="card-body">

                    <form method="GET">

                        <div class="row mb-3">

                            <div class="col-md-4">

                                <input
                                    type="text"
                                    name="search"
                                    class="form-control"
                                    placeholder="Search Admin">

                            </div>

                            <div class="col-md-2">

                                <button
                                    class="btn btn-primary">

                                    Search

                                </button>

                            </div>

                        </div>

                    </form>

                    <table class="table table-hover align-middle">

                        <thead class="table-light">

                            <tr>

                                <th>Full Name</th>

                                <th>Email</th>

                                <th>Username</th>

                                <th>Role</th>

                                <th width="180">Actions</th>

                            </tr>

                        </thead>

                        <tbody>

                            <tr>

                                <td colspan="5" class="text-center text-muted">

                                    No admin users found.

                                </td>

                            </tr>

                        </tbody>

                    </table>

                </div>

            </div>

        </div>

    </div>

</div>

<?php include("../includes/footer.php"); ?>