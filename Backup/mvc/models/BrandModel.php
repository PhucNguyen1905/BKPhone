<?php
class BrandModel extends DB
{
    public function GetBrandList()
    {
        $sql = "SELECT * FROM category";
        return $this->getData($sql);
    }
    public function GetBrandById($id)
    {
        $sql = "SELECT * FROM category WHERE id = $id";
        return $this->getData($sql, true);
    }

    public function InsertBrand($name)
    {
        $sql = "INSERT INTO category (name) VALUES ('$name')";
        $this->modifyData($sql);
    }
    public function DeleteBrand($id)
    {
        $sql = "DELETE FROM category WHERE id = $id";
        $this->modifyData($sql);
    }
    public function UpdateBrand($id, $name)
    {
        $sql = "UPDATE category SET name = '$name' WHERE id = $id";
        $this->modifyData($sql);
    }
}
