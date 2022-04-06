<?php

class AdminPhone extends Controller
{
    public $db = null;
    public function __construct()
    {
        $this->db = $this->model('PhoneModel');
    }
    public function GetPage()
    {
        $phones = $this->db->GetPhonesWithBrand();
        $this->view("admin/phone", ['phones' => $phones]);
    }
}
