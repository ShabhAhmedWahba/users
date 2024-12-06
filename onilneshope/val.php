<?php

include("config.php");

// تحقق من وجود الـ ID في الرابط
if (isset($_GET['id'])) {
    $ID = ($_GET['id']); // تحويل القيمة إلى عدد صحيح لمنع SQL Injection
    $up = mysqli_query($con, "SELECT * FROM prod WHERE id = $ID");
    
    // تحقق من وجود بيانات المنتج في قاعدة البيانات
    if ($data = mysqli_fetch_array($up)) {
        // عرض بيانات المنتج
    } else {
        echo "المنتج غير موجود.";
        exit;
    }
} else {
    echo "الـ ID غير موجود.";
    exit;
}

?>
<!DOCTYPE html>
<html lang="ar">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200..1000&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تاكيد شراء المنتج</title>
    <style>
        input {
            display: none;
        }
        .main {
            width: 30%;
            padding: 20px;
            box-shadow: 1px 1px 10px silver;
            margin-top: 50px;
        }
    </style>
</head>
<body>
<center>
    <div class="main">
        <form action="insert_card.php" method="post">
            <h2>هل فعلاً تريد شراء المنتج؟</h2>
            <input type="text" name="id" value='<?php echo htmlspecialchars($data['id']); ?>'>
            <input type="text" name="name" value='<?php echo htmlspecialchars($data['name']); ?>'>
            <input type="text" name="price" value='<?php echo htmlspecialchars($data['price']); ?>'>
            <button name="add" type="submit" class='btn btn-warning'>تأكيد إضافة المنتج للعربة</button>
            <br>
            <a href="shop.php">الرجوع إلى صفحة المنتجات</a>
        </form>
    </div>
</center>
</body>
</html>
