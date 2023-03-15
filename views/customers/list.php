<?php
include_once './views/LAYOUT/header.php';
?>
<div class="container-fluid px-4">
    <div class="mb-4">
        <a href="index.php?controller=Customers&page=add" class="btn btn-danger"> Thêm mới </a>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Tên khách hàng</th>
                <th>Địa chỉ</th>
                <th>Email</th>
                <th>Ảnh </th>
                <th>Số điện thoại </th>
                <th>Tùy chọn</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($rows as $row) : ?>
                <tr>
                    <td><?= $row->ID; ?> </td>
                    <td><?= $row->TENKHACHHANG; ?></td>
                    <td><?= $row->DIACHI; ?></td>
                    <td><?= $row->EMAIL; ?></td>
                    <td> <img src="<?php echo 'http://localhost/Modul-2/Case%20Study-MVC/views/LAYOUT/assets/img/' ?><?php echo $row->IMAGE ?>" height="100" width="100"> </td>
                    <td><?= $row->SODIENTHOAI; ?></td>
                    <td>
                        <a href="index.php?controller=Customers&page=edit&id=<?= $row->ID; ?>"  class="btn btn-warning ">Sửa</a> <br>
                        <a onclick=" return confirm('Are you sure ?'); " href="index.php?controller=Customers&page=delete&id=<?= $row->ID; ?>">Xóa</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?php
include_once './views/LAYOUT/footer.php';
?>