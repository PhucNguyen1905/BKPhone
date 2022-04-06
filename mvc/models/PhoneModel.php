<?php
class PhoneModel extends DB
{
    public function GetPhonesWithBrand()
    {
        $sql = "SELECT product.*, category.name as brand FROM product left join category on product.category_id = category.id";
        return $this->getData($sql);
    }
}
