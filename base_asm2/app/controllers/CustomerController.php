<?php
namespace App\Controllers;
use App\Models\Customer;

class CustomerController extends BaseController{
    protected $customer;
    public function __construct()
    {
        $this->customer= new Customer();
    }
    public function list_customer($name=true){
        if($name){
            $customers=$this->customer->getCustomer();
            if ($customers !== false) {
                $this->render("customer.ListCustomer", compact('customers'));
            } else {
                echo "Error fetching customer data";
            }
        }else{
            $customers=$this->customer->getCustomerName();
            return $customers;
        }
    }
    function add_customer(){
        $result='';
        $error=[];
        if(isset($_POST['submit'])){
            $name=$_POST['name'];
            $email=$_POST['email'];
            $phone=$_POST['phone'];
            $image=$_FILES['image']['name'];
            if(empty($name)){
                $error['name']='Bạn phải nhập tên';
            }else{
            $allCustomer=$this->list_customer(false);
            foreach($allCustomer as $allName){
                if($name==$allName->name){
                    $error['name']='Tài khoản đã tồn tại';
                }
            }
            }
            
            if(empty($email)){
                $error['email']='Bạn phải nhập email';
            }
            if(empty($name)){
                $error['phone']='Bạn phải nhập số điện thoại';
            }
            if(empty($error)){
                $result='Nhập thành công';
                // $this->customer->addCustomer($name,$email,$phone);
                // $customers=$this->list_customer();
                // return $this->render("customer.ListCustomer");
            }
        }
        $this->render("customer.AddCustomer",compact('result','error'));
    }

}
