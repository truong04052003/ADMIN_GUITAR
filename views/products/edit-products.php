
<?php
include_once './views/LAYOUT/header.php';
include_once './views/LAYOUT/menu.php';

?>
<div class="container-fluid px-4">
<h1>Update</h1>
<form action="" method="post">
        <div class="mb-3">
            <label class="form-label">TENSANPHAM</label>
            <input type="text" class="form-control" name="TENSANPHAM"value="<?= $row->TENSANPHAM; ?>"> <br>
        </div>
        <div class="mb-3">
            <label class="form-label">category_id</label>
            <input type="text" class="form-control" name="category_id"value="<?= $row->category_id; ?>"> <br>
        </div>
        <div class="mb-3">
            <label class="form-label">IMAGE</label>
            <input type="file" class="form-control" name="IMAGE"value="<?= $row->IMAGE; ?>"> <br>
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Cập nhật</button>
        </div>
</form>
</div>
<?php
include_once './views/LAYOUT/footer.php';
?>
