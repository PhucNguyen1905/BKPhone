<?php

class AdminBrand extends Controller
{
    public $db = null;
    public function __construct()
    {
        $this->db = $this->model('BrandModel');
    }
    public function GetPage()
    {
        // echo 'Hello From Brand page';
        $brands = $this->db->GetBrandList();
        $this->view("admin/brand", ['brands' => $brands]);
    }
}
