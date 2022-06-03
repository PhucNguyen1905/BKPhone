<?php

class ProductDetail extends Controller
{

    public $productModel;

    public function __construct()
    {
        $this->productModel = $this->model("PhoneModel");
    }
    public function GetPage()
    {
        $id = 1;
        $productItem = $this->productModel->selectProduct($id);
        $feedbacks = $this->productModel->getFeedback($id);
        $allProductRelated = $this->productModel->selectProductRelated($productItem[0]["category_id"]);
        // echo json_encode($productItem);
        $this->view("product_detail", [
            "productItem" => $productItem[0],
            "allProductRelated" => $allProductRelated,
            "feedbacks" => $feedbacks
        ]);
    }

    public function pushFeedback($id)
    {
        if (isset($_POST)) {
            $userid = $_POST['userid'];
            $productid = $_POST['productid'];
            $content = $_POST['content'];
            $this->productModel->pushFeedback($userid, $productid, $content);
        }
        $url = "Location: http://localhost/BKPhone/ProductDetail/productDetail/" . (string)$id;
        echo $url;
        header($url);
    }

    public function productDetail($id)
    {
        $productItem = $this->productModel->selectProduct($id);
        echo json_encode($productItem);
        if ($productItem == []) header("Location: http://localhost/BKPhone/ProductDetail/");
        $feedbacks = $this->productModel->getFeedback($id);
        $allProductRelated = $this->productModel->selectProductRelated($productItem[0]["category_id"]);
        $this->view("product/product_detail", [
            "productItem" => $productItem[0],
            "allProductRelated" => $allProductRelated,
            "feedbacks" => $feedbacks
        ]);
    }
}
