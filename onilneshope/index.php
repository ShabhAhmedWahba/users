<!-- صفحه الادمن بتاع ادخال البيانات -->
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200..1000&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shope oniline |اضافه منتجات</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <center>
        <div class="main">
            <form action="insert.php" method="post"  enctype="multipart/form-data" > 
            <h2>موقع تسويقي اونلاين</h2>
            <img src="amg.jpeg" alt="logo" width="400px">
            <br>
            <input type="text" name='name'>
            <br>
            <input type="text" name='price'>
            <br>
             <input type="file" id="file" name='image' style='display:none;'>
             <label for="file">اختيار صوره للمنتج</label>
              <button type="submit" name="upload">✔ رفع المنتج</button>
             
             <br> 
             <a href="products.php">عرض كل المنتجات </a>
             </form>
        </div>
        <p>!Developer By Ahmed saber wahbh</p>
    </center>
</body>
</html>