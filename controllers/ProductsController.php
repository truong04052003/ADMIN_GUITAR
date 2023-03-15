<?php
include_once 'models/Products.php';
include_once 'models/Categories.php';
class ProductsController {
    public function list(){
        echo __METHOD__;
        $objProducts = new Products();
        $rows = $objProducts->all();
        include_once 'views/products/list-products.php';
    }
    //trang thêm mới
    public function add(){
        if( $_SERVER['REQUEST_METHOD'] == 'POST' ){
            // echo '<pre>';
            // print_r($_REQUEST);
            // echo '</pre>';
            $Products = new Products();
            $Products->store( $_REQUEST );
            header("Location: index.php?controller=Products&page=list ");
        }
        $objCategories = new Categories();
        $categories = $objCategories->all();
        include_once 'views/products/add-products.php';
    }
    //trang chỉnh sửa 
    public function edit(){
        $id = $_REQUEST['id'];  
        $objProducts = new Products();
        $row = $objProducts->find( $id );

        // xu ly khi gui du lieu
        if( $_SERVER['REQUEST_METHOD'] == 'POST' ){
           
            $objProducts->update($id,$_REQUEST);
            header("Location: index.php?controller=Products&page=list ");
        }

        include_once 'views/products/edit-products.php';
    }
    //trang xóa
    public function delete(){
        $id = $_REQUEST['id'];
        $objProducts = new Products();
        $objProducts->delete($id);
        header("Location: index.php?controller=Products&page=list ");
    }
}
