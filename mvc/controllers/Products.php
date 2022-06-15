<?php

class Products extends Controller
{
    public $brandModel, $productMode, $allBrand;

    public function __construct(){
        $this->brandModel = $this->model("BrandModel");
        $this->allBrand = $this->brandModel->GetBrandList();
        $this->phoneModel = $this->model("PhoneModel");
    }
    public function getPage($category_id = 0, $page = 1, $filter=1){
        if($category_id == 0){
            for($i=0;$i<count($this->allBrand);$i++){
                $category[$i] = $this->allBrand[$i]["id"];
            }
            $allProductBrand = $this->phoneModel->getAllProduct($filter);
            $currentIndex = ($page-1) * 12;
            $countAllProduct = count($allProductBrand);
            $numPages = ceil($countAllProduct/12);
            $this->view("components/productList",[
                "allProductBrand"=>$allProductBrand,
                "allBrand"=>$this->allBrand,
                "category_id"=>$category_id,
                "numPages"=>$numPages,
                "currentIndex"=>$currentIndex,
                "pages"=>$page,
                "filter"=>$filter
            ]);
        }
        else {
            $allProductBrand = $this->phoneModel->selectProductBrand($category_id,$filter);
            $currentIndex = ($page-1) * 12;
            $countAllProduct = count($allProductBrand);
            $numPages = ceil($countAllProduct/12);
            $this->view("components/productList",[
                "allProductBrand"=>$allProductBrand,
                "allBrand"=>$this->allBrand,
                "category_id"=>$category_id,
                "numPages"=>$numPages,
                "currentIndex"=>$currentIndex,
                "pages"=>$page,
                "filter"=>$filter
            ]);
        }
    }
}