<?php
include_once 'models/Customers.php';
class CusTomersController {
    public function list(){
        echo __METHOD__;
        $objcustomers = new CusTomers();
        $rows = $objcustomers->all();
        include_once 'views/customers/list.php';
    }
    //trang thêm mới
    public function add(){
        if( $_SERVER['REQUEST_METHOD'] == 'POST' ){
            // echo '<pre>';
            // print_r($_REQUEST);
            // echo '</pre>';
            $objcustomers = new CusTomers();
            $objcustomers->store( $_REQUEST );
            header("Location: index.php?page=list");
        }
        include_once 'views/customers/add.php';
    }
    //trang chỉnh sửa 
    public function edit(){
        $id = $_REQUEST['id'];
        $objcustomers = new CusTomers();
        $row = $objcustomers->find( $id );

        // xu ly khi gui du lieu
        if( $_SERVER['REQUEST_METHOD'] == 'POST' ){
           
            $objcustomers->update($id,$_REQUEST);
            header("Location: index.php?page=list");
        }

        include_once 'views/customers/edit.php';
    }
    //trang xóa
    public function delete(){
        $id = $_REQUEST['id'];
        $objSanPham = new CusTomers();
        $objSanPham->delete($id);
        header("Location: index.php?page=list");
    }
}