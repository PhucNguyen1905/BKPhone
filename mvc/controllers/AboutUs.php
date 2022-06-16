<?php

class AboutUs extends Controller
{
    public $dbBrand = null;
    public function __construct()
    {
        $this->dbBrand = $this->model('BrandModel');
    }
    public function GetPage()
    {
        $brands = $this->dbBrand->GetBrandList();
        $this->view("aboutUs", ['brands' => $brands]);
    }
}
