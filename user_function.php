<?php


include_once 'PDOUtil.php';


function login($username,$password){
    $link= createmySQLconnection();
    $query="SELECT * FROM user where username = ? AND password=?";
    $stmt = $link->prepare($query);
    $stmt->bindParam(1,$username);
    $stmt->bindParam(2,$password);
    $stmt->execute();
    $result=$stmt->fetch();
    closeConnection($link);
    return $result;


}


?>