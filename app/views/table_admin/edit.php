<?php
if (isset($_SESSION['validasiNama'])) {
    $validasiNama = $_SESSION['validasiNama'];

    unset($_SESSION['validasiNama']);
}

if (isset($_SESSION['validasiEmail'])) {
    $validasiEmail = $_SESSION['validasiEmail'];

    unset($_SESSION['validasiEmail']);
}

if (isset($_SESSION['validasiPassword'])) {
    $validasiPassword = $_SESSION['validasiPassword'];

    unset($_SESSION['validasiPassword']);
}
?>
<div class="container">
    <form action="<?= BASEURL ?>/table_admin/update" method="POST">
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Name</label>
            <div class="col-sm-10">
                <input type="hidden" name="id" value="<?= $data['id'] ?>">
                <input type="text" name="name" value="<?= $data['name'] ?>" class="form-control" id="inputEmail3">
                <small class="text-danger ml-3 <?= (empty($validasiNama)) ? "d-none" : "" ?> " ><?= $validasiNama ?></small>
            </div>
        </div>
        <div class="form-group row">
            <label for="inputPassword3" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
                <input type="email" name="email" value="<?= $data['email'] ?>" class="form-control" id="inputPassword3">
                <small class="text-danger ml-3 <?= (empty($validasiEmail)) ? "d-none" : "" ?> " ><?= $validasiEmail ?></small>
            </div>
        </div>
        <div class="form-group row">
            <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
            <div class="col-sm-10">
                <input type="password" name="password" value="<?= $data['password'] ?>" class="form-control" id="inputPassword3">
                <small class="text-danger ml-3 <?= (empty($validasiPassword)) ? "d-none" : "" ?> " ><?= $validasiPassword ?></small>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-10">
                <button type="submit" class="btn btn-primary">Kirim</button>
            </div>
        </div>
    </form>
</div>