<?php
class CustomerController{
    protected $customer;
    public function __construct()
    {
        $this->customer= new Customer();
    }
    function listCustomer(){
        $customer=$this->customer->getCustomer();
        include_once "Views/Customer/ListCostomer.php";
    }
    function addCustomerController(){
        $result='';
        $error=1;
        if(isset($_POST['submit'])){
//        print_r($_POST);
            $name=$_POST['name'];
            $email=$_POST['email'];
            $phone=$_POST['phone'];
            if(empty($name)){
                $error_name='Bạn phải nhập tên';
                $error=0;
            }
            if(empty($email)){
                $error_email='Bạn phải nhập email';
                $error=0;
            }
            if(empty($name)){
                $error_phone='Bạn phải nhập số điện thoại';
                $error=0;
            }
            if($error){
                $result='Nhập thành công';
                $this->customer->addCustomer($name,$email,$phone);
                header('location: index.php');
            }
        }
        require_once "Views/Customer/AddCostomer.php";
    }

    public function detailCustomer()
    {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $customer = $this->customer->getOneCustomer($id);
            require_once "Views/Customer/UpdateCostomer.php";
        }
    }

    function updateCustomerController(){
        $id=$_GET['id'];
        $error=1;
        if(isset($_POST['submit'])){
            $name=$_POST['name'];
            $email=$_POST['email'];
            $phone=$_POST['phone'];
            $this->customer->updateCustomer($id,$name,$email,$phone);
            header('location: index.php');
        }
    }

    function deleteCustomerController(){
        $id=$_GET['id'];
        $this->customer->deleteCustomer($id);
        $customer=$this->customer->getCustomer();
        require_once "Views/Customer/ListCostomer.php";
    }
}
