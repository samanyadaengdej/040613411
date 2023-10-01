<?php include "db.php" ?>

<html>

<head>
    <meta charset="utf-8">
</head>

<body>

<?php
    $stmt = $pdo->prepare("SELECT * FROM member");
   
    $stmt->execute();
?>

<?php while ($row = $stmt->fetch()) : ?>

    <div>
        <a href="detail.php?username=<?=$row["username"]?>"> <br><br>
        <img src='member_photo/<?=$row["username"]?>.jpg' width='100'><br><br>
        ชื่อสมาชิก: <?=$row["username"]?> <br><br>
        ที่อยู่: <?=$row["address"]?> <br><br>
        อีเมล์: <?=$row["email"]?> <br><br>

        <div>
            <!-- <img src='member_photo/<?=$row["username"]?>.jpg' width='100'><br> -->
        </div>
    </div>

<?php endwhile; ?>

</body>

</html>