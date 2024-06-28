<?php
namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\Category;
use App\Models\Product;

class CategoryController extends BaseController{
    protected $category;
    public function __construct()
    {
        $this->category= new Category();
    }
    public function getCategory(){
        $category=new Category();
        return $category->getCategory();
    }
    public function list($name=true){
        $categories=$this->category->getCategory();
        if ($categories !== false) {
            $this->render("category.list", compact('categories'));
        } else {
            echo "Error fetching customer data";
        }
    }
    public function validate(){
        
    }
    public function add(){
        $this->render("category.add");
    }

    public function store(){
        $errors=[];
        $result='';
        $name=$_POST['name'];
        if(empty(trim($name))){
            $errors['name']='Name cannot empty';
        }
        if(!$errors){
            $this->category->add($name);
            $result='Category added successfully';
        }
        $this->render("category.add",
        [
            'errors'=>$errors,
            'result'=>$result,
        ]);
    }

    public function edit($id){
        $category = $this->category->getOneCategory($id);
        $errors=[];
        $result='';
        if(isset($_POST['submit'])){
        $name=$_POST['name'];
        if(empty(trim($name))){
            $errors['name']='The name cannot empty';
        }
        if(!$errors){
            $this->category->update($id,$name);
            $result='Repair the category successfully';
        }
        }
        $this->render("category.edit",compact('category','errors','result'));
    }

    public function delete($id){
        $products=new Product();
        $numberProduct=$products->checkNumberProduct($id);
        $category = $this->category->getOneCategory($id);
        $categories=$this->category->getCategory();
        $result="";
        $count=$numberProduct->product_count;
        if($count==0){
            $this->category->delete($id);
            $result='Delete completed';
        }else{
            $result= "You have $count products related $category->name. You need delete all product whose have category is $category->name";
        }
        $this->render("category.list",compact('categories','result'));
    }
}