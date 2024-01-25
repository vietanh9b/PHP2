<?php
namespace App\Controller;
require_once "App/Models/Customer.php";
use App\Models\CustomerModel\Customer;

class CustomerController{
    public function __construct()
    {
        $customer = new Customer();
        echo "Đây là controller của customer";
    }
}