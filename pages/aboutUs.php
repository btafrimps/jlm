<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About us</title>
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="stylelogo.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

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

    <main>
       <img src="/jlm/images/uten.jpg" class="us">
       <h3 class="about_heading">About Just Like Mama's Recipes</h3>
       <p class="about_wording">Just Like Mama's Recipe is here to help you cook delicious meals with less stress and more joy. 
        We offer recipes and cooking advice for home cooks, by home cooks. Helping create “kitchen wins” is what we’re all about.Simply Recipes 
        was founded in 2003 by Elise Bauer as a home cooking blog to record her favorite family recipes. Today, Simply Recipes has grown
        into a trusted resource for home cooks with more than 3,000 tested recipes, guides, and meal plans, drawing over 15 million readers 
        each month from around the world. We’re supported by a diverse group of recipe developers, food writers, recipe and product testers,
         photographers, and other creative professionals.</p>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <!-- Content for mission statement -->
                    
                    <img src="/jlm/images/founder.jpeg" class="founder">


                </div>

                <div class="col-md-6">
                    <!-- Content for the second column -->
                    <h4 class="mission_heading">Mission Statement by our founder</h4>
                    <p class="mission_wording"> At Just Like Mama's Recipes, our mission is to celebrate the rich culinary heritage
                    of Africa by providing a platform where chefs can share authentic and traditional recipes
                    with food enthusiasts worldwide. Since our inception in January 2024, we have been dedicated 
                    to preserving and promoting African cuisine, ensuring that the flavors and traditions passed 
                    down through generations are accessible to all. We strive to create a vibrant community where 
                    chefs can showcase their expertise, users can discover new and delicious dishes, and everyone 
                    can experience the joy of cooking and sharing meals that taste 'just like Mama's.' With our 
                    commitment to quality, diversity, and inclusivity, we aim to inspire culinary exploration, 
                    foster cultural appreciation, and bring people together through the universal language of food</p>
                    
                </div>

            </div>

            <!--for meet the team-->
            <div class="row">
                <h2 class="meet_the_team">Meet the Team</h2>
                <div class="col-md-6">
                    <!-- Content for the first column -->  
                    <img src="/jlm/images/chef1.jpg" class="founder">
                </div>

                <div class="col-md-6">
                    <!-- Content for the second column -->
                    <h3 class="mission_heading">Chef Nyonyo Nutor</h3>
                    <h5 class="TL"> TEAM LEAD</h5>
                    <p class="mission_wording">Emma has over 10 years of experience creating food and cooking content for both web and print and another
                     5 years within the print publishing industry. She joined the Simply Recipes team in 2016 as Managing Editor 
                     and is the former Recipe Editor for Kitchn.
                    In her career, she has been an editor, a writer, a recipe developer, a photographer, and a video producer</p>
                    
                </div>

                <div class="col-md-6">
                    <!-- 2nd team member -->  
                    <img src="/jlm/images/chef2.jpg" class="founder">
                </div>

                <div class="col-md-6">
                    <!-- Content for t2nd team member -->
                    <h3 class="mission_heading">Chef Faila Koto Edwards</h3>
                    <h5 class="TL"> EDITORIAL DIRECTOR, NEWS, FOOD, & DRINK</h5>
                    <p class="mission_wording">Before joining JLMs in 2021, Abref spent eight years working at Kitchn 
                    where she launched and led their news and features program. In addition to editing, Arie has worked as a freelance writer, 
                    recipe developer, social media editor, and was once the maître d' at a three-star Michelin restaurant in New York. She’s also
                     a graduate of the culinary techniques program at the International Culinary Center.
                     As an editor, Abrefi is passionate about the food and cooking stories that center people, place, 
                     and culture. She’s currently working on perfecting her cardamom bun recipe, and will never say 
                     no to a scoop of ice cream.</p>
                    
                </div>

                <div class="col-md-6">
                    <!-- Content for 3rd team member -->  
                    <img src="/jlm/images/chef5.jpg" class="founder">
                </div>

                <div class="col-md-6">
                    <!-- Content for the second column -->
                    <h3 class="mission_heading">Pearline Donalds</h3>
                    <h5 class="TL"> SENIOR EDITOR AND ART DIRECTOR</h5>
                    <p class="mission_wording">Pearline is an editor and recipe developer with 15 years of wide-ranging experience.
                    Her obsession with food and cooking began in childhood and adolescence, with early cooking experiments that 
                    involved setting the oven on fire while trying to make croissants for the first time (they still tasted great!)
                    Sarah’s love of food and photography grew during her time as a vegetable farmer on Virginia’s Eastern Shore. After
                    moving to Brooklyn over a decade ago, she began freelancing as a content creator and photographer, and in 2017, 
                    she accepted her first in-house position. She has since worked for a variety of commercial and editorial brands, 
                    including Milk Bar and Food & Wine, and is now an art director for Simply Recipes.</p>
                    
                </div>

                
            </div>


            <!--for 2nd team member-->

            
            

                

                
            </div>
        </div>
    </main>




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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>