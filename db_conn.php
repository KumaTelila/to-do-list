<?php
$sname="localhost";
$uname="root";
$pass="";
$db_name="to_do_list";
try
{
    $conn= new PDO("mysql:host=$sname; dbname=$db_name", $uname, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
}catch(PDOException $e){
echo "connection failed: ", $e->getMessage();
}

?>