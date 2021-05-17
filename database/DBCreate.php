<?php


class CreateDb
{
    public $servername;
    public $username;
    public $password;
    public $dbname;
    public $userTable;
    public $productsTable;
    public $con;


    // class constructor
    public function __construct(
        $dbname = "pwww",
        $userTable = "users",
        $productTable = "products",
        $servername = "localhost",
        $username = "root",
        $password = ""
    ) {
        $this->dbname = $dbname;
        $this->userTable = $userTable;
        $this->productTable = $productTable;
        $this->servername = $servername;
        $this->username = $username;
        $this->password = $password;

        $this->con = mysqli_connect($servername, $username, $password);

        if (!$this->con) {
            die("Connection failed : " . mysqli_connect_error());
        }

        $sql = "CREATE DATABASE IF NOT EXISTS $dbname";

        if (mysqli_query($this->con, $sql)) {

            $this->con = mysqli_connect($servername, $username, $password, $dbname);

            $sql = " CREATE TABLE IF NOT EXISTS $userTable
                            (id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                             firstname VARCHAR(30) NOT NULL,
                             lastname VARCHAR(30) NOT NULL,
                             email VARCHAR(50) NOT NULL,
                             password VARCHAR(50) NOT NULL
                            );";

            if (!mysqli_query($this->con, $sql)) {
                echo "Error creating table : " . mysqli_error($this->con);
            }

            $sql1 = " CREATE TABLE IF NOT EXISTS $productTable
                            (id INT(6) NOT NULL AUTO_INCREMENT PRIMARY KEY,
                            filename VARCHAR(255) NOT NULL,
                            name VARCHAR(255) NOT NULL,
                            description VARCHAR(255) NOT NULL,
                            price DECIMAL(5,2) NOT NULL
            );";

            if (!mysqli_query($this->con, $sql1)) {
                echo "Error creating table : " . mysqli_error($this->con);
            }
        } else {
            return false;
        }
    }

    function get_name() {
        return $this->dbname;}

}
