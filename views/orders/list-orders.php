<?php
include_once './views/LAYOUT/header.php';

?>
<div class="container-fluid px-4">
    <a href="index.php?controller=Orders&page=add" class="btn btn-danger .col "> Thêm mới </a>
    
    <table class="table">
        <thead>
            <tr>
                <th>STT</th>
                <th>Tên khách hàng </th>
                <th>Tổng</th>
                <th>Ngày Đặt</th>
                <th>Hành động</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($rows as $key => $row) : ?>
                <tr>
                <td><?= ++$key; ?> </td>
                    <td><?= $row->customer_id; ?></td>
                    <td><?= $row->total; ?></td>
                    <td><?= $row->NGAYDATHANG; ?></td>

                    <td>
                        <a href="index.php?controller=Orders&page=edit&id=<?= $row->ID; ?>" class="btn btn-warning ">Edit</a> <br>
                        <a onclick=" return confirm('Are you sure ?'); " href="index.php?controller=Orders&page=delete&id=<?= $row->ID; ?>" class="btn btn-danger ">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<?php
include_once './views/LAYOUT/footer.php';
?>