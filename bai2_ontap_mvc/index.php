<?php
// file index giúp điều hướng tới các hàm ở trong controller

$url=isset($_GET['url']) ? $_GET['url'] : '/';
require_once "Controllers/CustomerController.php";
require_once "Models/Customer.php";
switch ($url){
    case '/':
        listCustomer();
        break;
    case 'add_customer':
        addCustomerController();
        break;
    case 'updateUser':
        updateCustomerController();
        break;
    case 'deleteUser':
        echo deleteCustomerController();
        break;
}
