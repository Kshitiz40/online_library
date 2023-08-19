function getUsername() {
  let username = document.getElementById("username").value;
  if (username == null || username.length < 2) {
    document.getElementById("username_error").innerHTML = "*username must contain atleast 3 characters";
    return null;
  }
  else if (username.length > 20) {
    document.getElementById("username_error").innerHTML = "*username cannot exceed 20 characters";
    return null;
  }
  else {
    document.getElementById('username_error').innerHTML = "";
    return true;
  }
}
function getEmail() {
  let email = document.getElementById("email").value;
  let Email = email.search("@");
  if (email == null || email == "") {
    document.getElementById("email_error").innerHTML = "*email is required";
    return null;
  }
  else if (Email == -1) {
    document.getElementById("email_error").innerHTML = "*email must contain '@'";
    return null;
  }
  else if (Email == email.length - 1) {
    document.getElementById("email_error").innerHTML = "There must be something after '@'";
    return null;
  }
  else {
    document.getElementById('email_error').innerText = "";
    return true;
  }
}
function getpassword() {
  let password = document.getElementById("password").value;
  const specialChars = /[`!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?~]/;
  const uc = /[QWERTYUIOPLKJHGFDSAZXCVBNM]/;
  const lc = /[qwertyuioplkjhgfdsazxcvbnm]/;
  const num = /[1234567890]/;
  if (password.length < 6 || password == null) {
    document.getElementById("password_error").innerHTML = "*password must contain 6 digits";
    return null;
  }
  else if (lc.test(password) === false) {
    document.getElementById("password_error").innerHTML = "*password must contain a lower case";
    return null;
  }
  else if (uc.test(password) === false) {
    document.getElementById("password_error").innerHTML = "*password must contain a upper case";
    return null;
  }
  else if (num.test(password) === false) {
    document.getElementById("password_error").innerHTML = "*password must contain a number";
    return null;
  }
  else if (specialChars.test(password) === false) {
    document.getElementById("password_error").innerHTML = "*password must contain a special character";
    return null;
  }
  else {
    document.getElementById('password_error').innerText = "";
    let confirm_pass = document.getElementById("confirm_pass").value;
    if (confirm_pass !== password) {
      document.getElementById("confirm_pass_error").innerHTML = "*password does not match";
      return null;
    }
    else {
      document.getElementById('confirm_pass_error').innerText = "";
      return true;
    }
  }
}
function formValidation() {
  let username = getUsername();
  let email = getEmail();
  var password = getpassword();

  if (username === null) {
    return;
  }
  else if (email === null) {
    return;
  }
  else if (password === null) {
    return;
  }
  else {
    document.getElementById('submit_btn').click();
  }
}
function resetPara() {
  document.getElementById('username_error').innerText = "";
  document.getElementById('email_error').innerText = "";
  document.getElementById('password_error').innerText = "";
  document.getElementById('confirm_pass_error').innerText = ""
  document.getElementById('register_error').innerText = "";
  document.getElementById('register_success').innerText = "";;
}