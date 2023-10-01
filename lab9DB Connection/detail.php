<?php include "db.php"?>

<html>

<head>
    <meta charset="utf-8">
</head> 

<?php
    $stmt = $pdo->prepare("SELECT * FROM member WHERE username=?");
    $stmt->bindParam(1,$_GET["username"]);
    $stmt->execute();
    $row = $stmt->fetch();
?>

    <div style="display: flex">
    <div style="padding: 15px">

    
    <img src='member_photo/<?=$row["username"]?>.jpg' width='100'> <br>
    <h2> <?=$row["name"]?> </h2>

        ที่อยู่: <?=$row["address"]?> <br>
        อีเมลล์: <?=$row["email"]?>บาท <br><br>
    </div>
    </div>
    
</html>