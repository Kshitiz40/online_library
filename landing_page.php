<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Library : Landing Page</title>
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
</head>

<body class="landing_page" background="images/bgimg2.jpg">
    
    <nav class="nav_bar color-4">
        <div class="bars">
            <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                <i class="fa fa-bars"></i>
            </a>
        </div>
        <span class="navbar-head landing_page_head">
            eLibrary
        </span>
        <div class="mylinks" id="mylinks">
            <a href="" aria-disabled="true"><i class="fa fa-fw fa-home"></i>Home</a>
            <a href="" class="disabled"><i class="fa fa-fw fa-book"></i>Add Book</a>
            <a href="" class="disabled"><i class="fa fa-fw fa-tag"></i>Wishlist</a>
            <a href="" class="disabled"><i class="fa fa-fw fa-envelope"></i>Contact</a>
        </div>
        <div class="profile" onclick="profileView()">
            <i class="fa-light fa-user"></i>
        </div>
        <div class="profile_links color-1" id="profile_links">
            <div class="profile_img">
                <img src="https://media.istockphoto.com/id/1146517111/photo/taj-mahal-mausoleum-in-agra.jpg?s=612x612&w=0&k=20&c=vcIjhwUrNyjoKbGbAQ5sOcEzDUgOfCsm9ySmJ8gNeRk="
                    alt="">
            </div>
            <a href="">View profile</a>
            <a href="">Edit profile</a>
            <a href="">logout</a>
        </div>
    </nav>

    <div class="container_lp">
        <div class="lines">
            Enter the
        </div>
        <div class="line2">
            World 
        </div>
        <div class="line2">
            of Books
        </div>
        <a href="register.php">Sign Up</a>
        <a href="login.php">Sign In</a>
    </div>
    
</body>
</html>