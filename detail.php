<?php

//getting id of book from url
$id = $_GET['id'];

//establishing connection to database
include 'connect.php';

//starting session to use session variables
session_start();

//Deleting a book from database
if(isset($_POST['deleteButton']))
{
    $delete = "DELETE FROM `bookdetail` WHERE  `id`='$id'";
    if($conn->query($delete)===true)
    {
        header("loacation: home.php");
        $_SESSION['bookDeleted'] = true;
        exit;
    }
    else{
        $_SESSION['error']="Unable to delete book!<br> Try again";
    }
}

//selecting the book to display
$sql = "SELECT * FROM `bookdetail` WHERE `id`='$id'";
$result = $conn->query($sql);

//checking if book with given id exist or not
if(mysqli_num_rows($result)!=1)
{
    header("location: home.php");
    exit;
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
    <link rel="icon" href="/docs/5.3/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
</head>

<body class="color-2">
    <?php include 'navbar.php'; ?>
    <?php 
    if($_SESSION['bookAdded'] === true)
    {
        echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
        Book Added succesfully!
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
    }
    ?>
    <?php 
    if($_SESSION['bookEdited'] === true)
    {
        echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
        Book Edited succesfully!
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
    }
    ?>
    <?php 
    if($_SESSION['error'] != "")
    {
        echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
        '.$_SESSION['error'].'
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
    }
    ?>
    <main>
        <?php 
        while($row = mysqli_fetch_array($result)){
        ?>
        <div class="carousel_container color-3 my-4">
            <div id="carouselExample" class="carousel slide">
                <div class="carousel-inner" id="img_large">
                    <div class="carousel-item active">
                        <img src="uploads1/<?php echo $row['img1']; ?>" class="d-block carousel_image1" alt="1st image"
                            onclick="img_large()">
                    </div>
                    <div class="carousel-item">
                        <img src="uploads1/<?php echo $row['img2']; ?>" class="d-block carousel_image2" alt="2nd image" id="img1"
                            onclick="img_large(img1)">
                    </div>
                    <div class="carousel-item">
                        <img src="uploads1/<?php echo $row['img3']; ?>" class="d-block carousel_image2" alt="3rd image"
                            onclick="img_large()">
                    </div>
                    <div class="carousel-item">
                        <img src="uploads1/<?php echo $row['img4']; ?>" class="d-block carousel_image2" alt="4th image"
                            onclick="img_large()">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>

            <div class="book_detail">
                <h1><?php echo $row['bookName']; ?></h1>
                <p><strong>Author : </strong><?php echo $row['authorName']; ?></p>
                <p><?php echo $row['bookDetail']; ?><span class="more" onclick="moreContent()">....read more</span>
                </p>
                <?php } ?>
                <div class="btn-group">
                    <button type="button" class="btn btn-lg btn-outline-secondary" onclick="deleteBook()">Delete</button>
                    <button type="button" class="btn btn-lg btn-outline-secondary"><a href="edit.php?id=<?php echo $id; ?>">Edit</a></button>
                </div>
            </div>
        </div>
    </main>
    <div class="container_popup">
        <div class="popup_img">
            <span>&times;</span>
            <img src="" alt="popup-img">
        </div>
    </div>
    <div class="container_popup_delete" id="delete_popup">
        <div class="popup">
            <span>&times;</span>
            <h3>Do you really want to delete this book?</h3>
            <form action="<?php htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
            <div>
                <button class="btn btn-outline-primary btn-lg" name="deleteButton" type="submit">Confirm</button>
                <button class="btn btn-outline-primary m10 btn-lg" onclick="hide()" type="button">Cancel</button>
                </div>
            </form>
        </div>
    </div>

    <?php include 'footer.php'; 
    $_SESSION['bookAdded']=false;
    $_SESSION['bookEdited']=false;
    $_SESSION['error']=false;
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>
    <script src="js/normal.js"></script>
</body>

</html>