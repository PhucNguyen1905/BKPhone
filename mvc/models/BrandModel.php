<?php
class BrandModel extends DB
{
    public function GetBrandList()
    {
        $sql = "SELECT * FROM category";
        return $this->getData($sql);
    }
}
