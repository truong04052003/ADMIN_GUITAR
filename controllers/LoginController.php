<?php
class LoginController {
public function list(){
    echo __METHOD__;
    $objLogin = new Login();
    $rows = $objLogin->all();
    include_once 'views/login/list-login.php';
}
}
?>