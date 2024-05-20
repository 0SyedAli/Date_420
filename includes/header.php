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
    <style>
    #loader {
        /* display: flex; */
        align-items: center;
        justify-content: center;
        height: 100vh;
        position: relative;
        width: 100%;
        background: #000;
        overflow: hidden;
        position: fixed;
        right: 0;
        top: 0;
    }

    #loader img {
        width: 270px;
        transition: top 1s ease, width 1s ease;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);

    }

    /* @keyframes slideAndShrink {
        0% {
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        100% {
            top: 38.5%;
            left: 21.75%;
        }
    } */

    video {
        /* border: 1px solid #FFF; */
    }
    </style>

</head>

<body>
    <header id="header" class="main-header" >
        <nav class="navbar navbar-expand-lg ">
            <div class="container">
                <a class="navbar-brand" href="index.php"><img src="images/logo.gif" alt="Logo"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                    <form class="d-flex" role="search">
                        <a class="btn btn-theme1" data-bs-toggle="modal" data-bs-target="#exampleModal">Login</a>
                        <!-- <a href="register.php" class="button1 material-bubble ">Create an Account</a> -->
                        <a href="register.php" class="button-container-2">
                            <span class="mas">Create an Account</span>
                            <button type="button" name="Hover">Create an Account</button>
                        </a>
                    </form>
                </div>
            </div>
        </nav>
    </header>

    <!-- Navbar End -->