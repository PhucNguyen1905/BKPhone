<?php

class Admin extends Controller{

    public function __construct(){
        $this->orderModel = $this->model("OrderModel");
    }

    function GetPage() {
        $doanhthu = $this->orderModel->getDoanhthu();
        $this->view("admin",[
            "doanhthu"=>$doanhthu
        ]);
    }
}
