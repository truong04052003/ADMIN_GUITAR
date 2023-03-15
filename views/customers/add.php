<?php
include_once './views/LAYOUT/header.php';
include_once './views/LAYOUT/menu.php';

?>
<div class="container-fluid px-4">

<h2 >Thêm khách hàng</h2>
<form action="" method="post">
    <div class="mb-3">
        <label class="form-label" >TENKHACHHANG</label>
        <input type="text" class="form-control" name="TENKHACHHANG">
    </div>
    <div class="mb-3">
        <label class="form-label">DIACHI</label>
        <input type="text" class="form-control"  name ="DIACHI">
    </div>
    <div class="mb-3">
        <label class="form-label">EMAIL</label>
        <input type="text" class="form-control" name ="EMAIL">
    </div>
    <div class="mb-3">
        <label class="form-label">IMAGE</label>
        <input type="file" class="form-control" name="IMAGE">
    </div>
    <div class="mb-3">
        <label class="form-label">SODIENTHOAI</label>
        <input type="text" class="form-control" name="SODIENTHOAI">
    </div>
     <div class="mb-3">
            <button type="submit" class="btn btn-primary">Them</button>
        </div>

    <!-- <form action="" method="post">
        TENKHACHHANG :<input type="text" name="TENKHACHHANG"> <br>
        DIACHI: <input type="text" name="DIACHI"> <br>
        EMAIL: <input type="text" name="EMAIL"> <br>
        IMAGE: <input type="file" name="IMAGE"> <br>
        SODIENTHOAI: <input type="text" name="SODIENTHOAI"> <br> -->
        <!-- <input type="submit" value="Thêm"> -->
    </form>
</div>
    <?php
    include_once './views/LAYOUT/footer.php';
    ?>