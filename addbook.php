<?php 
$msg_error = "";
$msg_success = "";
if(isset($_POST['submit']))
{
    include 'connect.php';
    $bookname = $_POST['bookname'];
    $author = $_POST['author'];
    $Description = $_POST['detail'];

    $targetDir = "uploads1/";

    $filename1 = basename($_FILES['image1']['name']);
    $file1 = $targetDir.$filename1;
    $fileType1 = pathinfo($file1,PATHINFO_EXTENSION);

    $filename2 = basename($_FILES['image2']['name']);
    $file2 = $targetDir.$filename2;
    $fileType2 = pathinfo($file2,PATHINFO_EXTENSION);

    $filename3 = basename($_FILES['image3']['name']);
    $file3 = $targetDir.$filename3;
    $fileType3 = pathinfo($file3,PATHINFO_EXTENSION);

    $filename4 = basename($_FILES['image4']['name']);
    $file4 = $targetDir.$filename4;
    $fileType4 = pathinfo($file4,PATHINFO_EXTENSION);

    if(!empty($_FILES['image1']['name']) && !empty($_FILES['image2']['name']) && !empty($_FILES['image3']['name']) && !empty($_FILES['image4']['name']))
    {
        $allowTypes = array('jpg','jpeg','png');
        if(in_array($fileType1,$allowTypes) && in_array($fileType2,$allowTypes) && in_array($fileType3,$allowTypes) && in_array($fileType4,$allowTypes))
        {
            if(move_uploaded_file($_FILES['image1']['tmp_name'],$file1) && move_uploaded_file($_FILES['image2']['tmp_name'],$file2) && move_uploaded_file($_FILES['image3']['tmp_name'],$file3) && move_uploaded_file($_FILES['image4']['tmp_name'],$file4))
            {
                $sql = "INSERT INTO `bookdetail` (`bookName`,`authorName`,`bookDetail`,`img1`,`img2`,`img3`,`img4`) VALUES ('$bookname','$author','$Description','$filename1','$filename2','$filename3','$filename4')";
                $result = $conn->query($sql);
                if($result)
                {
                    $msg_success = "book added successfully";
                }
                else{
                    $msg_error = "some error occured";
                }
            }
            else{
                $msg_error = "files cannot be added";
            }
        }
        else{
            $msg_error = "Sorry, you can upload only JPG, PNG and JPEG files";
        }
    }
    else{
        $msg_error = "please select file before uploading";
    }
    $conn->close();
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add book to library</title>
    <link rel="stylesheet" href="CSS/login_register.css">
</head>

<body>
    <div class="container-reg">
        <div class="formHead-register">
            Add Book
        </div>
        <form name="myform" action="<?php htmlspecialchars($_SERVER['PHP_SELF']) ?>" class="addbook_form" method="post" enctype="multipart/form-data">
            <div class="input_div">
                <input type="text" class="inputf" id="bookname" name="bookname" placeholder="Name of Book">
            </div>
            <div class="input_div">
                <input type="text" class="inputf" name="author" id="author" placeholder="Author name">
            </div>
            <div class="input_div">
                <textarea class="inputf" name="detail" id="detail" cols="30" rows="10" placeholder="description of the book"></textarea>
            </div>
            <div class="input_div2">
                <input class="inputf-img" type="file" name="image1">
                <input class="inputf-img" type="file" name="image2">
                <input class="inputf-img" type="file" name="image3">
                <input class="inputf-img" type="file" name="image4">
            </div>
            <div class="btn_div">
                <div class="sign_reset_div">
                    <button class="btn" id="submit_btn" type="Submit" name="submit">Submit</button>
                    <button class="btn" id="reset_btn" type="reset">Reset</button>
                </div>
            </div>
        </form>
        <p class="error_para">
            <?php echo $msg_error; ?>
        </p>
        <p class="success_para">
            <?php echo $msg_success; ?>
        </p>
    </div>
</body>

</html>