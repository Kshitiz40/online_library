<?php 
include 'session.php';
include 'connect.php'; 
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>E-Library Resolving problems online</title>
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="icon" href="/docs/5.3/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
</head>

<script src="Js/search.js"></script>

<body class="color-2">

    <?php include 'navbar.php'; ?>
    <script src="js/normal.js"></script>

    <!-- popup if book is deleted -->
    <?php
    if ($_SESSION['bookDeleted'] === true) {
        echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
        Book Deleted succesfully!
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
    }
    ?>

    <main class="color-1">
        <section class="py-5 text-center container">
            <div class="row py-lg-5">
                <div class="col-lg-6 col-md-8 mx-auto">
                    <h1 class="fw-light"><?php echo "hello " . $_SESSION['username']; ?></h1>
                    <p class="lead">Inspiring a love of reading and a life of learning.</p>
                    <div class="search-div">
                        <form class="search-box" role="search" method="get">
                            <input class="search-inp" type="search" placeholder="Search" aria-label="Search" name="search_inp">
                            <button class="btn_1" type="submit" name="search">Search</button>
                        </form>
                        <div id="livesearch">
                            <?php
                            if (isset($_GET['search_inp']) and $_GET['search_inp']!="") {
                                $searchItem = $_GET['search_inp'];
                                $query = "SELECT `id`,`bookName` FROM `bookdetail` WHERE `bookName` LIKE '%$searchItem%'";
                                $searchResult = $conn->query($query);
                                if (mysqli_num_rows($searchResult)==0) {
                                    echo '<div>No search Results Found</div>';
                                } else {
                                    while ($rows = mysqli_fetch_array($searchResult)) {
                                        echo '<div class="searchResult">
                                <a href="detail.php?id=' . $rows['id'] . '">' . $rows['bookName'] . '</a>
                                </div>';
                                    }
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="album py-5 color-2">
            <div class="container">

                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                    <?php

                    //finding sort order of page
                    if (isset($_GET['sort'])) {
                        $sortOrder = $_GET['sort'];
                    } else {
                        $sortOrder = "asc";
                    }

                    //setting variables for pagination
                    $perPageRecord = 6;
                    if (isset($_GET['page'])) {
                        $page = $_GET['page'];
                    } else {
                        $page = 1;
                    }
                    $start_from = ($page - 1) * $perPageRecord;

                    //checking the sort type selected by user
                    if ($sortOrder === 'dsc') {
                        $query = "SELECT * FROM `bookdetail` ORDER BY `bookName` DESC LIMIT $start_from, $perPageRecord";
                    } else {
                        $query = "SELECT * FROM `bookdetail` ORDER BY `bookName` ASC LIMIT $start_from, $perPageRecord";
                    }

                    $result = $conn->query($query);

                    while ($row = mysqli_fetch_array($result)) {
                    ?>
                        <div class="col">
                            <div class="card shadow-sm">
                                <img class="bd-placeholder-img card-img-top" width="100%" height="225" src="uploads1/<?php echo $row['img1']; ?>" alt="gulliver pic 1">
                                <div class="card-body">
                                    <h2><?php echo $row['bookName']; ?></h2>
                                    <p class="card-text">Author : <?php echo $row['authorName']; ?></p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-sm btn-outline-secondary"><a href="detail.php?id=<?php echo $row['id'] ?>"><i class="fa fa-fw fa-eye"></i>View</a></button>
                                            <button type="button" class="btn btn-sm btn-outline-secondary"><i class="fa fa-fw fa-plus"></i>Wishlist</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
        <div class="color-2">
            <div class="pagination color-2">
                <?php

                $sql1 = "SELECT COUNT(*) FROM `bookdetail`";
                $result1 = $conn->query($sql1);
                $row = mysqli_fetch_row($result1);
                $total_records = 1000;

                $total_pages = ceil($total_records / $perPageRecord);
                $pagelink = "";

                // if($page>=2){
                //     echo "<a href='home.php?page=".($page-1)."'>Prev</a>";
                // } 
                if (isset($_GET['p'])) {
                    $p = $_GET['p'];
                } else {
                    $p = 1;
                }
                if ($page == 1) {
                    echo "<a href='#' aria-disabled='true'>Prev</a>";
                    $p = 1;
                } elseif ($page == $p - 1 && $p != 1) {
                    echo "<a href='home.php?page=" . ($page - 1) . "&p=" . (--$p) . "&sort=" . $sortOrder . "'>Prev</a>";
                } else {
                    echo "<a href='home.php?page=" . ($page - 1) . "&p=" . $p . "&sort=" . $sortOrder . "'>Prev</a>";
                }

                for ($i = $p; $i <= ($p + 4); $i++) {
                    if ($i == $page) {
                        $pagelink .= "<a class = 'active' href='home.php?page=" . $i . "&p=" . $p . "&sort=" . $sortOrder . "'>" . $i . " </a>";
                    } else {
                        $pagelink .= "<a href='home.php?page=" . $i . "&p=" . $p . "&sort=" . $sortOrder . "'>" . $i . " </a>";
                    }
                }
                echo $pagelink;

                if ($page == $total_pages) {
                    echo "<a href='#' aria-disabled='true'>Next</a>";
                } elseif ($page == $p + 4 & $page != $total_pages) {
                    echo "<a href='home.php?page=" . ($page + 1) . "&p=" . (++$p) . "&sort=" . $sortOrder . "'>Next</a>";
                } else {
                    echo "<a href='home.php?page=" . ($page + 1) . "&p=" . $p . "&sort=" . $sortOrder . "'>Next</a>";
                }
                $conn->close();

                ?>
            </div>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

    <?php include 'footer.php';
    $_SESSION['bookDeleted'] = false;
    ?>
</body>

</html>