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

        while ($row = $stmt->fetch()) {
            echo "ชื่อสมาชิก: " . $row ["name"] . "<br>";
            echo "ที่อยู่: " . $row ["address"] . "<br>";
            echo "อีเมลล์: " . $row ["email"] . "<br>";
            echo "<hr>\n";
        }
    ?>
</body>
</html>