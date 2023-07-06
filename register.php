<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register_page</title>
    <link rel="stylesheet" href="CSS/login_register.css">
    <script type="text/javascript" src="js/login_register.js"></script>
</head>

<body>
    <div class="container-reg">
        <div class="formHead-register">
            Create new account
        </div>
        <form name="myform" onsubmit="return validateform()" action="/home.php" class="login_form" method="post">
            <div class="input_div">
                <input type="text" class="inputf" id="username" name="username" placeholder="Username">
                <p class="error_para" id="name_error"></p>
            </div>
            <div class="input_div">
                <input type="Email" class="inputf" name="Email" id="Email" placeholder="Email">
                <p class="error_para" id="Email_error"></p>
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
                    <button class="btn" id="submit_btn" type="Submit">Submit</button>
                    <button class="btn" id="reset_btn" type="reset">Reset</button>
                </div>
            </div>
        </form>
        <p class="sep"><span class="line-half"></span><span class="sepPara"><span>or</span></span><span class="line-half"></span></p>
        <a href="login.php"><p class="new">Sign In</p></a>
    </div>
</body>

</html>