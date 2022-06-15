<?php
require_once('mvc/core/Helper.php');
class Login extends Controller
{
    public $db = null;
    public function __construct()
    {
        $this->db = $this->model('UserModel');
    }
    public function GetPage()
    {
        $this->view("login", []);
    }

    public function PostLogin()
    {

        if (isset($_POST["btnLogin"])) {
            // get data
            $email = getPostData('email');
            $password = getPostData('password');
            $password = md5($password);


            $result = $this->db->authenUser($email, $password);

            // show home

            if ($result["result"]) {
                if ($result["role_id"] == 1) {
                    header('Location: http://localhost/BKPhone/Home');
                } else {
                    header('Location: http://localhost/Laptrinhweb/admin');
                }
            } else {
                header('Location: http://localhost/Laptrinhweb/Login');
            }
        }
    }

    public function logout()
    {
        $user = getUserToken();
        if ($user != null) {
            $token = getCookie('token');
            $id = $user['id'];
            $this->db->deleteToken($id, $token);
            setcookie('token', '', time() - 100, '/');
        }
        session_destroy();
        header('Location: http://localhost/BKPhone/Home');
    }
}
