<?php
class PhoneModel extends DB
{
    public function GetPhonesWithBrand()
    {
        $sql = "SELECT product.*, category.name as brand FROM product left join category on product.category_id = category.id";
        return $this->getData($sql);
    }

    public function GetDetail($product_id){
        $sql = "SELECT * FROM product WHERE id = $product_id;";
        return $this->getData($sql);
    }

    public function selectProduct($id){
        // $sql = "select * from product, category where id = '$id' and product.category_id = category.id";
        $sql = "select * from `product`,`category` where `product`.`id` = '$id' and `product`.`category_id` = `category`.`id`";
        return $this->getData($sql);
    }

    public function selectProductRelated($filter){
        $sql = "SELECT * FROM `product` WHERE category_id = '$filter' ; ";
        return $this->getData($sql);
    }
    
    public function getFeedback($filter){
        $sql = "SELECT * FROM `feedback`,`user` WHERE productID = '$filter' AND `feedback`.`userID` = user.id";
        return $this->getData($sql);
    }
    
    public function pushFeedback($userid, $productid, $content){
        $sql = "INSERT INTO `feedback` (`id`, `content`, `userID`, `productID`, `date`) VALUES ('', '$content' , '$userid'  , '$productid', current_timestamp());";
        $this->modifyData($sql);    
    }
}
