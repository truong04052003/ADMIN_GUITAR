<?php
include_once 'db.php'; //$conn
// include_once '';
$controller = 'Customers';
if (isset($_GET['controller']) && $_GET['controller'] != '') {
    $controller = $_GET['controller'];
}


// Gọi Controller
switch ($controller) {
    case 'Customers':
        include_once 'controllers/CusTomersController.php';
        $objController =  new CusTomersController();
        break;
    case 'Orders':
        include_once 'controllers/OrdersController.php';
        $objController =  new OrdersController();
        break;
    case 'Products':
        include_once 'controllers/ProductsController.php';
        $objController = new ProductsController();
        break;
    case 'Categories':
        include_once 'controllers/CategoriesController.php';
        $objController =  new CategoriesController();
        break;
    default:
        echo 'không có';
        break;
}




$page = 'list';
if (isset($_GET['page']) && $_GET['page'] != '') {
    $page = $_GET['page'];
}
// Gọi page
switch ($page) {
    case 'list':
        $objController->list();
        break;
    case 'add':
        $objController->add();
        break;
    case 'edit':
        $objController->edit();
        break;
    case 'delete':
        $objController->delete();
        break;
    default:
        $objController->list();
        break;
}
/*
   
    customer
        index.php?controller=Customer&page=list   => Danh sach
       index.php?controller=Customers&page=add   => Them moi
        index.php?controller=Customer&page=edit   => Cap nhat
        index.php?controller=Customer&page=delete => Xoa
    orders
        index.php?controller=Orders&page=list   => Danh sach
        index.php?controller=Orders&page=add    => Them moi
        index.php?controller=Orders&page=edit   => Cap nhat
        index.php?controller=Orders&page=delete => Xoa
    product
       index.php?controller=Products&page=list   => Danh sach
       index.php?controller=Products&page=add   => Them moi
        index.php?controller=Product&page=edit   => Cap nhat
        index.php?controller=Product&page=delete => Xoa
     categories
        index.php?controller=Categories&page=list   => Danh sach
       index.php?controller=Categoriess&page=add   => Them moi
        index.php?controller=Categories&page=edit   => Cap nhat
        index.php?controller=Categories&page=delete => Xoa
*/
