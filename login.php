<?php

$msg = "";

//checking if user is already logged in
session_start();
if(isset($_SESSION['username']))
{
    header("location: home.php");
    exit;
}

//login functionality
if (isset($_POST['submit'])) {
    include 'connect.php';
    $user = $_POST['username'];
    $pass = $_POST['password'];

    //query to select thte user from database
    $sql1 = "SELECT * FROM `account` WHERE `user`='$user'";
    $result1 = $conn->query($sql1);

    //checking if username exists in database
    if (mysqli_num_rows($result1) == 1) {
        while ($row = mysqli_fetch_assoc($result1)) {

            //checking if username and password match
            if (password_verify($pass, $row['pass'])) {
                //checking if user is verified or not
                /*code*/

                //starting a new login session and inititing variables
                session_start();
                $_SESSION['username'] = $user;
                $_SESSION['loggedin'] = true;
                $_SESSION['bookAdded'] = false;
                $_SESSION['bookDeleted'] = false;
                $_SESSION['bookEdited'] = false;
                $_SESSION['error'] = "";
                header("location:home.php");
            } else {
                $msg = "username and password do not match";
            }
        }
    } else {
        $msg = "usename do not exists";
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="CSS/login_register.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    
    <div class="container">
        <div class="formHead">Login</div>
        <form action="<?php htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
            <div class="input_div">
                <input type="text" class="inputf" placeholder="Username" name="username">
            </div>
            <div class="input_div">
                <input type="password" class="inputf" placeholder="Password" name="password">
            </div>
            <div class="btn_div">
                <button class="btn1" type="submit" name="submit">Sign In</button>
            </div>
        </form>
        <p class="sep"><span class="line-half"></span><span class="sepPara"><span>or</span></span><span class="line-half"></span></p>
        <a href="register.php">
            <p class="new">create new account</p>
        </a>
        <p class="error_para" id="login_error">
            <?php echo $msg; ?>
        </p>
    </div>
    
</body>

</html>