<?php
namespace App\Controllers;
class CustomerController extends BaseController{
    public function index(){
        $title="Danh sách khách hàng";
        $arr=[
            [
                "name"=>"Lê Việt Anh",
                "email"=>"anhlvph30859"
            ],
            [
                "name"=>"Lê Văn Trung",
                "email"=>"anhlvph30859"
            ]
        ];
        $this->render('customer.index',compact('title','arr'));
    }
}