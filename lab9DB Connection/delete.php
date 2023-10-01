<?php include "db.php" ?>

<?php
    $stmt = $pdo->prepare("DELETE FROM member WHERE username=?");
    $stmt->bindParam(1,$_GET["username"]); 
    if ($stmt->execute())
    {
        header("location: HW 8 - Workshop 3.php");
    }     
?>