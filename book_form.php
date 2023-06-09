<?php
require_once ("db_connection.php");

if (isset($_POST["send"])){
    $name=$_POST["name"];
    $email=$_POST["email"];
    $phone=$_POST["phone"];
    $address=$_POST["address"];
    $location=$_POST["location"];
    $guests=$_POST["guests"];
    $arrivals=$_POST["arrivals"];
    $leaving=$_POST["leaving"];

    $query="INSERT INTO book (name,email,phone,address,location,guests,arrivals,leaving) VALUES (?,?,?,?,?,?,?,?)";
    $stmt=$db_connect->prepare($query);
    $stmt->execute([$name,$email,$phone,$address,$location,$guests,$arrivals,$leaving]);
    header("Location:book.php");
}else{
    echo "Something went wrong";
}
?>