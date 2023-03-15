<?php
include_once './views/LAYOUT/header.php';

?>
<div class="container-fluid px-4">
    <a href="index.php?controller=Products&page=add" class="btn btn-danger .col "> Thêm mới </a>
    <table class="table">
        <thead>
            <tr>
                <th>STT</th>
                <th>Tên sản phẩm</th>
                <th>Thể loại </th>
                <th>Ảnh </th>
                <th>Hành động</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($rows as $key => $row) : ?>
                <tr>
                    <td><?= ++$key; ?> </td>
                    <td><?= $row->TENSANPHAM; ?></td>
                    <td><?= $row->category_id; ?></td>
                    <td> <img src="<?php echo 'http://localhost/Modul-2/Case%20Study-MVC/views/LAYOUT/assets/img/' ?><?php echo $row->IMAGE ?>" height="100" width="100"> </td>
                    <td>
                        <a  href="index.php?controller=Products&page=edit&id=<?= $row->ID;?>" class="btn btn-warning"  >Sửa</a> <br>
                        <a onclick=" return confirm('Are you sure ?'); " href="index.php?controller=Products&page=delete&id=<?= $row->ID; ?>" class="btn btn-danger .col ">Xóa</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<?php
include_once './views/LAYOUT/footer.php';
?>