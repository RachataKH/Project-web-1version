<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1 style="text-align: center;">WEBTOON</h1>
    <hr>
    <div style="text-align: center;">
    <?php
        $login = $_POST["Login"];
        $password = $_POST["Password"];
        if($login == "admin" && $password == "ad1234")
            echo "ยินดีต้อนรับคุณ ADMIN";
        elseif($login == "member" && $password == "mem1234")
            echo "ยินดีต้อนรับคุณ MEMBER";
        else
            echo "ชื่อบัญชีหรือรหัสผ่านไม่ถูกต้อง"
    ?>
        <br><a href="index.php">กลับไปที่หน้าหลัก</a>
    </div>
</body>
</html>