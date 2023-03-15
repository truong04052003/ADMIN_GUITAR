<?php
include_once './views/LAYOUT/header.php';
include_once './views/LAYOUT/menu.php';

?>
<div class="container-fluid px-4">
<h1>Update</h1>

<form action="" method="post">
        <div class="mb-3">
            <label class="form-label">TENKHACHHANG</label>
            <input type="text" class="form-control" name="TENKHACHHANG"value="<?= $row->TENKHACHHANG; ?>"> <br>
        </div>
        <div class="mb-3">
            <label class="form-label">DIACHI</label>
            <input type="text" class="form-control" name="DIACHI"value="<?= $row->DIACHI; ?>"> <br>
        </div>
        <div class="mb-3">
            <label class="form-label">EMAIL</label>
            <input type="text" class="form-control" name="EMAIL"value="<?= $row->EMAIL; ?>"> <br>
        </div>
        <div class="mb-3">
            <label class="form-label">IMAGE</label>
            <input type="file" class="form-control" name="IMAGE"value="<?= $row->IMAGE; ?>"> <br>
        </div>
        <div class="mb-3">
            <label class="form-label">SODIENTHOAI</label>
            <input type="text" class="form-control" name="SODIENTHOAI"value="<?= $row->SODIENTHOAI; ?>"> <br>
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Cập nhật</button>
        </div>

</form>
</div>
<?php
include_once './views/LAYOUT/footer.php';
?>
