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
    public function validate(){
        
    }
    public function add_customer(){
        $result='';
        $error=[];
        if(isset($_POST['submit'])){
            $name=$_POST['name'];
            $email=$_POST['email'];
            $phone=$_POST['phone'];
            $image=$_FILES['image']['name'];
            // validate name
            if(empty($name)){
                $error['name']='Bạn phải nhập tên';
            }else{
            $allCustomer=$this->list_customer(false);
            foreach($allCustomer as $allName){
                if($name==$allName->name){
                    $error['name']='Tài khoản đã tồn tại';
                }
            }
            $pattern_name="^[A-Z]{1,}[a-z]{1,}[0-9]{1,}$";
            if(strlen(trim($name))<8){
                $error['name']='Tên phải lớn hơn hoặc bằng 8 ký tự';
            }
            }
            // validate email
            $pattern_email="/^[a-z][\w\-\_\.]{2,}@[a-z]{1,}.[a-z]{2,}$/";
            if(empty($email)){
                $error['email']='Bạn phải nhập email';
            }elseif(!preg_match($pattern_email,$email)){
                $error['email']='Email chưa đúng định dạng';
            }
            // validate phone
            $pattern_phone='/^0\d{9}$/';
            if(empty($phone)){
                $error['phone']='Bạn phải nhập số điện thoại';
            }elseif(!preg_match($pattern_phone,$phone)){
                $error['phone']='Số điện thoại chưa đúng định dạng';
            }

            // image
                    $target_dir = "./public/image/";
                    $target_file = $target_dir . basename($image);
                    if($_FILES['image']['error']==0){
                        //        - File upload phải là ảnh:
                        //        Lấy đuôi file
                                $extension = pathinfo($image,PATHINFO_EXTENSION);
                                $extension = strtolower($extension);
                        //        var_dump($extension);
                                $allowed = ['png','jpg','jpeg','gif'];
                                if(!in_array($extension,$allowed)){
                                $error['image'] ='file upload phải là ảnh';
                                }
                        //        - File upload ko đc lớn hơn 2MB
                                $size_b = $_FILES['image']['size'];
                                $size_mb = $size_b / 1024 /1024;
                                if($size_mb >2){
                                    $error['image'] = 'File upload k đc lớn hơn 2MB';
                                }
                            }
                            
            if(empty($error)){
                $result='Nhập thành công';
                move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
                $this->customer->addCustomer($name,$email,$phone,$image);
                $customers=$this->list_customer();
                // return $this->render("customer.ListCustomer",compact('customers'));
                return '';
            }
        }
        $this->render("customer.AddCustomer",compact('result','error'));
    }

    public function detailCustomer($id)
    {
            $customer = $this->customer->getOneCustomer($id);
            $this->render("customer.EditCustomer",compact('customer'));
            // return $customer;
        }
    public function edit_customer($id){
        $customer = $this->customer->getOneCustomer($id);
        if(isset($_POST['submit'])){
            $name=$_POST['name'];
            $email=$_POST['email'];
            $phone=$_POST['phone'];
            $image=$_FILES['image']['name'];
            $target_dir = "./public/image/";
            $target_file = $target_dir . basename($image);
            $image_old=$customer->image;
            if($image==''){
                $this->customer->updateCustomer($id,$name,$email,$phone,$image_old);
                $customers=$this->list_customer();
                return '';
            }else{
                move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
                $this->customer->updateCustomer($id,$name,$email,$phone,$image);
                $customers=$this->list_customer();
                return '';
            }
        }
            $this->render("customer.EditCustomer",compact('customer'));
    }

    public function delete_customer($id){
        $this->customer->deleteCustomer($id);
        $customers=$this->list_customer();
    }
}
