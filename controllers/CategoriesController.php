<?php
include_once 'models/Categories.php';
class CategoriesController {
    public function list(){
        echo __METHOD__;
        $objCategories = new Categories();
        $rows = $objCategories->all();
        include_once 'views/categories/list-categories.php';
    }
    //trang thêm mới
    public function add(){
        if( $_SERVER['REQUEST_METHOD'] == 'POST' ){
            // echo '<pre>';
            // print_r($_REQUEST);
            // echo '</pre>';
            $Categories = new Categories();
            $Categories->store( $_REQUEST );
            header("Location: index.php?controller=Categories&page=list");
        }
        include_once 'views/categories/add-categories.php';
    }
    //trang chỉnh sửa 
    public function edit(){
        $id = $_REQUEST['id'];  
        $objCategories = new Categories();
        $row = $objCategories->find( $id );

        // xu ly khi gui du lieu
        if( $_SERVER['REQUEST_METHOD'] == 'POST' ){
           
            $objCategories->update($id,$_REQUEST);
            header("Location:index.php?controller=Categories&page=list");
        }

        include_once 'views/categories/edit-categories.php';
    }
    //trang xóa
    public function delete(){
        $id = $_REQUEST['id'];
        $objCategories = new Categories();
        $objCategories->delete($id);
        header("Location: index.php?controller=Categories&page=list");
    }
}
