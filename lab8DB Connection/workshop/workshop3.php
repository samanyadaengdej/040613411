<?php include "connect.php" ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
        $stmt = $pdo->prepare("SELECT * FROM member");
        $stmt->execute();
    ?>
    <?php 
        while ($row = $stmt->fetch()):
            $imageFileName = "img/" . $row["name"] . ".jpg";
    ?>
    <div>
        <?php echo "ชื่อสมาชิก: " . $row["name"] . "<br>"; ?>
        <?php echo "ที่อยู่: " . $row["address"] . "<br>"; ?>
        <?php echo "อีเมลล์: " . $row["email"] . "<br>"; ?>
        <img src='<?php echo $imageFileName; ?>'><br>
        <?php echo "<hr>\n"?>
    </div>
    <?php endwhile; ?>
</body>
</html>