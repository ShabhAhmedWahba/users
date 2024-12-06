?php




include_once('db.php');

if(isset($_GET["action"]) &&  $_GET["action"]=='edit'){
    $action='edit';
    $id=$_GET['id'];
    $sql="SELECT * FROM users WHERE id = ".$id;
    $user  =mysqli_query($conn, $del_sql);

    if($user){


        $current_user=$user->fetch_assoc()
        $name=$current_user['name'];
        $email=$current_user['email'];
        $mobile=$current_user['mobile'];
        $password=$current_user['password'];

        var_dump($user);

    }
    
}

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- استخدام رابط CDN لـ Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>User_app</title>
</head>
<body>
    <div class="container">
        <div class="wrapper p-5 m-5"></div>
        <!-- Header Section with Back Link -->
        <div class="d-flex p-2 justify-content-between">
    
            <h2>Add User</h2>
            <div><a href="index.php"><i data-feather="corner-down-left"></i></a></div>
        </div>

        <!-- Form for Adding User -->
        <form action="index.php" method="post">
            <div class="mb-3">
                <label class="form-label">Name</label>
                <input type="text" class="form-control" placeholder="Enter your name" autocomplete="off" name="name">
            </div>
            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" class="form-control" placeholder="Enter your email" name="email" autocomplete="off">
            </div>
            <div class="mb-3">
                <label class="form-label">Mobile</label>
                <input type="tel" class="form-control" placeholder="Enter your mobile number" name="mobile" autocomplete="off">
            </div>
            <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" class="form-control" placeholder="Enter your password" name="password" autocomplete="off">
            </div>
            <input type="submit" class="btn btn-primary" value="Save" name="Save">
        </form>
    </div>

    <!-- Feather Icons & Bootstrap JS -->
    <script src="https://unpkg.com/feather-icons"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Initialize Feather Icons
        feather.replace();
    </script>
</body>
</html>
