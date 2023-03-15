<?php
include_once './views/LAYOUT/header.php';

?>
<div class="container-fluid px-4">
    <a href="index.php?controller=Categories&page=add" class="btn btn-danger .col "> Thêm mới </a>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>categories_name</th>
                <th>ACTION</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($rows as $row) : ?>
                <tr>
                    <td><?= $row->ID; ?> </td>
                    <td><?= $row->categories_name; ?></td>
                    <td>
                        <a href="index.php?controller=Categories&page=edit&id=<?= $row->ID; ?>">Edit</a> <br>
                        <a onclick=" return confirm('Are you sure ?'); " href="index.php?controller=Categories&page=delete&id=<?= $row->ID; ?>">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<?php
include_once './views/LAYOUT/footer.php';
?>