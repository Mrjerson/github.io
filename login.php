<?php
    $username = $_POST['username'];
    $password = $_POST['password'];
    $password1 = $_POST['password1'];
    $conn = new mysqli('sql308.infinityfree.com','if0_34994857','BeIYVzZ0NCdM','if0_34994857_test');
    if($conn->connect_error){
        die('Connection Failed : '.$conn->connect_error);
    }else{
        $stmt = $conn->prepare("insert into registration(username, password, password1) values(?, ?, ?)");
        $stmt->bind_param("sss",$username, $password, $password1);
        $stmt->execute();
        echo "registratio Succesfully";
        $stmt->close();
        $conn->close();
    }
?>
