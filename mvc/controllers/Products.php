<?php

class Products extends Controller
{
    public $brandModel, $productMode, $allBrand;

    public function __construct()
    {
        $this->brandModel = $this->model("BrandModel");
        $this->allBrand = $this->brandModel->GetBrandList();
        $this->phoneModel = $this->model("PhoneModel");
    }

    public function getPage($category_id = 0, $page = 1, $filter = 1)
    {
        if ($category_id == 0) {
            for ($i = 0; $i < count($this->allBrand); $i++) {
                $category[$i] = $this->allBrand[$i]["id"];
            }
            $allProductBrand = $this->phoneModel->getAllProduct($filter);
            $currentIndex = ($page - 1) * 12;
            $countAllProduct = count($allProductBrand);
            $numPages = ceil($countAllProduct / 12);
            $this->view("components/productList", [
                "allProductBrand" => $allProductBrand,
                "allBrand" => $this->allBrand,
                "category_id" => $category_id,
                "numPages" => $numPages,
                "currentIndex" => $currentIndex,
                "pages" => $page,
                "filter" => $filter
            ]);
        } else {
            $allProductBrand = $this->phoneModel->selectProductBrand($category_id, $filter);
            $currentIndex = ($page - 1) * 12;
            $countAllProduct = count($allProductBrand);
            $numPages = ceil($countAllProduct / 12);
            $this->view("components/productList", [
                "allProductBrand" => $allProductBrand,
                "allBrand" => $this->allBrand,
                "category_id" => $category_id,
                "numPages" => $numPages,
                "currentIndex" => $currentIndex,
                "pages" => $page,
                "filter" => $filter
            ]);
        }
    }

    public function card($id = 1)
    {
        $this->view("components/card");
    }

    public function checkout($id = 1)
    {
        $this->view("components/checkout");
    }

    public function paymentOnline($id = 1)
    {
        $this->view("components/paymentOnline");
    }
    public function addToCart()
    {
        header('Location: http://localhost/BKPhone/Login');
        if (!empty($_POST)) {
            $action = getPostData('action');
            $id = getPostData('productId');
            $num = getPostData('num');

            $cart = [];
            if (isset($_COOKIE['cart'])) {
                $json = $_COOKIE['cart'];
                $cart = json_decode($json, true);
            }

            switch ($action) {
                case 'add':
                    $isFind = false;
                    for ($i = 0; $i < count($cart); $i++) {
                        if ($cart[$i]['id'] == $id) {
                            $cart[$i]['num'] += $num;
                            $isFind = true;
                            break;
                        }
                    }

                    if (!$isFind) {
                        $cart[] = [
                            'id' => $id,
                            'num' => $num
                        ];
                    }
                    setcookie('cart', json_encode($cart), time() + 30 * 24 * 60 * 60, '/');
                    break;
            }
        }
    }
}
