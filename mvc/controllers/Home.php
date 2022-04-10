<?php

class Home extends Controller
{
    public $dbBrand = null;
    public $dbPhone = null;
    public function __construct()
    {
        $this->dbBrand = $this->model('BrandModel');
        $this->dbPhone = $this->model('PhoneModel');
    }
    public function GetPage()
    {
        $brands = $this->dbBrand->GetBrandList();
        $lastPhones = $this->dbPhone->GetNewestPhoneInEachBrand();
        $this->view("home", ['brands' => $brands, 'phones' => $lastPhones]);
    }
}