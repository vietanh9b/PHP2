<?php
$url=isset($_GET['url']) ? $_GET['url'] : '/';
//require_once "app/controllers/CustomerController.php";
require_once "vendor/autoload.php";
use App\Models\Customer;
use App\Controllers\CustomerController;
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
        $customerController->detailCustomer();
        break;
    case 'deleteUser':
        $customerController->deleteCustomerController();
        break;
}