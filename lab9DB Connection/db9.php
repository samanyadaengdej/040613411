<?php include "db.php"?>

<?php
    $stmt = $pdo->prepare("UPDATE member SET `name`=?,`address`=?,`mobile`=?,`email`=? WHERE username=?");
    $stmt->bindParam(1,$_POST["name"]);
    $stmt->bindParam(2,$_POST["address"]);
    $stmt->bindParam(3,$_POST["mobile"]);
    $stmt->bindParam(4,$_POST["email"]);
    $stmt->bindParam(5,$_POST["username"]);
    if ($stmt->execute())
    {
        header("location: HW 9 - Workshop 9.php");
    }     
?>