<?php
namespace App\Controllers;
use App\Models\Product;
use App\Models\Category;
class ProductController extends BaseController{
    protected $product;
    public function __construct()
    {
        $this->product= new Product();
    }
    public function getCategory(){
        $category=new Category();
        return $category->getCategory();
    }
    public function list($name=true){
            $products=$this->product->getProduct();
            $categories=$this->getCategory();
            // print_r($categories);
            if ($products !== false) {
                $this->render("product.list", compact('products','categories'));
            } else {
                echo "Error fetching customer data";
            }
    }
    public function validate(){
        
    }
    public function add(){
        $categories=$this->getCategory();
        $this->render("product.add",['categories'=>$categories]);
    }

    public function store(){
        $categories=$this->getCategory();
        $errors=[];
        $result='';
        $name=$_POST['name'];
        $price=$_POST['price'];
        $amount=$_POST['amount'];
        $id_category=$_POST['id_category'];
        $image_name=$_FILES['image']['name'];
        $file_direct='./public/image/'.basename($image_name);
        if(empty(trim($name))){
            $errors['name']='Name cannot empty';
        }
        if(empty($price)){
            $errors['price']='Price cannot empty';
        }elseif(!is_numeric($price)){
            $errors['price']='Price is not a number';
        }
        if(empty($amount)){
            $errors['amount']='Amount cannot empty';
        }elseif(!is_numeric($amount)){
            $errors['amount']='Amount is not a number';
        }
        if(empty($image_name)){
            $errors['image']='Image cannot empty';
        }
        if(!$errors){
            move_uploaded_file($_FILES['image']['tmp_name'],$file_direct);
            $this->product->add($name,$id_category,$price,$amount,$image_name);
            $result='Product added successfully';
        }
        $this->render("product.add",
        [
            'categories'=>$categories,
            'errors'=>$errors,
            'result'=>$result,
        ]);
    }

    public function edit($id){
        $product = $this->product->getOneProduct($id);
        $categories=$this->getCategory();
        $errors=[];
        $result='';
        $upload=false;
        if(isset($_POST['submit'])){
        $name=$_POST['name'];
        $price=$_POST['price'];
        $amount=$_POST['amount'];
        $id_category=$_POST['id_category'];
        $image_name=$_FILES['image']['name'];
        $file_direct='./public/image/'.basename($image_name);
        if(empty(trim($name))){
            $errors['name']='Name cannot empty';
        }
        if(empty($price)){
            $errors['price']='Price cannot empty';
        }elseif(!is_numeric($price)){
            $errors['price']='Price is not a number';
        }
        if(empty($amount)){
            $errors['amount']='Amount cannot empty';
        }elseif(!is_numeric($amount)){
            $errors['amount']='Amount is not a number';
        }
        if(empty($image_name)){
            $upload=true;
            $image_name=$product->image;
        }
        if(!$errors){
            if(!$upload){
                move_uploaded_file($_FILES['image']['tmp_name'],$file_direct);
            }
            $this->product->update($id,$name,$id_category,$price,$amount,$image_name);
            $result='Repair the product successfully';
        }
        }
        $this->render("product.edit",compact('product','categories','errors','result'));
    }

    public function delete($id){
        // $this->product->delete($id);
    }
}
