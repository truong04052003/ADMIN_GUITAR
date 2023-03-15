<?php
include_once './views/LAYOUT/header.php';
include_once './views/LAYOUT/menu.php';

?>
<div class="container-fluid px-4">
    <h1>Update</h1>
    <form action="" method="post">
        <div class="mb-3">
            <label class="form-label">TENKHACH</label>
            <input type="text" class="form-control" name="TENKHACH" value="<?= $row->TENKHACH; ?>"> <br>
        </div>
        <div class="mb-3">
            <label class="form-label">customer_id</label>
            <input type="text" class="form-control" name="customer_id" value="<?= $row->customer_id; ?>"> <br>
        </div>
        <div class="mb-3">
            <label class="form-label">NGAYDATHANG</label>
            <input type="text" class="form-control" name="NGAYDATHANG" value="<?= $row->NGAYDATHANG; ?>"> <br>
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Cập nhật</button>
        </div>
    </form>
</div>
<?php
include_once './views/LAYOUT/footer.php';
?>