<?php
include_once './views/LAYOUT/header.php';

?>
<div class="container-fluid px-4">
    <a href="index.php?controller=Orders&page=add" class="btn btn-danger .col "> Thêm mới </a>
    
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>TENKHACH</th>
                <th>customer_id </th>
                <th>NGAYDATHANG</th>
                <th>ACTION</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($rows as $row) : ?>
                <tr>
                    <td><?= $row->ID; ?> </td>
                    <td><?= $row->TENKHACH; ?></td>
                    <td><?= $row->customer_id; ?></td>
                    <td><?= $row->NGAYDATHANG; ?></td>

                    <td>
                        <a href="index.php?controller=Orders&page=edit&id=<?= $row->ID; ?>">Edit</a> <br>
                        <a onclick=" return confirm('Are you sure ?'); " href="index.php?controller=Orders&page=delete&id=<?= $row->ID; ?>">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<?php
include_once './views/LAYOUT/footer.php';
?>