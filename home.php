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
    <?php include'navbar.php'; ?>
    <script src="js/normal.js"></script>
    <main class="color-1">
    <?php ?>
        <section class="py-5 text-center container">
            <div class="row py-lg-5">
                <div class="col-lg-6 col-md-8 mx-auto">
                    <h1 class="fw-light">eLibrary</h1>
                    <p class="lead">Inspiring a love of reading and a life of learning.</p>
                    <div class="search-div">
                        <form class="search-box" role="search">
                            <input class="search-inp" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn1" type="submit">Search</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <div class="album py-5 color-2">
            <div class="container">

                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                <?php 
                  include 'connect.php';
                  $perPageRecord = 6;
                  $start_from = 0;
                  $query = "SELECT * FROM `bookdetail` LIMIT $start_from, $perPageRecord";
                  $result = $conn->query($query);

                  while($row = mysqli_fetch_array($result)){
                ?>
                    <div class="col">
                        <div class="card shadow-sm">
                            <img class="bd-placeholder-img card-img-top" width="100%" height="225"
                                src="uploads1/<?php echo $row['img1']; ?>" alt="gulliver pic 1">
                            <div class="card-body">
                                <h2><?php echo $row['bookName']; ?></h2>
                                <p class="card-text">Author : <?php echo $row['authorName']; ?></p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-outline-secondary"><i
                                                class="fa fa-fw fa-eye"></i>View</button>
                                        <button type="button" class="btn btn-sm btn-outline-secondary"><i
                                                class="fa fa-fw fa-plus"></i>Wishlist</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } 
                $conn->close();
                ?>
                </div>
            </div>
        </div>

    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>

    <?php include'footer.php'; ?>
</body>

</html>