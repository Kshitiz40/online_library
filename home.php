<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>E-Library Resolving problems online</title>
    <link rel="stylesheet" href="CSS/top_bottom.css">
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="icon" href="/docs/5.3/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
</head>

<body class="mybg">
    <?php
       include 'navbar.php';
    ?>
    <main class="dark_bg">

        <section class="py-5 text-center container">
            <div class="row py-lg-5">
                <div class="col-lg-6 col-md-8 mx-auto">
                    <h1 class="fw-light">eLibrary</h1>
                    <p class="lead">Inspiring a love of reading and a life of learning.</p>
                    <p>
                        <a href="register.php" class="btn btn-primary my-2">Sign up</a>
                        <a href="login.php" class="btn btn-secondary my-2">Sign In</a>
                    </p>
                </div>
            </div>
        </section>

        <div class="album py-5 bg_card for_card">
            <div class="container">

                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                    <div class="col">
                        <div class="card shadow-sm">
                            <img class="bd-placeholder-img card-img-top" width="100%" height="225"
                                src="images/gulliver1.jpeg" alt="gulliver pic 1">
                            <div class="card-body">
                                <h2>Gulliver Travels</h2>
                                <p class="card-text">Author : Jonathan Swift</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-outline-secondary" onclick="window.location.href='detail.php';"><i class="fa fa-fw fa-eye"></i>View</button>
                                        <button type="button" class="btn btn-sm btn-outline-secondary"><i class="fa fa-fw fa-plus"></i>Wishlist</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card shadow-sm">
                            <img class="bd-placeholder-img card-img-top" width="100%" height="225"
                                src="images/harry11.jpg" alt="gulliver pic 1">
                            <div class="card-body">
                                <h2>Harry Potter</h2>
                                <p class="card-text">Author : J.K. Rowling</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                        <button type="button" class="btn btn-sm btn-outline-secondary">Wishlist</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card shadow-sm">
                            <img class="bd-placeholder-img card-img-top" width="100%" height="225"
                                src="images/geeta1.jpg" alt="gulliver pic 1">
                            <div class="card-body">
                                <h2>Bhagwad Geeta</h2>
                                <p class="card-text">Author : Shri Krishna</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                        <button type="button" class="btn btn-sm btn-outline-secondary">Wishlist</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card shadow-sm">
                            <img class="bd-placeholder-img card-img-top" width="100%" height="225"
                                src="images/gulliver1.jpeg" alt="gulliver pic 1">
                            <div class="card-body">
                                <h2>Gulliver Travels</h2>
                                <p class="card-text">Author : Jonathan Swift</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-outline-secondary" onclick="window.location.href='detail.php';"><i class="fa fa-fw fa-eye"></i>View</button>
                                        <button type="button" class="btn btn-sm btn-outline-secondary"><i class="fa fa-fw fa-plus"></i>Wishlist</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card shadow-sm">
                            <img class="bd-placeholder-img card-img-top" width="100%" height="225"
                                src="images/geeta1.jpg" alt="gulliver pic 1">
                            <div class="card-body">
                                <h2>Bhagwad Geeta</h2>
                                <p class="card-text">Author : Shri Krishna</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                        <button type="button" class="btn btn-sm btn-outline-secondary">Wishlist</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card shadow-sm">
                            <img class="bd-placeholder-img card-img-top" width="100%" height="225"
                                src="images/harry11.jpg" alt="gulliver pic 1">
                            <div class="card-body">
                                <h2>Harry Potter</h2>
                                <p class="card-text">Author : J.K. Rowling</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                        <button type="button" class="btn btn-sm btn-outline-secondary">Wishlist</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>

    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>

    <?php include 'footer.php'; ?>
</body>

</html>