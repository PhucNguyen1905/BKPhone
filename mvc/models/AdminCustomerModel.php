<?php
require_once('mvc/core/Helper.php');
class AdminCustomerModel extends DB
{

    public function getAllUser()
    {
        $sql = "SELECT * FROM user";
        $data = $this->getData($sql);
        return $data;
    }
    public function getUserById($id)
    {
        $sql = "SELECT * FROM user  WHERE id = $id";
        $data = $this->getData($sql, true);
        return $data;
    }

    public function deletedUser($id)
    {
        $sql = "DELETE FROM user WHERE id = $id";
        $this->modifyData($sql);
    }

    public function selectUser($id)
    {
        $sql = "SELECT * FROM user WHERE id = '$id'";
        $userItem = $this->getData($sql, true);
        return $userItem;
    }


    public function updateUser($id, $fullname, $email, $password, $phone_number, $address)
    {
        if ($password != '') {
            $password = md5($password);
            $sql = "UPDATE user SET fullname = '$fullname', email = '$email', phone_number = '$phone_number', address = '$address', password = '$password' WHERE id = $id";
        } else $sql = "UPDATE user SET fullname = '$fullname', email = '$email', phone_number = '$phone_number', address = '$address' WHERE id = $id";
        $this->modifyData($sql);
        return true;
    }

    public function addUser($fullname, $email, $password, $phone_number, $address)
    {
        $sql = "INSERT INTO user(fullname, email, phone_number, address, password, role_id, deleted) VALUES ('$fullname', '$email', '$phone_number', '$address', '$password', 2, 0)";
        $this->modifyData($sql);
        return true;
    }
}
