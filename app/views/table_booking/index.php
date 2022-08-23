<?php
if (isset($_SESSION['success'])) {
    $success = $_SESSION['success'];

    unset($_SESSION['success']);
}
?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Table Booking</h1>

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
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone Number</th>
                            <th>Country</th>
                            <th>arrival</th>
                            <th>Departure</th>
                            <th>Adults</th>
                            <th>Children</th>
                            <th>Facility</th>
                            <th>Hotel Location</th>
                            <th>Payment Type</th>
                            <th>Card Number</th>
                            <th>Amount</th>
                            <th>Button</th>
                        </tr>
                    </thead>
                    <?php foreach ($data as $user) { ?>
                    <tbody>
                        <tr>
                            <td><?= $user['nama'] ?></td>
                            <td><?= $user['email'] ?></td>
                            <td><?= $user['phone'] ?></td>
                            <td><?= $user['country'] ?></td>
                            <td><?= $user['arrival_date'] ?></td>
                            <td><?= $user['departure_date'] ?></td>
                            <td><?= $user['adults'] ?></td>
                            <td><?= $user['children'] ?></td>
                            <td><?= $user['facility'] ?></td>
                            <td><?= $user['location'] ?></td>
                            <td><?= $user['payment_type'] ?></td>
                            <td><?= $user['card_number'] ?></td>
                            <td><?= $user['amount'] ?></td>
                            <td>
                                <a class="btn btn-sm btn-success" href="<?= BASEURL ?>/table_booking/cetakPdf/<?= $user['id'] ?>">cetak</a>
                                <a class="btn btn-sm btn-primary" href="<?= BASEURL ?>/table_booking/edit/<?= $user['id'] ?>">ubah</a>
                                <a class="btn btn-sm btn-danger" href="<?= BASEURL ?>/table_booking/delete/<?= $user['id'] ?>" onclick="return confirm('Yakin hapus data ?')">hapus</a>
                            </td>
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