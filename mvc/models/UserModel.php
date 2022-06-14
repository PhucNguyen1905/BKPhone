<?php
class UserModel extends DB
{

    public function AddUser($fullname, $email, $password, $phone, $address)
    {
        $result = false;

        if ($fullname == '' || $email == '' || $password == '' || $phone == '' || $address == ''  || strlen($password) < 6) {
            return [
                "result" => $result
            ];
        }
        $userExist = $this->getData("SELECT * FROM user WHERE email = '$email'", true);
        if ($userExist != NULL) {
            return [
                "result" => $result
            ];
        } else {
            $sql = "INSERT INTO user(fullname, email, phone_number, address, password, role_id)
            VALUES('$fullname','$email','$phone','$address','$password',1)";
            $this->modifyData($sql);
            $result = true;
            return [
                "result" => $result
            ];
        }
    }

    public function authenUser($email, $password)
    {
        $result = false;
        $sql = "SELECT * FROM user WHERE email='$email' AND password='$password'";
        $userExist = $this->getData($sql, true);
        if ($userExist == null) {
            return [
                "result" => $result
            ];
        } else {
            $token = md5($userExist['email'] . time());
            setcookie('token', $token, time() + 7 * 24 * 60 * 60, '/');
            $created_at = date('Y-m-d H:i:s');

            $_SESSION['user'] = $userExist;

            $userId = $userExist['id'];
            $sql = "INSERT INTO Tokens (user_id, token, created_at) values ('$userId', '$token', '$created_at')";
            $this->modifyData($sql);
            $result = true;
            return [
                "result" => $result,
                "role_id" => $userExist["role_id"]
            ];
        }
    }

    public function deleteToken($id, $token)
    {
        $sql = "DELETE FROM tokens WHERE user_id = '$id' AND token = '$token'";
        $this->modifyData($sql);
    }
}
