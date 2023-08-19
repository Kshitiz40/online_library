<?php
    
    if(isset($_POST['logout']))
    {
        include 'session_destroy.php';
    }
    
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>E-Library Resolving problems online</title>
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
</head>

<body>
    <nav class="nav_bar color-1">
        <div class="bars">
            <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                <i class="fa fa-bars"></i>
            </a>
        </div>
        <span class="navbar-head">
            eLibrary
        </span>
        <div class="mylinks" id="mylinks">
            <a href="home.php"><i class="fa fa-fw fa-home"></i>Home</a>
            <a href="addbook.php"><i class="fa fa-fw fa-book"></i>Add Book</a>
            <a href="Wishlist.php"><i class="fa fa-fw fa-tag"></i>Wishlist</a>
            <a href="contact.php"><i class="fa fa-fw fa-envelope"></i>Contact</a>
        </div>
        <form method="get" id="sort_form">
            <select name="sort" onchange="this.form.submit()" form="sort_form">
                <option value="asc" 
                <?php 
                if(isset($_GET['sort']))
                {
                    if($_GET['sort']=='asc')
                    {
                        echo "selected";
                    }
                } 
                ?>>A-Z</option>
                <option value="dsc"
                <?php 
                if(isset($_GET['sort']))
                {
                    if($_GET['sort']=='dsc')
                    {
                        echo "selected";
                    }
                } 
                ?>>Z-A</option>
                <!-- <option value="time-asc">Latest</option>
                <option value="time-desc">Oldest</option> -->
            </select>
        </form>
        <div class="profile" onclick="profileView()">
            <img src="https://p1.hiclipart.com/preview/386/684/972/face-icon-user-icon-design-user-profile-share-icon-avatar-black-and-white-silhouette-png-clipart.jpg" alt="">
        </div>
        <div class="profile_links color-1" id="profile_links">
            <div class="profile_img">
                <img src="https://media.istockphoto.com/id/1146517111/photo/taj-mahal-mausoleum-in-agra.jpg?s=612x612&w=0&k=20&c=vcIjhwUrNyjoKbGbAQ5sOcEzDUgOfCsm9ySmJ8gNeRk="
                    alt="">
            </div>
            <a href="">View profile</a>
            <a href="">Edit profile</a>
            <form action="<?php htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
                <button type="submit" name="logout">logout</button>
            </form>
        </div>
    </nav>
    <script src="js/normal.js"></script>

</body>

</html>