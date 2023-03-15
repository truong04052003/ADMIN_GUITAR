<?php
include_once './views/LAYOUT/header.php';
include_once './views/LAYOUT/menu.php';

?>
<div class="container-fluid px-4">
    <h1>Thêm sản phẩm</h1>
    <form action="" method="post">
        <div class="mb-3">
            <label class="form-label">Tên sản phẩm</label>
            <input type="text" class="form-control" name="TENSANPHAM">
        </div>
        <div class="mb-3">
            <label class="form-label">Thể loại</label>
            <select class="form-select" name="category_id">
                <?php foreach ($categories as $category) : ?>
                    <option value="<?php echo $category->ID; ?>"><?php echo $category->categories_name;?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="mb-3">
            <label class="form-label">Ảnh</label>
            <input type="file" class="form-control" name="IMAGE">
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Thêm</button>
        </div>

    </form>
</div>

<?php
include_once './views/LAYOUT/footer.php';
?>