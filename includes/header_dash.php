<!DOCTYPE html>
<html>

<head>
    <title>
        <?php if (isset($page) && is_string($page)) {
            echo $page;
        } else {
            echo 'Fitness Apparel & Accessories | Revolt Cara';
        } ?>
    </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content=<?php if (isset($pageTag) && is_string($pageTag)) {
        echo $pageTag;
    } else {
        echo 'desired tag';
    } ?> />
    <meta name="description" content=<?php if (isset($pageDesc) && is_string($pageDesc)) {
        echo $pageDesc;
    } else {
        echo 'desired description';
    } ?> />
    <link href="https://site-assets.fontawesome.com/releases/v6.0.0/css/all.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="css/animate.min.css" rel="stylesheet" type="text/css">
    <link href="css/aos.css" rel="stylesheet" type="text/css">
    <link href="css/fancybox.min.css" rel="stylesheet" type="text/css">
    <link href="css/owl.carousel.min.css" rel="stylesheet" type="text/css">
    <link href="css/owl.theme.default.css" rel="stylesheet" type="text/css">
    <link href="css/jquery-ui.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="css/slick.css" />
    <link rel="stylesheet" type="text/css" href="css/slick-theme.css" />
    <!-- <link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css"> -->
    <link href="css/custom.css" rel="stylesheet" type="text/css">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg ">
            <div class="container">
                <a class="navbar-brand" href="index.php"><img class="img-fluid" src="images/foot-logo.png" alt=""></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                    <!-- <form class="d-flex dh_right" role="search">
                        <h5>Id:5793301 <i class="fa-solid fa-user"></i></h5>
                    </form> -->
                    <div class="select-dropdown">
                        <button href="#" role="button" data-value="" class="dh_right select-dropdown__button">
                            <h5>Id:5793301 <i class="fa-solid fa-user"></i></h5>
                        </button>
                        <ul class="select-dropdown__list">
                            <li data-value="2" class="select-dropdown__list-item"><a href="dashboard.php">My
                                    Dashboard</a>
                            </li>
                            <li data-value="2" class="select-dropdown__list-item"><a href="my-profile.php">My
                                    Profile</a>
                            </li>
                            <li data-value="3" class="select-dropdown__list-item"><a href="profile-edit.php">Profile
                                    Edit</a>
                            </li>
                            <li data-value="4" class="select-dropdown__list-item"><a href="my-preference.php">My
                                    Preferences</a>
                            </li>
                            <li data-value="4" class="select-dropdown__list-item"><a
                                    href="matchmaking.php">Matchmaking</a></li>
                            <li data-value="8" class="select-dropdown__list-item drop-show-resp"><a
                                    href="index.php">Sign
                                    out</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <!-- Navbar End -->