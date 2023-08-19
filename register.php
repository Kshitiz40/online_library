<?php 

$msg_username = "";
$msg_email = "";
$msg_error = "";

require "auth.php";

if(isset($_POST['submit']))
{
    require "connect.php";
    
    $user = sanitize($_POST['username']);
    $email = sanitize($_POST['email']);
    $password = sanitize($_POST['password']);

    $password = password_hash($password,PASSWORD_BCRYPT);
    $sql1 = "SELECT * FROM `account` WHERE `user`='$user'";
    $result1 = $conn->query($sql1);
    $sql2 = "SELECT * FROM `account` WHERE `em`='$email'";
    $result2 = $conn->query($sql2);

    if(mysqli_num_rows($result1) >= 1)
    {
        $msg_username = "Username already exists";
    }
    elseif(mysqli_num_rows($result2) >= 1)
    {
        $msg_email = "email is already taken";
    }
    else{
        $sql = "INSERT INTO `account`(`user`,`em`,`pass`) VALUES('$user','$email','$password')";
        $result = $conn->query($sql);
        if($result == true)
        {
            $msg_success = "user added succesfully";
            session_start();
            $_SESSION['username'] = $user;
            $_SESSION['loggedin'] = true;
            $_SESSION['bookAdded'] = false;
            $_SESSION['bookDeleted'] = false;
            $_SESSION['bookEdited'] = false;
            $_SESSION['error'] = "";

            header("location: home.php");
        }
        else{
            $msg_error = "some error occured";
        }
    }
    $conn->close();
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register_page</title>
    <link rel="stylesheet" href="CSS/login_register.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="container" style="height:600px;">
        <div class="formHead-register">
            Create new account
        </div>
        <form action="<?php htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
            <div class="input_div">
                <input type="text" class="inputf" id="username" name="username" placeholder="username">
                <p class="error_para" id="username_error"><?php echo $msg_username; ?></p>
            </div>
            <div class="input_div">
                <input type="text" class="inputf" name="email" id="email" placeholder="Email">
                <p class="error_para" id="email_error"><?php echo $msg_email; ?></p>
            </div>
            <div class="input_div">
                <input type="password" class="inputf" name="password" id="password" placeholder="Password">
                <p class="error_para" id="password_error"></p>
            </div>
            <div class="input_div">
                <input type="password" class="inputf" name="confirm_pass" id="confirm_pass" placeholder="Confirm password">
                <p class="error_para" id="confirm_pass_error"></p>
            </div>
            <div class="btn_div">
                <div class="sign_reset_div">
                    <button class="btn" id="validation_btn" type="button" onclick="formValidation()">Submit</button>
                    <button class="btn" id="reset_btn" type="reset" onclick="resetPara()">Reset</button>
                    <button class="btn" id="submit_btn" type="Submit" name="submit">Submit</button>
                </div>
            </div>
        </form>
        <script src="js/valid.js"></script>
        <p class="sep"><span class="line-half"></span><span class="sepPara"><span>or</span></span><span class="line-half"></span></p>
        <a href="login.php"><p class="new">Sign In</p></a>
        <p class="error_para" id="register_error">
            <?php echo $msg_error; ?>
        </p>
    </div>
</body>

</html>