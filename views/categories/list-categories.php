<?php
include_once './views/LAYOUT/header.php';

?>
<div class="container-fluid px-4">
    <a href="index.php?controller=Categories&page=add" class="btn btn-danger "> Thêm mới </a>
    <table class="table">
        <thead>
            <tr>
                <th>STT</th>
                <th>Tên thể loại</th>
                <th>Hành động</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($rows as $key => $row) : ?>
                <tr>
                <td><?= ++$key; ?> </td>
                    <td><?= $row->categories_name; ?></td>
                    <td>
                        <a href="index.php?controller=Categories&page=edit&id=<?= $row->ID; ?>" class="btn btn-warning" >Sửa</a> <br>
                        <a onclick=" return confirm('Are you sure ?'); " href="index.php?controller=Categories&page=delete&id=<?= $row->ID; ?>" class="btn btn-danger ">Xóa</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<?php
include_once './views/LAYOUT/footer.php';
?>