<?php
class PhoneModel extends DB
{
    public function GetPhonesWithBrand()
    {
        $sql = "SELECT product.*, category.name as brand FROM product left join category on product.category_id = category.id";
        return $this->getData($sql);
    }
    public function InsertPhone($brand, $name, $base_price, $final_price, $description, $image)
    {
        $sql = "INSERT INTO product (category_id, name, base_price, final_price, thumbnail, description) VALUES ('$brand', '$name', '$base_price', '$final_price','$image','$description')";
        $this->modifyData($sql);
    }

    public function DeletePhone($id)
    {
        $sql = "DELETE FROM product WHERE id = $id";
        return $this->modifyData($sql);
    }
    public function GetPhoneByID($id)
    {
        $sql = "SELECT * FROM product WHERE id = $id";
        return $this->getData($sql, true);
    }
    public function UpdatePhone($id, $brand, $name, $base_price, $final_price, $description, $image)
    {
        $sql = "UPDATE product SET category_id = '$brand', name ='$name' , base_price= '$base_price', final_price= '$final_price', thumbnail= '$image', description= '$description' WHERE id =$id";
        $this->modifyData($sql);
    }
    // For homepage
    public function GetNewestPhoneInEachBrand()
    {
        $sql = "SELECT product.name, final_price, thumbnail, product.description FROM product GROUP BY category_id HAVING max(updated_at)";
        return $this->getData($sql);
    }
    // 
    // For detail
    public function GetDetail($product_id)
    {
        $sql = "SELECT * FROM product WHERE id = $product_id;";
        return $this->getData($sql);
    }
    public function selectProduct($id)
    {
        // $sql = "select * from product, category where id = '$id' and product.category_id = category.id";
        $sql = "select `product`.* from `product`,`category` where `product`.`id` = '$id' and `product`.`category_id` = `category`.`id`";
        return $this->getData($sql);
    }

    public function selectProductRelated($filter)
    {
        $sql = "SELECT * FROM `product` WHERE category_id = '$filter' ; ";
        return $this->getData($sql);
    }

    public function getFeedback($filter)
    {
        $sql = "SELECT * FROM `feedback`,`user` WHERE productID = '$filter' ";
        return $this->getData($sql);
    }

    public function pushFeedback($userid, $productid, $content)
    {
        $sql = "INSERT INTO `feedback` (`id`, `content`, `userID`, `productID`, `date`) VALUES ('', '$content' , '$userid'  , '$productid', current_timestamp());";
        $this->modifyData($sql);
    }
    // 
}