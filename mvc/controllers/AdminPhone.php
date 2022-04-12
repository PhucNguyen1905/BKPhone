<?php
require_once('mvc/core/Helper.php');
class AdminPhone extends Controller
{
    public $db = null;
    public $brand_db = null;
    public function __construct()
    {
        $this->db = $this->model('PhoneModel');
        $this->brand_db = $this->model('BrandModel');
    }
    public function GetPage()
    {
        $phones = $this->db->GetPhonesWithBrand();
        $this->view("admin/phone", ['phones' => $phones]);
    }
    public function Add()
    {
        $brands = $this->brand_db->GetBrandList();
        $this->view("admin/add", ['type' => 'phone', 'brands' => $brands]);
    }
    public function NewPhone()
    {
        $brand = getPostData('brand');
        $name = getPostData('name');
        $base_price = getPostData('base_price');
        $final_price = getPostData('final_price');
        $description = getPostData('description');
        $image = getPostData('image');
        $this->db->InsertPhone($brand, $name, $base_price, $final_price, $description, $image);
        header('Location: http://localhost/BKPhone/AdminPhone');
    }
    public function DeletePhone($id)
    {
        $this->db->DeletePhone($id);
        header('Location: http://localhost/BKPhone/AdminPhone');
    }
    public function ViewEdit($id)
    {
        $phone = $this->db->GetPhoneById($id);
        $brands = $this->brand_db->GetBrandList();
        $this->view("admin/edit", ['phone' => $phone, 'type' => 'phone', 'brands' => $brands]);
    }
    public function PostEdit($id)
    {
        $brand = getPostData('brand');
        $name = getPostData('name');
        $base_price = getPostData('base_price');
        $final_price = getPostData('final_price');
        $description = getPostData('description');
        $image = getPostData('image');
        $this->db->UpdatePhone($id, $brand, $name, $base_price, $final_price, $description, $image);
        header('Location: http://localhost/BKPhone/AdminPhone');
    }
}
