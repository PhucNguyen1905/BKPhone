<?php
require_once('mvc/core/Helper.php');
class AdminCustomer extends Controller
{
    public $db = null;
    public function __construct()
    {
        $this->db = $this->model('AdminCustomerModel');
    }
    public function GetPage()
    {
        $users = $this->db->getAllUser();
        $this->view("admin/user", ['users' => $users]);
    }

    public function Add()
    {
        $this->view("admin/add_account", []);
    }

    public function NewAccount()
    {
        $fullname = getPostData('fullname');
        $email = getPostData('email');
        $phone = getPostData('phone');
        $password = md5(getPostData('password'));
        $address = getPostData('address');
        $this->db->addUser($fullname, $email, $password, $phone, $address);
        header('Location: http://localhost/BKPhone/AdminCustomer');
    }

    public function DeleteUser($id)
    {
        $this->db->deletedUser($id);
        header('Location: http://localhost/BKPhone/AdminCustomer');
    }
    public function ViewEdit($id)
    {
        $user = $this->db->getUserById($id);
        $this->view("admin/edit_user", ['user' => $user]);
    }
    public function PostEdit($id)
    {
        $fullname = getPostData('fullname');
        $email = getPostData('email');
        $phone = getPostData('phone');
        $password = getPostData('password');
        $address = getPostData('address');
        $this->db->updateUser($id, $fullname, $email, $password, $phone, $address);
        header('Location: http://localhost/BKPhone/AdminCustomer');
    }
}
