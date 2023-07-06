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
    <?php include 'navbar.php'; ?>
    <main class="mybg2">
        <div class="carousel_container my-4">
            <div id="carouselExample" class="carousel slide">
                <div class="carousel-inner" id="img_large">
                    <div class="carousel-item active">
                        <img src="images/gulliver1.jpeg" class="d-block w-100 carousel_image1" alt="1st image"
                            onclick="img_large()">
                    </div>
                    <div class="carousel-item">
                        <img src="images/gulliver2.jpg" class="d-block carousel_image2" alt="2nd image" id="img1"
                            onclick="img_large(img1)">
                    </div>
                    <div class="carousel-item">
                        <img src="images/gulliver3.jpg" class="d-block carousel_image2" alt="3rd image"
                            onclick="img_large()">
                    </div>
                    <div class="carousel-item">
                        <img src="images/gulliver5.jpg" class="d-block carousel_image2" alt="4th image"
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
                <h1>Gulliver Travels : Voyage to Lilliput</h1>
                <p><strong>Author : </strong>Jonathan Swift</p>
                <p class="mbottom-35">Gulliver’s Travels, original title Travels into Several Remote Nations of the World, four-part
                    satirical work by Anglo-Irish author Jonathan Swift, published anonymously in 1726 as Travels into
                    Several
                    Remote Nations of the World. A keystone of English literature, it is one of the books that
                    contributed to
                    the emergence of the novel as a literary form in English. A parody of the then popular travel
                    narrative,
                    Gulliver’s Travels combines adventure with savage satire, mocking English customs and the politics
                    of the day.<span class="more" onclick="moreContent()">....read more</span>
                </p>
                <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary">Read now</button>
                    <button type="button" class="btn btn-sm btn-outline-secondary">Wishlist</button>
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

    <?php include 'footer.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>
    <script src="js/normal.js"></script>
</body>

</html>