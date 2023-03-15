<?php
include_once 'models/Orders.php';
include_once 'models/Customers.php';

class OrdersController
{
    public function list()
    {
        echo __METHOD__;
        $objOrders = new Orders();
        $rows = $objOrders->all();
        include_once 'views/orders/list-orders.php';
    }
    //trang thêm mới
    public function add()
    {
        $objcustomers = new CusTomers();
        $rows = $objcustomers->all();
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // echo '<pre>';
            // print_r($_REQUEST);
            // echo '</pre>';
            $Orders = new Orders();
            $Orders->store($_REQUEST);
            header("Location: index.php?controller=Orders&page=list");
        }
        include_once 'views/orders/add-orders.php';
    }
    //trang chỉnh sửa 
    public function edit()
    {
        $id = $_REQUEST['id'];
        $objOrders = new Orders();
        $row = $objOrders->find($id);

        // xu ly khi gui du lieu
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $objOrders->update($id, $_REQUEST);
            header("Location: index.php?controller=Orders&page=list");
        }

        include_once 'views/orders/edit-orders.php';
    }
    //trang xóa
    public function delete()
    {
        $id = $_REQUEST['id'];
        $objOrders = new Orders();
        $objOrders->delete($id);
        header("Location: index.php?controller=Orders&page=list");
    }
}
