<?php

function sanitize($str)
{
    $str = trim($str);
    $str = stripslashes($str);
    $str = htmlspecialchars($str);
    return $str;
}

function checkUsername(string $str,$conn)
{
    // $sql = "SELECT COUNT(user) FROM `account` WHERE `user`='$str'";
    // $statement = db()->prepare($sql);
    // $result = $conn->query($sql);
    // if(mysqli_num_rows($result)==1)
    // {
    //     echo "username already taken";
    //     while ($row = mysqli_fetch_assoc($result)) 
    //     {
    //         echo $row['user'];
    //         echo "<br>";
    //     }
    // }
    // else{
    //     echo "username do not exist";
    // }
    // return $statement->execute();
}

?>