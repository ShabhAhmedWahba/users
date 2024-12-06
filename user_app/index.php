<?php
include_once('db.php');

// تعريف المتغير $action
$action = false;

if (isset($_POST['Save'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $add_sql = "INSERT INTO user (name, email, password, mobile) VALUES ('$name', '$email', '$password', '$mobile')";

    if (mysqli_query($conn, $add_sql)) {
        echo "User added successfully.";
        $action = "add"; // تعيين المتغير إذا نجحت العملية
    } else {
        echo "Error: " . mysqli_error($conn);
    }

} 
if(isset($_GET["action"]) &&  $_GET["action"]=='dle'){
    
    $id=$_GET['id'];
    $del_sql="DELETE FROM useres WHERE id =$id";
    $res_del = mysqli_query($conn, $del_sql);
    if (!$res_del){
        die(mysqli_error($conn));

    }else{
        $action = "del";
    }

    //var_dump($_GET);
  //  die();
}
$useres_sql = "SELECT * FROM user"; // تأكد من اسم الجدول الصحيح
$all_user = mysqli_query($conn, $useres_sql); // استخدام الاستعلام المعدل
$user=$all_user->fetch_assoc();
var_dump( $user);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/tostar.css">
    <title>User_app</title>
    
</head>
<body> 
    <div class="container">
        <div class="wrapper p-5 m-5"></div>
        <div class="d-flex p-2 justify-content-between mb-2">
            <h2>All users</h2>
            <div><a href="add_user.php"><i data-feather="user-plus"></i></a></div>

            </div>
            <div>
    <hr>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Mobile</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // تأكد من أن $all_user يحتوي على البيانات بعد الاستعلام
            while($user = $all_user->fetch_assoc()) { ?>
                <tr>
                    <td><?php echo $user['id']; ?> </td>
                    <td><?php echo $user['name']; ?> </td>
                    <td><?php echo $user['email']; ?> </td>
                    <td><?php echo $user['mobile']; ?> </td>
                    <td>Action</td>
                    <td> 
                    <div class="d-flex p-2 justify-content-evenly mb-2" >
                    <i onclick="confirm_delete(<?php echo $user['id']  ?>);" class="text-danger" data-feather="trash-2"></i>
                    <i onclick="edit(<?php echo $user['id']  ?>);" class="text-success " data-feather="edit"></i>
                 
                    </div>
                </td>

                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>


    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/feather-icons"></script>
    <script src="js/tostar.js"></script>
    <script src="js/man.js"></script>

    <?php if ($action == 'add') { ?>
        <script>
            show_add();
        </script>
    <?php } ?>
    <?php if ($action == 'del') { ?>
        <script>
            show_del();
        </script>

        
    <?php } ?>


     
    <script>
        feather.replace();
    </script>;
</body>
</html>
