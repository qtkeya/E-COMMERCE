<?php
session_start();
if (isset($_SESSION["user"])) {
    header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Registration Form</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link rel="stylesheet" href="login.css">
    </head>
    <body>
        <div class="container">
            <div class="box form-box">
        <h3>Registration Form :</h3>

            <?php
            if (isset($_POST["Submit:"])) {
                $fullName = $_POST["fullname"];
                $email = $_POST["email"];
                $password = $_POST["password"];
                $passwordConfirm = $_POST["confirm_password"];

                $passwordHash = password_hash($password, PASSWORD_DEFAULT);

                $errors = array();

                if (empty($fullName) || empty($email) || empty($password) || empty($passwordConfirm)) {
                array_push($errors,"All fields are required");
                }
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                array_push($errors,"Email is not valid!");
                }
                if (strlen($password)<8) {
                array_push($errors,"Password must be atleast 8 characters long");
                }
                if ($password!==$passwordConfirm) {
                array_push($errors,"Password does not match");
                }
                require_once "database.php";
                $sql = "SELECT * FROM users WHERE email = '$email'";
                $result = mysqli_query($conn,$sql);
                $rowCount = mysqli_num_rows($result);
                if ($rowCount > 0) {
                    array_push($errors,"Email Already exists!");
                }
                if (count($errors)>0) {
                    foreach ($errors as $error) {
                         echo "<div class='Alert Alert danger'>$error</div>";
                         
                }
            } else {
                
                $sql = "INSERT INTO users (full_name, email, password) VALUES ( ?, ?, ?)";
                $stmt = mysqli_stmt_init($conn);
                $prepareStmt = mysqli_stmt_prepare($stmt,$sql);
                if ($prepareStmt) {
                    mysqli_stmt_bind_param($stmt,"sss",$fullName, $email, $passwordHash);
                    mysqli_stmt_execute($stmt);
                    echo "<div class= 'Alert Alert-success'>You are registered successfully.</div>";
                } else {
                    die("Something went wrong");
            }

            }
        }
    
            ?>
            <form action="registration.php" method="post">
                <div class="form-group">
                    <label for="fullname">Enter Fullname:</label>
                    <input type="text" class= "form-control" name="fullname" placeholder="Fullname">
                </div>
                <div class="form-group">
                <label for="email">Enter Email:</label>
                    <input type="email" class= "form-control" name="email" placeholder="Email">
                </div>
                <div class="form-group">
                <label for="password">Enter Password:</label>
                    <input type="password" class= "form-control" name="password" placeholder="Password">
                </div>
                <div class="form-group">
                <label for="password">Confirm password:</label>
                    <input type="password" class= "form-control" name="confirm_password" placeholder="Confirm Password">
                </div>
                <div class="form-btn">
                    <input type="submit" class= "btn btn-primary" value="Register" name="Submit:">
                </div>
            </form>
            <div>
            <div><p>Already Registered? <a href="login.php">Log-in here</a></p></div>
         </div>
        </div>
    </body>
</html>