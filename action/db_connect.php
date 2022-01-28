<?php
 $hostName="localhost";
$userName="root";
$password="";
$dbName="cr10-ahmad-taktak-biglibrary";

$conn=new mysqli($hostName,$userName,$password,$dbName);

 
/* class Database {
    private $hostName = "localhost";
    private $userName = "root";
    private $password = "";
    private $dbName = "cr10-ahmad-taktak-biglibrary"; // crud_login_wc
    private $conn;
    function __construct()
    {
        $this->conn = new mysqli($this->hostName, $this->userName,$this->password, $this->dbName);
    }
    function __destruct()
    {
        $this->conn->close();
    }
}

///red
function read($table, $columns = "*" ,$join= "", $where = "", $order = ""){
    $sql = "SELECT $columns FROM $table $join $where $order";
    $result = $this->conn->query($sql);
    $fetch_data = $result->fetch_all(MYSQLI_ASSOC);
    return $fetch_data;
}


 */














    /* $obj = new Database(); */