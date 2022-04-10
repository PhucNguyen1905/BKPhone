<?php
class PhoneModel extends DB
{
    public function GetPhonesWithBrand()
    {
        $sql = "SELECT product.*, category.name as brand FROM product left join category on product.category_id = category.id";
        return $this->getData($sql);
    }
    public function GetNewestPhoneInEachBrand()
    {
        $sql = "SELECT product.name, final_price, thumbnail, product.description FROM product GROUP BY category_id HAVING max(updated_at)";
        return $this->getData($sql);
    }
}
