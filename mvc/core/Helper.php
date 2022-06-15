<?php

function getPostData($name)
{
    if (isset($_POST[$name])) {
        return trim($_POST[$name]);
    }
    return '';
}

function getCookie($key)
{
    $value = '';
    if (isset($_COOKIE[$key])) {
        $value = $_COOKIE[$key];
    }
    return trim($value);
}

function getDataUser($sql)
{
    $data = null;

    //open connection
    $conn = mysqli_connect(HOST, USERNAME, PASSWORD, DATABASE);
    mysqli_set_charset($conn, 'utf8');

    //query
    $resultset = mysqli_query($conn, $sql);
    if ($resultset) {
        $data = mysqli_fetch_array($resultset, 1);
        //close connection
        mysqli_close($conn);
    }
    return $data;
}
function getUserToken($noSession = 0)
{
    if (isset($_SESSION['user']) && $noSession == 0) {
        return $_SESSION['user'];
    }
    $token = getCookie('token');
    $sql = "select * from tokens where token = '$token'";
    $item = getDataUser($sql);
    if ($item != null) {
        $userId = $item['user_id'];
        $sql = "select * from user where id = '$userId' and deleted = 0";
        $item = getDataUser($sql);
        if ($item != null) {
            $_SESSION['user'] = $item;
            return $item;
        }
    }

    return null;
}
