<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register_page</title>
    <link rel="stylesheet" href="CSS/login_register.css">
</head>

<body>
    <div class="container-reg">
        <div class="formHead-register">
            Create new account
        </div>
        <form name="myform" action="login.html" class="register_form" method="post">
            <div class="input_div">
                <input type="text" class="inputf" id="username" name="username" placeholder="username">
                <p class="error_para" id="username_error"></p>
            </div>
            <div class="input_div">
                <input type="text" class="inputf" name="email" id="email" placeholder="Email">
                <p class="error_para" id="email_error"></p>
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
                    <button class="btn" id="submit_btn" type="Submit">Submit</button>
                </div>
            </div>
        </form>
        <script src="js/valid.js"></script>
        <p class="sep"><span class="line-half"></span><span class="sepPara"><span>or</span></span><span class="line-half"></span></p>
        <a href="login.php"><p class="new">Sign In</p></a>
    </div>
</body>

</html>