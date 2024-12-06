<?php 

include('config.php');

if(isset($_POST['upload'])){




    $NAME =$_POST['name'];
    $PRICE =$_POST['price'];
    $IMAGE =$_FILES['image'];
    $image_location =$_FILES['image']['tmp_name'];
    $image_name     =$_FILES['image']['name'];
    $image_up   = "iamges/".$image_name;
    $insert = "INSERT INTO prod (name , price , image) VALUES ('$NANME','$PRICE','$image_up')";
    mysqli_query($con, $insert);
    if(move_uploaded_file ($image_location, 'iamges/'.$image_name)){

        echo "<script> alert('تم رفع المنتج بنجاح') </script>";
    }else{
        echo "<script> alert('حدث مشكله لم يتم رفع المنتج ') </script>";
    }  
    header('location: index.php');
    exit;
}


?>