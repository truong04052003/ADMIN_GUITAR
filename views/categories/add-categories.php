<?php
include_once './views/LAYOUT/header.php';
include_once './views/LAYOUT/menu.php';

?>
<div class="container-fluid px-4">
<h1>Thêm thể loại</h1>
<form action="" method="post">
    <div class="mb-3">
        <label class="form-label">categories_name</label>
        <input type="text" class="form-control" name="categories_name">
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Thêm</button>
    </div>
</form>
</div>
<?php
include_once './views/LAYOUT/footer.php';
?>