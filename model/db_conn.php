<?php
/*$host = "localhost";
$usr = "monica";
$pass = "mrgn1118";
$db = "usuario";*/

$servername = "localhost";
$username  = "monica";
$password = "mrgn1118";
$dbname = "usuario";


/*private function conectar(){
    try{
        $conn = new PDO("mysql:host=$this->host;dbname=$this->db", $this->usr, $this->pass)
    }catch(PDOException $e){
        die('Connection Failed: error ' . $e->getMessage());
    }
    return $conn;
}*/
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
 //echo "Connected successfully";