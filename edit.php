<?php
include 'connect.php';
include 'session.php';
$msg_error = "";
$id = $_GET['id'];
$display = "SELECT * FROM `bookdetail` WHERE `id`='$id'";
$result = $conn->query($display);
while ($row = mysqli_fetch_array($result)) {
    if (isset($_POST['submit'])) {
        $pattern = "/'/";
        $bookname = $_POST['bookname'];
        $bookname = preg_replace($pattern, "''", $bookname);
        $author = $_POST['author'];
        $author = preg_replace($pattern, "''", $author);
        $category = $_POST['category'];
        $Description = $_POST['detail'];
        $Description = preg_replace($pattern, "''", $Description);

        $targetDir = "uploads1/";
        if (empty($_FILES['image1']['name'])) {
            $filename1 = $row['img1'];
            $file1 = $targetDir . $filename1;
            $fileType1 = pathinfo($file1, PATHINFO_EXTENSION);
        } else {
            $filename1 = basename($_FILES['image1']['name']);
            $file1 = $targetDir . $filename1;
            $fileType1 = pathinfo($file1, PATHINFO_EXTENSION);
        }

        if (empty($_FILES['image2']['name'])) {
            $filename2 = $row['img2'];
            $file2 = $targetDir . $filename2;
            $fileType2 = pathinfo($file2, PATHINFO_EXTENSION);
        } else {
            $filename2 = basename($_FILES['image2']['name']);
            $file2 = $targetDir . $filename2;
            $fileType2 = pathinfo($file2, PATHINFO_EXTENSION);
        }

        if (empty($_FILES['image3']['name'])) {
            $filename3 = $row['img3'];
            $file3 = $targetDir . $filename3;
            $fileType3 = pathinfo($file3, PATHINFO_EXTENSION);
        } else {
            $filename3 = basename($_FILES['image3']['name']);
            $file3 = $targetDir . $filename3;
            $fileType3 = pathinfo($file3, PATHINFO_EXTENSION);
        }

        if (empty($_FILES['image4']['name'])) {
            $filename4 = $row['img4'];
            $file4 = $targetDir . $filename4;
            $fileType4 = pathinfo($file4, PATHINFO_EXTENSION);
        } else {
            $filename4 = basename($_FILES['image4']['name']);
            $file4 = $targetDir . $filename4;
            $fileType4 = pathinfo($file4, PATHINFO_EXTENSION);
        }
        echo $filename1;
        echo "<br>";
        echo $_FILES['image1']['tmp_name'];
        echo "<br>";

        $allowTypes = array('jpg', 'jpeg', 'png');
        if (in_array($fileType1, $allowTypes) && in_array($fileType2, $allowTypes) && in_array($fileType3, $allowTypes) && in_array($fileType4, $allowTypes)) {
            if (!empty($_FILES['image1']['name'])) {
                move_uploaded_file($_FILES['image1']['tmp_name'], $file1);
            }
            if (!empty($_FILES['image2']['name'])) {
                move_uploaded_file($_FILES['image1']['tmp_name'], $file1);
            }
            if (!empty($_FILES['image3']['name'])) {
                move_uploaded_file($_FILES['image1']['tmp_name'], $file1);
            }
            if (!empty($_FILES['image4']['name'])) {
                move_uploaded_file($_FILES['image1']['tmp_name'], $file1);
            }
            $sql = "UPDATE `bookdetail` SET `bookName`='$bookname',`authorName`='$author',`bookDetail`='$Description',`img1`='$filename1',`img2`='$filename2',`img3`='$filename3',`img4`='$filename4',`category`='$category' WHERE `id`='$id'";
            $result = $conn->query($sql);
            if ($result) {
                $_SESSION['bookEdited'] = true;
                header("location:detail.php?id=$id");
            } else {
                $msg_error = "some error occured";
            }
        } else {
            $msg_error = "Sorry, you can upload only JPG, PNG and JPEG files";
        }
    }
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Edit Book</title>
        <link rel="stylesheet" href="CSS/login_register.css">
    </head>

    <body>
        <div class="container" style="width : 600px;">
            <div class="formHead-register">
                Edit Book
            </div>
            <form name="myform" action="<?php htmlspecialchars($_SERVER['PHP_SELF']) ?>" class="addbook_form" method="post" enctype="multipart/form-data">
                <?php
                ?>
                <div class="input_div">
                    <input type="text" class="inputf" id="bookname" name="bookname" placeholder="Name of Book" value="<?php echo $row['bookName']; ?>">
                </div>
                <div class="input_div">
                    <input type="text" class="inputf" name="author" id="author" placeholder="Author name" value="<?php echo $row['authorName']; ?>">
                </div>
                <div class="input_div">
                    <div class="div_inner">
                        <input type="radio" id="adventure" name="category" value="Adventure" class="radio_btn margin-normal" <?php
                                                                                                                                if ($row['category'] == "Adventure") {
                                                                                                                                    echo "checked";
                                                                                                                                }
                                                                                                                                ?>>
                        <label for="adventure" class="radio_label">Adventure</label>
                        <input type="radio" id="romance" name="category" value="Romance" class="radio_btn margin-less" <?php
                                                                                                                        if ($row['category'] == "Romance") {
                                                                                                                            echo "checked";
                                                                                                                        }
                                                                                                                        ?>>
                        <label for="romance" class="radio_label">romance</label><br>
                        <input type="radio" id="fantasy" name="category" value="Fantasy" class="radio_btn margin-normal" <?php
                                                                                                                            if ($row['category'] == "Fantasy") {
                                                                                                                                echo "checked";
                                                                                                                            }
                                                                                                                            ?>>
                        <label for="fantasy" class="radio_label">Fantasy</label>
                        <input type="radio" id="mystery" name="category" value="Mystery" class="radio_btn margin-more" <?php
                                                                                                                        if ($row['category'] == "Mystery") {
                                                                                                                            echo "checked";
                                                                                                                        }
                                                                                                                        ?>>
                        <label for="mystery" class="radio_label">mystery</label>
                    </div>
                    <div class="input_div">
                        <textarea class="inputf" name="detail" id="detail" cols="30" rows="10" placeholder="description of the book" value="<?php echo $row['bookDetail']; ?>"></textarea>
                    </div>
                    <div class="input_div2">
                        <input class="inputf-img" type="file" name="image1">
                        <input class="inputf-img" type="file" name="image2">
                        <input class="inputf-img" type="file" name="image3">
                        <input class="inputf-img" type="file" name="image4">
                    </div>
                    <script>
                        console.log(document.getElementById('img1').value);
                    </script>
                <?php } ?>
                <div class="btn_div">
                    <div class="sign_reset_div">
                        <button class="btn" id="submit" type="Submit" name="submit">Submit</button>
                        <button class="btn" id="reset_btn" type="reset">Reset</button>
                    </div>
                </div>
                <p class="error_para">
                    <?php echo $msg_error; ?>
                </p>
            </form>
        </div>
        <?php $conn->close(); ?>
    </body>

    </html>