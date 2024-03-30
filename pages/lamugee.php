<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lamugee- Recipes</title>
    <link rel="stylesheet" href="../style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="../css/main.css" rel="stylesheet">
</head>

<body>

    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <!--code for logo-->
                <a class="navbar-brand" href="../index2.php">
                    <img src="../images/logo.jpg" class="logo">
                    Just Like Mama's
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">


                        <!--navbar Recipes-->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">Recipes</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="pages/african_cocktail_recipes.php">African
                                        Coctail</a></li>
                                <li><a class="dropdown-item" href="#">African Soups </a></li>
                                <li><a class="dropdown-item" href="#">Main Dish</a></li>
                            </ul>
                        </li>
                        <!--navbar about us-->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">About Us</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Mission Statement</a></li>
                                <li><a class="dropdown-item" href="#">Message from Team Lead </a></li>
                            </ul>
                        </li>

                        <!--navbar blogs-->
                        <li class="nav-item">
                            <a class="nav-link" href="#">Blogs</a>
                        </li>

                    </ul>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>
    </header>



    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <!-- Content for the first column -->
                <h2>Column 1</h2>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/oGb7XiSOaUE?si=r-5MqSezmc-gPatP"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen></iframe>
            </div>
            <div class="col-md-6">
                <!-- Content for the second column -->
                <h2>Lamugee (Spice Rice Drink)</h2>
                <p>Sobolo, also known as hibiscus tea or bissap, is a popular beverage in many parts of Africa,
                    particularly West Africa. It is made from dried hibiscus flowers .The drink made from hibiscus
                    flowers has been consumed traditionally in many African countries for its refreshing taste and
                    purported health benefits.It has various health benefits like weight management, anti-inflamatory
                    disease, lower blood pressure etc</p>

            </div>
        </div>

        <h2>Ingredients in The Lamugee Drink</h2>

        <div class="image_container">
            <div class="row">

                <div class="col-md-3">
                    <img src="/images/ginger.jpg" class="ginger">
                    <p>Ginger<br>80cal/100gms</p>

                </div>


                <!--2nd ingredient-->
                <div class="col-md-3">
                    <img src="/images/rice.jpg" class="rice">
                    <p>Habiscus<br>37cal/100grams</p>

                </div>
                <!--3rd incredient-->
                <div class="col-md-3">
                    <img src="/images/cloves.jpg" class="cloves">
                    <p>Cloves<br>274cal/100grams</p>
                </div>

                <!--4th incredient-->
                <div class="col-md-3">
                    <img src="/images/sugar.jpg" class="sugar">
                    <p>Oranges<br>62cal/131grams</p>
                </div>





            </div>
        </div>



        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
            integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
        </script>
</body>

</html>