<div class="modal fade" id="editAdminModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">

            <form method="POST">

                <input type="hidden" name="admin_id" value="<?= $edit['admin_id']; ?>">

                <div class="modal-header">
                    <h5 class="modal-title">Edit Admin</h5>

                    <button type="button"
                            class="btn-close"
                            data-bs-dismiss="modal"></button>
                </div>

                <div class="modal-body">

                    <div class="mb-3">
                        <label class="form-label">Full Name</label>
                        <input type="text"
                               name="fullname"
                               class="form-control"
                               value="<?= $edit['fullname']; ?>"
                               required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email"
                               name="email"
                               class="form-control"
                               value="<?= $edit['email']; ?>"
                               required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Username</label>
                        <input type="text"
                               name="username"
                               class="form-control"
                               value="<?= $edit['username']; ?>"
                               required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Role</label>

                        <select name="role" class="form-select">

                            <option value="Super Admin"
                                <?= $edit['role'] == "Super Admin" ? "selected" : ""; ?>>
                                Super Admin
                            </option>

                            <option value="Administrator"
                                <?= $edit['role'] == "Administrator" ? "selected" : ""; ?>>
                                Administrator
                            </option>

                        </select>

                    </div>

                </div>

                <div class="modal-footer">

                    <button type="button"
                            class="btn btn-secondary"
                            data-bs-dismiss="modal">
                        Cancel
                    </button>

                    <button type="submit"
                            name="update_admin"
                            class="btn btn-primary">
                        Update Admin
                    </button>

                </div>

            </form>

        </div>
    </div>
</div>