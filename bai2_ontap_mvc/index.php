<?php
// file index giúp điều hướng tới các hàm ở trong controller

$url=isset($_GET['url']) ? $_GET['url'] : '/';
require_once "Controllers/CustomerController.php";
require_once "Models/Customer.php";
$customerController=new CustomerController();
switch ($url){
    case '/':
        $customerController->listCustomer();
        break;
    case 'add_customer':
        $customerController->addCustomerController();
        break;
    case 'updateUser':
        $customerController->updateCustomerController();
        break;
    case 'detail_customer':
        echo $customerController->detailCustomer();
        break;
    case 'deleteUser':
        echo $customerController->deleteCustomerController();
        break;
}