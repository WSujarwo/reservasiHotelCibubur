<?php
if (isset($_SESSION['success'])) {
    $success = $_SESSION['success'];

    unset($_SESSION['success']);
}
?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Table Admin</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data</h6>
            <div class="alert alert-success <?= empty($success) ? "d-none" : null ?>" role="alert">
                <?= $success ?>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Username</th>
                            <th>email</th>
                            <th>Password</th>
                            <th>button</th>
                        </tr>
                    </thead>
                    <?php foreach ($data as $user) { ?>
                    <tbody>
                        <tr>
                            <td><?= $user['name'] ?></td>
                            <td><?= $user['email'] ?></td>
                            <td><?= $user['password'] ?></td>
                            <th>
                                <a class="btn btn-sm btn-primary" href="<?= BASEURL ?>/table_admin/edit/<?= $user['id'] ?>">ubah</a>
                                <a class="btn btn-sm btn-danger" href="<?= BASEURL ?>/table_admin/delete/<?= $user['id'] ?>" onclick="return confirm('Yakin akan dihapus ?')">hapus</a>
                            </th>
                        </tr>
                    </tbody>
                    <?php } ?>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->