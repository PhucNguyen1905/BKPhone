<?php
require_once "config.php";
class DB
{
    public $con;

    function __construct()
    {
        // Open connection
        $this->con = mysqli_connect(HOST, USERNAME, PASSWORD, DATABASE);
        mysqli_set_charset($this->con, 'utf8');
    }

    // For insert, delete, update statements
    function modifyData($sql)
    {
        mysqli_query($this->con, $sql);
    }

    // For select statements
    function getData($sql, $oneRecord = false)
    {
        $data = null;

        $results = mysqli_query($this->con, $sql);
        if ($results) {
            if ($oneRecord) {
                $data = mysqli_fetch_array($results, 1);
            } else {
                $data = [];
                while (($row = mysqli_fetch_array($results, 1)) != null) {
                    $data[] = $row;
                }
            }
        }
        return $data;
    }

    function __destruct()
    {
        // Close connection
        mysqli_close($this->con);
    }
}
