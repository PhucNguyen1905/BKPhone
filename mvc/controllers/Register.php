<?php
require_once('mvc/core/Helper.php');
class Register extends Controller
{
    public $db = null;
    public function __construct()
    {
        $this->db = $this->model('UserModel');
    }
    public function GetPage()
    {
        $this->view("register", []);
    }

    public function PostRegister()
    {

        if (isset($_POST["btnRegister"])) {
            // get data
            $fullname = getPostData('fullname');
            $email = getPostData('email');
            $password = getPostData('password');
            $password = md5($password);
            $phone = getPostData('phone');
            $address = getPostData('address');

            // Insert to db
            $result = $this->db->AddUser($fullname, $email, $password, $phone, $address);

            if ($result["result"]) {
                header('Location: http://localhost/BKPhone/Login');
            } else header('Location: http://localhost/BKPhone/Register');
        }
    }
}
