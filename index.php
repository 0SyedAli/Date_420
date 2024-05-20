<?php
    $page = 'Home';
    $pageDesc = '""';
    include 'includes/header.php';
    $page = 'home';
    ?>

<div id="loader" style="background: #000; display:block;">
    <div>
        <video id="myVideo" muted autoplay>
            <source src="images/Stephen_Hope.mp4" type="video/mp4">
        </video>
    </div>
</div>

<div id="content" style="display:none;">
    <section class="hero-section">
        <div class="hs1">
            <!-- <div class="banner-main-content">
                <div class="container-fluid p-0">
                    <div class="banner-imgs">
                        <div class="banner_slide">
                            <div class="hs-right bs1">
                                <img class="img-fluid" src="images/banner-img-1.png" alt="">
                            </div>
                            <div class="hs-right bs2">
                                <img class="img-fluid" src="images/banner-img-2.png" alt="">
                            </div>
                            <div class="hs-right bs1">
                                <img class="img-fluid" src="images/banner-img-3.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
            <!-- <div class="banner-main-content">
                <div class="container-fluid p-0">
                    <div class="banner-imgs" data-aos="fade-left" data-aos-duration="3000">
                        <div class="hs-right bs1">
                            <img class="img-fluid" src="images/banner-img-1.png" alt="">
                        </div>
                    </div>
                </div>
            </div> -->
            <div class="container ">
                <div>
                    <div class="row align-items-center">
                        <div class="col-7">
                            <!-- <div id="animated-image" class="hs-logo" data-aos="fade-down" data-aos-easing="linear"
                                data-aos-duration="3000">
                                <img class="img-fluid" src="images/logo.png" alt="">
                            </div> -->
                            <div class="hs-form" data-aos="fade-right" data-aos-duration="3000">
                                <h1>Enjoy the <br> <span>Highs In Life</span></h1>
                                <div class="multi_search_field">
                                    <form action="javascript:;">
                                        <div class="ms-field">
                                            <div class="ms-search">
                                                <i class="fa-light fa-magnifying-glass"></i>
                                                <!-- <input type="search" placeholder="Searching For"> -->
                                                <select name="sources" class="custom-select sources"
                                                    placeholder="Searching For">
                                                    <option value="women">Women</option>
                                                    <option value="men">Men</option>
                                                    <option value="both">Both</option>
                                                </select>
                                            </div>
                                            <div class="ms-region">
                                                <i class="fa-light fa-location-dot"></i>
                                                <select name="sources" class="custom-select sources"
                                                    placeholder="Select region">
                                                    <option value="alabama">Alabama</option>
                                                    <option value="california">California</option>
                                                    <option value="new York">New York</option>
                                                    <option value="delaware">Delaware</option>
                                                    <option value="chicago">Chicago</option>
                                                    <option value="texas">Texas</option>
                                                    <option value="atlanta">Atlanta</option>
                                                </select>
                                                <!-- <select class="form-select" aria-label="Default select example">
                                                    <option selected>Select region</option>
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                </select> -->

                                            </div>
                                        </div>
                                        <!-- <button class="btn btn-theme2" type="submit">Search 420</button> -->
                                        <div class="button-container-2 me-0">
                                            <span class="mas">Search 420</span>
                                            <button type="button" name="Hover">Search 420</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-5">
                            <div class="hs2_right" data-aos="fade-left" data-aos-duration="3000">
                                <img class="img-fluid" src="images/mobile-banner.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="hs2">
            <div class="container">
                <!-- <div class="hs-slides">
                    <div class="hs_sl_item">
                        <img class="img-fluid" src="images/hs_slide1.png" alt="">
                    </div>
                    <div class="hs_sl_item">
                        <img class="img-fluid" src="images/hs_slide2.png" alt="">
                    </div>
                    <div class="hs_sl_item">
                        <img class="img-fluid" src="images/hs_slide3.png" alt="">
                    </div>
                    <div class="hs_sl_item">
                        <img class="img-fluid" src="images/hs_slide4.png" alt="">
                    </div>
                    <div class="hs_sl_item">
                        <img class="img-fluid" src="images/hs_slide5.png" alt="">
                    </div>
                    <div class="hs_sl_item">
                        <img class="img-fluid" src="images/hs_slide6.png" alt="">
                    </div>
                    <div class="hs_sl_item">
                        <img class="img-fluid" src="images/hs_slide7.png" alt="">
                    </div>
                </div> -->

                <div class="row" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="3000">
                    <div class="col-6">
                        <div class="hs_card">
                            <img src="images/ms-card1.png" class="img-fluid" alt="">
                            <div class="hsc-content">
                                <div class="d-flex align-items-center justify-content-between">
                                    <h3>
                                        <span>EVENT 1:</span> Big 420 concert music event held with a band
                                    </h3>
                                    <div class="hs_icon"><i class="fa-light fa-share-nodes"></i></div>
                                </div>
                                <p>Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit
                                    officia
                                    consequat duis enim velit mollit. Exercitation veniam consequat sunt nostrud amet.
                                    Velit
                                    officia consequat duis enim velit mollit. Exercitation veniam consequat sunt nostrud
                                    amet.</p>
                                <p class="rm">Read More...</p>
                                <p class="hs_date"><span><i class="fa-solid fa-clock-rotate-left"></i></span>Sunday, 15
                                    Oct
                                    2022</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="hs_card">
                            <img src="images/ms-card2.png" class="img-fluid" alt="">
                            <div class="hsc-content">
                                <div class="d-flex align-items-center justify-content-between">
                                    <h3>
                                        <span>EVENT 2:</span> Big 420 concert music event held with a band
                                    </h3>
                                    <div class="hs_icon"><i class="fa-light fa-share-nodes"></i></div>
                                </div>
                                <p>Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit
                                    officia
                                    consequat duis enim velit mollit. Exercitation veniam consequat sunt nostrud amet.
                                    Velit
                                    officia consequat duis enim velit mollit. Exercitation veniam consequat sunt nostrud
                                    amet.</p>
                                <p class="rm">Read More...</p>
                                <p class="hs_date"><span><i class="fa-solid fa-clock-rotate-left"></i></span>Sunday, 15
                                    Oct
                                    2022</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="hero-section2">
        <div class="hs2-gradient-top"></div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-7">
                    <div class="hs2-left" data-aos="fade-right" data-aos-duration="3000">
                        <h2>Dating on <br>
                            Date420friendly</h2>
                        <p>
                            Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis autem vel eum iure
                            reprehenderit qui in ea voluptate Sed do eiusmod tempor incididunt ut labore et dolore magna
                            aliqua. Quis autem vel eum iure reprehenderit qui in ea voluptate Sed do eiusmod tempor
                            incididunt ut labore et dolore magna aliqua. Quis autem vel eum iure reprehenderit qui in ea
                            voluptate.
                        </p>
                    </div>
                </div>
                <div class="col-5 p-0">
                    <div class="hs2-right position-relative" data-aos="fade-left" data-aos-duration="3000">
                        <img class="img-fluid" src="images/hs2-right1.png" alt="">
                        <img class="img-fluid hs2_img111" src="images/hs2-right111.png" alt="">
                        <h2>Ads</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="hero-section3">
        <div class="container">
            <div class="row justify-content-end">
                <div class="col-4" data-aos="fade-right" data-aos-duration="3000">
                    <div class="bs3-right">
                    </div>
                </div>
                <div class="col-8" data-aos="fade-down" data-aos-duration="3000">
                    <div class="bs2-left">
                        <h2>How it work</h2>
                        <p>
                            Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis autem vel eum iure
                            reprehenderit qui in ea voluptate Sed do eiusmod tempor incididunt ut labore et dolore magna
                            aliqua. Quis autem vel eum iure reprehenderit qui in ea voluptate Sed do eiusmod tempor
                            incididunt ut labore et dolore magna aliqua. Quis autem vel eum iure reprehenderit qui in ea
                            voluptate.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
    var video = document.getElementById("myVideo");

    // // Autoplay the video
    video.play();

    function showContent() {
        document.getElementById("loader").style.display = "none"; // Hide loader
        document.getElementById("content").style.display = "block"; // Show content
        document.getElementById("header").style.display = "block"; // Show content
        AOS.init({
            once: true,
        });
    }

    // Delayed content loading
    setTimeout(showContent, 2000); // 5000 milliseconds = 5 seconds
    </script>

</div>
<?php
    include 'includes/footer.php';
    $page = 'home';
    ?>