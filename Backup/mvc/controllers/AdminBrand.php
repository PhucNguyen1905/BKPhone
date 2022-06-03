<?php
require_once('mvc/core/Helper.php');
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
    public function Add()
    {
        $this->view("admin/add", ['type' => 'brand']);
    }
    public function NewBrand()
    {
        $brandName = getPostData('name');
        if (strlen($brandName) == 0) {
            header('Location: http://localhost/BKPhone/AdminBrand/Add');
        } else {
            $this->db->InsertBrand($brandName);
        }
        header('Location: http://localhost/BKPhone/AdminBrand');
    }

    public function DeleteBrand($id)
    {
        $this->db->DeleteBrand($id);
        header('Location: http://localhost/BKPhone/AdminBrand');
    }
    public function ViewEdit($id)
    {
        $brand = $this->db->GetBrandById($id);
        $this->view("admin/edit", ['brand' => $brand, 'type' => 'brand']);
    }
    public function PostEdit($id)
    {
        $brandName = getPostData('name');
        $this->db->UpdateBrand($id, $brandName);
        header('Location: http://localhost/BKPhone/AdminBrand');
    }
}
