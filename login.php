<?php
session_start();
if (isset($_SESSION["user"])) {
    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div class="container">
        <div class="box form-box">
        <h3>Login Now</h3>
        <?php
        if (isset($_POST["login"])) {
            $email = $_POST["email"];
            $password = $_POST["password"];
            if (empty($email) || empty($password)) {
                echo "<div class= 'alert alert-danger'>Please fill all fields</div>";
            } else {
            require_once "database.php";
               $sql = "SELECT * FROM users WHERE email = '$email'";
               $result = mysqli_query($conn, $sql);
               $user = mysqli_fetch_array($result, MYSQLI_ASSOC);
                if ($user) {
                    if (password_verify($password, $user["password"])) {
                        session_start();
                        $_SESSION["user"] = "yes";
                        header("Location: index.php");
                        die();
                    }else {
                        echo "<div class= 'Alert Alert-danger'>Password does not match</div>";
                    }
                }else {
            echo "<div class= 'Alert Alert-danger'>Account not registered</div>";
        }
    
        }
    }
        ?>
        <form action="login.php" method="post">
            <div class="form-group">
                <label for="email">Enter Email</label>
                <input type="email" placeholder="Enter Email" name="email" class="form-control">
            </div>
            <div class="form-group">
                <label for="email">Enter Password</label>
                <input type="password" placeholder="Enter Password" name="password" class="form-control">
            </div>
            <div class="form-btn">
                <input type="submit" value="Login:" name="login" class="btn btn-primary">
            </div>
        </form>
    <div><p>Not registered yet? <a href="registration.php">Register here</a></p></div>
    </div>
</body>
</html>