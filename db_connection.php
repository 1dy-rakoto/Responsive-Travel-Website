<?php
try{
    $db_connect=new PDO("mysql:host=localhost;dbname=book_db","root","");
    $db_connect->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
  echo "connection failed:".$e->getMessage();
}