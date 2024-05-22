<?php
$page = 'Home';
$pageDesc = '""';
include 'includes/header_dash.php';
$page = 'home';
?>
<section class="dashboard_section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="ds_tabs">
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <button class="nav-link" id="nav-dashboard-tab" data-bs-toggle="tab"
                            data-bs-target="#nav-dashboard" type="button" role="tab" aria-controls="nav-dashboard"
                            aria-selected="true">Dashboard</button>
                        <button class="nav-link" id="nav-photo-tab" data-bs-toggle="tab" data-bs-target="#nav-photo"
                            type="button" role="tab" aria-controls="nav-photo" aria-selected="false">Photo</button>
                        <button class="nav-link" id="nav-my-match-tab" data-bs-toggle="tab"
                            data-bs-target="#nav-my-match" type="button" role="tab" aria-controls="nav-my-match"
                            aria-selected="false">My Matches</button>
                        <button class="nav-link" id="nav-subcribe-tab" data-bs-toggle="tab"
                            data-bs-target="#nav-subcribe" type="button" role="tab" aria-controls="nav-subcribe"
                            aria-selected="false">Subscribe</button>
                        <button class="nav-link active" id="nav-search-tab" data-bs-toggle="tab"
                            data-bs-target="#nav-search" type="button" role="tab" aria-controls="nav-search"
                            aria-selected="false">Search</button>
                        <button class="nav-link" id="nav-group-tab" data-bs-toggle="tab" data-bs-target="#nav-group"
                            type="button" role="tab" aria-controls="nav-group" aria-selected="false">Groups</button>
                        <!-- <button class="nav-link" id="nav-event-tab" data-bs-toggle="tab" data-bs-target="#nav-event"
                            type="button" role="tab" aria-controls="nav-event" aria-selected="false">Events</button>
                        <button class="nav-link" id="nav-blog-tab" data-bs-toggle="tab" data-bs-target="#nav-blog"
                            type="button" role="tab" aria-controls="nav-blog" aria-selected="false">Blogs</button>
                        <button class="nav-link" id="nav-chat-tab" data-bs-toggle="tab" data-bs-target="#nav-chat"
                            type="button" role="tab" aria-controls="nav-chat" aria-selected="false">Chats</button> -->
                        <button class="nav-link" id="nav-event-tab" data-bs-toggle="tab" data-bs-target="#nav-event"
                            type="button" role="tab" aria-controls="nav-event" aria-selected="false">Events</button>
                        <button class="nav-link " id="nav-blog-tab" data-bs-toggle="tab"
                            data-bs-target="#nav-blog" type="button" role="tab" aria-controls="nav-blog"
                            aria-selected="false">Blogs</button>
                        <button class="nav-link" id="nav-chat-tab" data-bs-toggle="tab" data-bs-target="#nav-chat"
                            type="button" role="tab" aria-controls="nav-chat" aria-selected="false">Chats</button>
                    </div>
                </nav>
                <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade   " id="nav-dashboard" role="tabpanel"
                        aria-labelledby="nav-dashboard-tab" tabindex="0">
                        <div class="item_dashboard">
                            <h2>My Dashboard</h2>
                            <div class="row mb-5">
                                <div class="col-12">
                                    <div class="dash_slide_container">
                                        <h4><i class="fa-solid fa-heart"></i>Hot List</h4>
                                        <div class="item_dash_slides">
                                        <div class="owl-carousel owl-theme">
                                            <div class="ids">
                                                <a href="dashboard_my-matches.php">
                                                    <div class="mm_d_cards">
                                                        <div class="mdc_1">
                                                            <img class="img-fluid" src="images/item_slide.png" alt="">
                                                        </div>
                                                        <div class="mdCard_content">
                                                            <h5>Name: Olivia</h5>
                                                            <h5>Age: 29</h5>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="ids">
                                                <a href="dashboard_my-matches.php">
                                                    <div class="mm_d_cards">
                                                        <div class="mdc_1">
                                                            <img class="img-fluid" src="images/item_slide2.png" alt="">
                                                        </div>
                                                        <div class="mdCard_content">
                                                            <h5>Name: Olivia</h5>
                                                            <h5>Age: 29</h5>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="ids">
                                                <a href="dashboard_my-matches.php">
                                                    <div class="mm_d_cards">
                                                        <div class="mdc_1">
                                                            <img class="img-fluid" src="images/item_slide.png" alt="">
                                                        </div>
                                                        <div class="mdCard_content">
                                                            <h5>Name: Olivia</h5>
                                                            <h5>Age: 29</h5>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="ids">
                                                <a href="dashboard_my-matches.php">
                                                    <div class="mm_d_cards">
                                                        <div class="mdc_1">
                                                            <img class="img-fluid" src="images/item_slide3.png" alt="">
                                                        </div>
                                                        <div class="mdCard_content">
                                                            <h5>Name: Olivia</h5>
                                                            <h5>Age: 29</h5>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="ids">
                                                <a href="dashboard_my-matches.php">
                                                    <div class="mm_d_cards">
                                                        <div class="mdc_1">
                                                            <img class="img-fluid" src="images/item_slide.png" alt="">
                                                        </div>
                                                        <div class="mdCard_content">
                                                            <h5>Name: Olivia</h5>
                                                            <h5>Age: 29</h5>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="ids">
                                                <a href="dashboard_my-matches.php">
                                                    <div class="mm_d_cards">
                                                        <div class="mdc_1">
                                                            <img class="img-fluid" src="images/item_slide.png" alt="">
                                                        </div>
                                                        <div class="mdCard_content">
                                                            <h5>Name: Olivia</h5>
                                                            <h5>Age: 29</h5>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="ids">
                                                <a href="dashboard_my-matches.php">
                                                    <div class="mm_d_cards">
                                                        <div class="mdc_1">
                                                            <img class="img-fluid" src="images/item_slide.png" alt="">
                                                        </div>
                                                        <div class="mdCard_content">
                                                            <h5>Name: Olivia</h5>
                                                            <h5>Age: 29</h5>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-5">
                                    <!-- <div class="dash_cards">
                                        <h4><i class="fa-light fa-clock"></i>Newsfeed</h4>
                                        <div class="dc_inner1 d-flex justify-content-center align-items-center">
                                            <h5>No items</h5>
                                        </div>
                                    </div>
                                    <br> -->
                                    <div class="dash_cards">
                                        <h4><i class="fa-regular fa-circle-exclamation"></i>Quick Links</h4>
                                        <div class="mt-4 mb-2 d-flex justify-content-between align-items-center">
                                            <h5>My Matches</h5>
                                            <h5>503</h5>
                                        </div>
                                    </div>
                                    <br>
                                    <h4 class="ps-2 pt-5 pb-4"><i class="fa-regular fa-magnifying-glass"></i>Quick
                                        Search
                                    </h4>
                                    <div class="my-4">
                                        <div class="select_cust">
                                            <div class="row">
                                                <div class="col-3">
                                                    <label for="">Gender</label>
                                                </div>
                                                <div class="col-9">
                                                    <select name="sources" class="custom-select sources"
                                                        placeholder="Male">
                                                        <option value="male">Male</option>
                                                        <option value="female">Female</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="my-4">
                                        <div class="select_cust looking_cust">
                                            <div class="row">
                                                <div class="col-3">
                                                    <label for="">Looking</label>
                                                </div>
                                                <div class="col-9">
                                                    <select name="sources" class="custom-select sources"
                                                        placeholder="Female">
                                                        <option value="female">Female</option>
                                                        <option value="male">Male</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="my-4">
                                        <div class="select_cust">
                                            <div class="row">
                                                <div class="col-3">
                                                    <label for="">Age</label>
                                                </div>
                                                <div class="col-9">
                                                    <div class="d-flex align-items-center gap-3">
                                                        <div>
                                                            <select name="sources" class="custom-select sources"
                                                                placeholder="27">
                                                                <option selected>32</option>
                                                                <option value="1">30</option>
                                                                <option value="1">30</option>
                                                                <option value="1">30</option>
                                                                <option value="1">30</option>
                                                            </select>
                                                        </div>
                                                        <label for="">to</label>
                                                        <div>
                                                            <select name="sources" class="custom-select sources"
                                                                placeholder="27">
                                                                <option selected>32</option>
                                                                <option value="1">30</option>
                                                                <option value="1">30</option>
                                                                <option value="1">30</option>
                                                                <option value="1">30</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="my-4">
                                        <div class="select_cust sc_trans">
                                            <div class="row">
                                                <div class="col-3">
                                                    <label for="">Looking</label>
                                                </div>
                                                <div class="col-9">
                                                    <select name="sources" class="custom-select sources"
                                                        placeholder="Select">
                                                        <option value="female">Female</option>
                                                        <option value="male">Male</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-4 mb-1 dash_check  d-flex gap-4">
                                        <div class="custom-checkbox">
                                            <input type="checkbox">
                                            <label for="">Online Only</label>
                                        </div>
                                        <div class="custom-checkbox">
                                            <input type="checkbox">
                                            <label for="">With Photo</label>
                                        </div>
                                    </div>
                                    <div class=" dash_search align-items-center gap-3 d-flex">
                                        <a href="javascript:;" class="btn-theme2">Search</a>
                                        <a href="javascript:;" class="ad_se">Advanced Search</a>
                                    </div>
                                </div>
                                <div class="col-7">
                                    <!-- <div class="dash_cards">
                                        <h4><i class="fa-solid fa-heart"></i>Hot List</h4>
                                        <div class="dc_inner1 d-flex justify-content-center align-items-center">
                                            <div class="text-center">
                                                <h5>Be the first in the Hot List!</h5>
                                                <p>Are you Hot, Too?</p>
                                            </div>
                                        </div>
                                    </div> -->
                                    <div class="dash_cards dc_view">
                                        <div class="d-flex justify-content-between">
                                            <h4><i class="fa-solid fa-user"></i>My Matches</h4>
                                            <h5>LATEST / <span>TOP</span></h5>
                                        </div>
                                        <div class="my-4 d-flex justify-content-center align-items-center">
                                            <div class="d-flex gap-2">
                                                <img class="img-fluid" src="images/dc1.png" alt="">
                                                <img class="img-fluid" src="images/dc2.png" alt="">
                                                <img class="img-fluid" src="images/dc3.png" alt="">
                                                <img class="img-fluid" src="images/dc4.png" alt="">
                                                <img class="img-fluid" src="images/dc5.png" alt="">
                                                <img class="img-fluid" src="images/dc6.png" alt="">
                                                <img class="img-fluid" src="images/dc7.png" alt="">
                                            </div>
                                        </div>
                                        <div class="text-center pt-2 pb-3">
                                            <a href="dashboard_matches.php" class="btn-theme2">View All</a>
                                        </div>
                                    </div>
                                    <br>
                                    <h4 class="ps-2 pt-2 pb-1"><i class="fa-regular fa-circle-exclamation"></i>Welcome!
                                    </h4>
                                    <div class="my-4">
                                        <h5>Welcome to our site! Here are a few quick links that you need to start your
                                            way
                                            around:</h5>
                                        <ul class="dc_ul">
                                            <li><a href="dashboard_photo.php"><i class="fa-solid fa-circle"></i>Upload
                                                    photos</a></li>
                                            <li><a href="profile-edit.php"><i class="fa-solid fa-circle"></i>Change
                                                    profile details</a></li>
                                            <li><a href="dashboard_search.php"><i class="fa-solid fa-circle"></i>Change
                                                    matchmaking settings</a></li>
                                            <li><a href="#;"><i class="fa-solid fa-circle"></i>Look
                                                    who’s in</a></li>
                                        </ul>
                                        <h5>Feel free to participate in our community!</h5>
                                    </div>
                                    <!-- <div class="dash_cards">
                                        <div class="d-flex justify-content-between">
                                            <h4><i class="fa-solid fa-bookmark"></i>Book Marks</h4>
                                            <h5>LATEST / <span>ONLINE</span></h5>
                                        </div>
                                        <div class="dc_inner1 d-flex justify-content-center align-items-center">
                                            <h5>No Users</h5>
                                        </div>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-photo" role="tabpanel" aria-labelledby="nav-photo-tab"
                        tabindex="0">
                        <div class="photo_dashboard">
                            <div class="row ">
                                <div class="col-6">
                                    <h2>User photo</h2>
                                    <div class="file_upload_regis my-4">
                                        <input class="form-control formFile" type="file" accept="image/*" multiple>
                                        <label>
                                            <a href="javascript:;" class="btn-theme2">Choose file</a>
                                            <h6>No File Chosen</h6>
                                        </label>
                                    </div>
                                    <div>
                                        <ul class="imageList d-flex gap-3">
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="pd_right text-end">
                                        <img class="img-fluid" src="images/photo_right.png" alt="">
                                    </div>
                                </div>
                            </div>
                            <br>
                            <br>
                            <br>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-my-match" role="tabpanel" aria-labelledby="nav-my-match-tab"
                        tabindex="0">
                        <div class="myMatches_dashboard">
                            <h2>My Matches</h2>
                            <div class="row">
                                <div class="col-3 p-4">
                                    <a href="dashboard_my-matches.php">
                                        <div class="mm_d_cards">
                                            <img class="img-fluid" src="images/md-card1.png" alt="">
                                            <div
                                                class="mdCard_content d-flex align-items-center justify-content-between">
                                                <div>
                                                    <h5>Name: Olivia</h5>
                                                    <h5>Age: 29</h5>
                                                </div>
                                                <div class="heart">
                                                    <input type="checkbox" class="heart__checkbox">
                                                    <div class="heart__icon"><i class="fa-regular fa-heart"></i></div>
                                                </div>

                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-3 p-4">
                                    <a href="dashboard_my-matches.php">
                                        <div class="mm_d_cards">
                                            <img class="img-fluid" src="images/md-card12.png" alt="">
                                            <div
                                                class="mdCard_content d-flex align-items-center justify-content-between">
                                                <div>
                                                    <h5>Name: Olivia</h5>
                                                    <h5>Age: 29</h5>
                                                </div>
                                                <div class="heart">
                                                    <input type="checkbox" class="heart__checkbox">
                                                    <div class="heart__icon"><i class="fa-regular fa-heart"></i></div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-3 p-4">
                                    <a href="dashboard_my-matches.php">
                                        <div class="mm_d_cards">
                                            <img class="img-fluid" src="images/md-card11.png" alt="">
                                            <div
                                                class="mdCard_content d-flex align-items-center justify-content-between">
                                                <div>
                                                    <h5>Name: Olivia</h5>
                                                    <h5>Age: 29</h5>
                                                </div>
                                                <div class="heart">
                                                    <input type="checkbox" class="heart__checkbox">
                                                    <div class="heart__icon"><i class="fa-regular fa-heart"></i></div>
                                                </div>

                                            </div>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-3 p-4">
                                    <a href="dashboard_my-matches.php">
                                        <div class="mm_d_cards">
                                            <img class="img-fluid" src="images/md-card10.png" alt="">
                                            <div
                                                class="mdCard_content d-flex align-items-center justify-content-between">
                                                <div>
                                                    <h5>Name: Olivia</h5>
                                                    <h5>Age: 29</h5>
                                                </div>
                                                <div class="heart">
                                                    <input type="checkbox" class="heart__checkbox">
                                                    <div class="heart__icon"><i class="fa-regular fa-heart"></i></div>
                                                </div>

                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-3 p-4">
                                    <a href="dashboard_my-matches.php">
                                        <div class="mm_d_cards">
                                            <img class="img-fluid" src="images/md-card9.png" alt="">
                                            <div
                                                class="mdCard_content d-flex align-items-center justify-content-between">
                                                <div>
                                                    <h5>Name: Olivia</h5>
                                                    <h5>Age: 29</h5>
                                                </div>
                                                <div class="heart">
                                                    <input type="checkbox" class="heart__checkbox">
                                                    <div class="heart__icon"><i class="fa-regular fa-heart"></i></div>
                                                </div>

                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-3 p-4">
                                    <a href="dashboard_my-matches.php">
                                        <div class="mm_d_cards">
                                            <img class="img-fluid" src="images/md-card8.png" alt="">
                                            <div
                                                class="mdCard_content d-flex align-items-center justify-content-between">
                                                <div>
                                                    <h5>Name: Olivia</h5>
                                                    <h5>Age: 29</h5>
                                                </div>
                                                <div class="heart">
                                                    <input type="checkbox" class="heart__checkbox">
                                                    <div class="heart__icon"><i class="fa-regular fa-heart"></i></div>
                                                </div>

                                            </div>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-3 p-4">
                                    <a href="dashboard_my-matches.php">
                                        <div class="mm_d_cards">
                                            <img class="img-fluid" src="images/md-card7.png" alt="">
                                            <div
                                                class="mdCard_content d-flex align-items-center justify-content-between">
                                                <div>
                                                    <h5>Name: Olivia</h5>
                                                    <h5>Age: 29</h5>
                                                </div>
                                                <div class="heart">
                                                    <input type="checkbox" class="heart__checkbox">
                                                    <div class="heart__icon"><i class="fa-regular fa-heart"></i></div>
                                                </div>

                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-3 p-4">
                                    <a href="dashboard_my-matches.php">
                                        <div class="mm_d_cards">
                                            <img class="img-fluid" src="images/md-card6.png" alt="">
                                            <div
                                                class="mdCard_content d-flex align-items-center justify-content-between">
                                                <div>
                                                    <h5>Name: Olivia</h5>
                                                    <h5>Age: 29</h5>
                                                </div>
                                                <div class="heart">
                                                    <input type="checkbox" class="heart__checkbox">
                                                    <div class="heart__icon"><i class="fa-regular fa-heart"></i></div>
                                                </div>

                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-3 p-4">
                                    <a href="dashboard_my-matches.php">
                                        <div class="mm_d_cards">
                                            <img class="img-fluid" src="images/md-card5.png" alt="">
                                            <div
                                                class="mdCard_content d-flex align-items-center justify-content-between">
                                                <div>
                                                    <h5>Name: Olivia</h5>
                                                    <h5>Age: 29</h5>
                                                </div>
                                                <div class="heart">
                                                    <input type="checkbox" class="heart__checkbox">
                                                    <div class="heart__icon"><i class="fa-regular fa-heart"></i></div>
                                                </div>

                                            </div>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-3 p-4">
                                    <a href="dashboard_my-matches.php">
                                        <div class="mm_d_cards">
                                            <img class="img-fluid" src="images/md-card8.png" alt="">
                                            <div
                                                class="mdCard_content d-flex align-items-center justify-content-between">
                                                <div>
                                                    <h5>Name: Olivia</h5>
                                                    <h5>Age: 29</h5>
                                                </div>
                                                <div class="heart">
                                                    <input type="checkbox" class="heart__checkbox">
                                                    <div class="heart__icon"><i class="fa-regular fa-heart"></i></div>
                                                </div>

                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-3 p-4">
                                    <a href="dashboard_my-matches.php">
                                        <div class="mm_d_cards">
                                            <img class="img-fluid" src="images/md-card7.png" alt="">
                                            <div
                                                class="mdCard_content d-flex align-items-center justify-content-between">
                                                <div>
                                                    <h5>Name: Olivia</h5>
                                                    <h5>Age: 29</h5>
                                                </div>
                                                <div class="heart">
                                                    <input type="checkbox" class="heart__checkbox">
                                                    <div class="heart__icon"><i class="fa-regular fa-heart"></i></div>
                                                </div>

                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-3 p-4">
                                    <a href="dashboard_my-matches.php">
                                        <div class="mm_d_cards">
                                            <img class="img-fluid" src="images/md-card6.png" alt="">
                                            <div
                                                class="mdCard_content d-flex align-items-center justify-content-between">
                                                <div>
                                                    <h5>Name: Olivia</h5>
                                                    <h5>Age: 29</h5>
                                                </div>
                                                <div class="heart">
                                                    <input type="checkbox" class="heart__checkbox">
                                                    <div class="heart__icon"><i class="fa-regular fa-heart"></i></div>
                                                </div>

                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="profile_section">
                            <div class="container">
                                <div class="row">
                                    <div class="col-7">
                                        <div class="my_profile">
                                            <div class="mp_left">
                                                <div class="row">
                                                    <div class="col-4">
                                                        <img src="images/profile_1.png" class="img-fluid" alt="profile">
                                                    </div>
                                                    <div class="col-8">
                                                        <div class="mpl_table">
                                                            <div class="table-responsive">
                                                                <table>
                                                                    <tbody>
                                                                        <tr>
                                                                            <th>
                                                                                <h4>Name:</h4>
                                                                            </th>
                                                                            <td>
                                                                                <h5>Kaden Salazar</h5>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th>
                                                                                <h4>I am:</h4>
                                                                            </th>
                                                                            <td>
                                                                                <h5>Male</h5>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th>
                                                                                <h4>Looking for:</h4>
                                                                            </th>
                                                                            <td>
                                                                                <h5>Female</h5>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th>
                                                                                <h4>Here for:</h4>
                                                                            </th>
                                                                            <td>
                                                                                <h5>Fun, Dating</h5>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th>
                                                                                <h4>Match desired:</h4>
                                                                            </th>
                                                                            <td>
                                                                                <h5>40 y.o</h5>
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="pr_my_user">
                                            <h2>User photo</h2>
                                            <div class="user_images">
                                                <img class="img-fluid" src="images/user_img1.png" alt="">
                                                <img class="img-fluid" src="images/user_img2.png" alt="">
                                                <img class="img-fluid" src="images/user_img3.png" alt="">
                                                <img class="img-fluid" src="images/user_img4.png" alt="">
                                                <img class="img-fluid" src="images/user_img1.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-1"></div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="pr_about">
                                            <div>

                                                <div class="edit_pen">
                                                    <h2>About Me</h2>
                                                    <a href="javascript:;" class="e_pen"><i
                                                            class="fa-thin fa-pencil"></i></a>
                                                </div>
                                            </div>
                                            <div>
                                                <p>Pharetra convallis posuere morbi leo. Vestibulum lectus mauris
                                                    ultrices eros in. Lobortis
                                                    elementum nibh tellus molestie nunc. Libero nunc consequat interdum
                                                    varius sit amet mattis
                                                    vulputate. Duis at consectetur lorem donec massa. Eget nulla
                                                    facilisi etiam dignissim diam
                                                    quis enim lobortis condimentum lacinia quis.</p>
                                                <p>Pharetra convallis posuere morbi leo. Vestibulum lectus mauris
                                                    ultrices eros in. Lobortis
                                                    elementum nibh tellus molestie nunc. Libero nunc consequat interdum
                                                    varius sit amet mattis
                                                    vulputate. Duis at consectetur lorem donec massa. Eget nulla
                                                    facilisi etiam dignissim diam
                                                    quis enim lobortis condimentum lacinia quis.Pharetra convallis
                                                    posuere morbi leo. Vestibulum
                                                    lectus mauris ultrices eros in. Lobortis elementum nibh tellus
                                                    molestie nunc. Libero nunc
                                                    consequat interdum varius sit amet mattis vulputate. Duis at
                                                    consectetur lorem donec massa.
                                                    Eget nulla facilisi etiam dignissim diam quis enim lobortis
                                                    condimentum lacinia quis.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="pr-appearance">
                                            <h2>Appearance</h2>
                                            <div class="mpl_table">
                                                <div class="table-responsive">
                                                    <table>
                                                        <tbody>
                                                            <tr>
                                                                <th>
                                                                    <h4>Ethnicity:</h4>
                                                                </th>
                                                                <td>
                                                                    <h5>Asian</h5>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>
                                                                    <h4>Body Type:</h4>
                                                                </th>
                                                                <td>
                                                                    <h5>Big and Beautiful</h5>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>
                                                                    <h4>Hair Color:</h4>
                                                                </th>
                                                                <td>
                                                                    <h5>Brown</h5>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>
                                                                    <h4>Eye Color:</h4>
                                                                </th>
                                                                <td>
                                                                    <h5>Green</h5>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="life_style pr-appearance">
                                            <h2>Life Style</h2>
                                            <div class="mpl_table">
                                                <div class="table-responsive">
                                                    <table>
                                                        <tbody>
                                                            <tr>
                                                                <th>
                                                                    <h4>Hobbies:</h4>
                                                                </th>
                                                                <td>
                                                                    <h5>Swimming, sports</h5>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>
                                                                    <h4>My own words:</h4>
                                                                </th>
                                                                <td>
                                                                    <h5>Ready to 420</h5>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>
                                                                    <h4>Smoking:</h4>
                                                                </th>
                                                                <td>
                                                                    <h5>Always</h5>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>
                                                                    <h4>Drinking:</h4>
                                                                </th>
                                                                <td>
                                                                    <h5>Socially </h5>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> -->

                    </div>
                    <div class="tab-pane fade" id="nav-subcribe" role="tabpanel" aria-labelledby="nav-subcribe-tab"
                        tabindex="0">
                        <div class="search_dashboard">
                            <h2>Subscribe</h2>
                            <div class="table-responsive">
                                <div class="s_table">
                                    <table class="w-100">
                                        <tr>
                                            <th>Permissions</th>
                                            <th>Free</th>
                                            <th>VIP</th>
                                        </tr>
                                    </table>
                                </div>
                                <div class="s_table">
                                    <h3>Messages</h3>
                                    <table class="w-100">
                                        <tr>
                                            <td>Start chat dialog</td>
                                            <td></td>
                                            <td><img src="images/check.svg" alt="" class="img-fluild"></td>
                                        </tr>
                                        <tr>
                                            <td>Read chat massages</td>
                                            <td></td>
                                            <td><img src="images/check.svg" alt="" class="img-fluild"></td>
                                        </tr>
                                        <tr>
                                            <td>Continue chat dialog</td>
                                            <td></td>
                                            <td><img src="images/check.svg" alt="" class="img-fluild"></td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="s_table">
                                    <h3>Photo</h3>
                                    <table class="w-100">
                                        <tr>
                                            <td>View photo</td>
                                            <td></td>
                                            <td><img src="images/check.svg" alt="" class="img-fluild"></td>
                                        </tr>
                                        <tr>
                                            <td>Upload photo</td>
                                            <td><img src="images/check.svg" alt="" class="img-fluild"></td>
                                            <td><img src="images/check.svg" alt="" class="img-fluild"></td>
                                        </tr>
                                        <tr>
                                            <td>Comment photo</td>
                                            <td></td>
                                            <td><img src="images/check.svg" alt="" class="img-fluild"></td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="s_table">
                                    <h3>Users</h3>
                                    <table class="w-100">
                                        <tr>
                                            <td>Search users</td>
                                            <td></td>
                                            <td><img src="images/check.svg" alt="" class="img-fluild"></td>
                                        </tr>
                                        <tr>
                                            <td>View profiles</td>
                                            <td></td>
                                            <td><img src="images/check.svg" alt="" class="img-fluild"></td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="s_table">
                                    <h3>Advertisement</h3>
                                    <table class="w-100">
                                        <tr>
                                            <td>Hide Ads</td>
                                            <td></td>
                                            <td><img src="images/check.svg" alt="" class="img-fluild"></td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="s_table">
                                    <h3>Virtual gifts</h3>
                                    <table class="w-100">
                                        <tr>
                                            <td>Send gifts</td>
                                            <td></td>
                                            <td><img src="images/check.svg" alt="" class="img-fluild"></td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="s_table">
                                    <h3>Hot List</h3>
                                    <table class="w-100">
                                        <tr>
                                            <td>Add to Hot List</td>
                                            <td></td>
                                            <td><img src="images/check.svg" alt="" class="img-fluild"></td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="s_table">
                                    <h3>Blogs</h3>
                                    <table class="w-100">
                                        <tr>
                                            <td>Comment blogs</td>
                                            <td></td>
                                            <td><img src="images/check.svg" alt="" class="img-fluild"></td>
                                        </tr>
                                        <tr>
                                            <td>Add blog posts</td>
                                            <td></td>
                                            <td><img src="images/check.svg" alt="" class="img-fluild"></td>
                                        </tr>
                                        <tr>
                                            <td>View blog posts</td>
                                            <td></td>
                                            <td><img src="images/check.svg" alt="" class="img-fluild"></td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="s_table">
                                    <h3>Events</h3>
                                    <table class="w-100">
                                        <tr>
                                            <td>Add Events </td>
                                            <td></td>
                                            <td><img src="images/check.svg" alt="" class="img-fluild"></td>
                                        </tr>
                                        <tr>
                                            <td>View Events</td>
                                            <td></td>
                                            <td><img src="images/check.svg" alt="" class="img-fluild"></td>
                                        </tr>
                                        <tr>
                                            <td>Comment Events</td>
                                            <td></td>
                                            <td><img src="images/check.svg" alt="" class="img-fluild"></td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="s_table">
                                    <h3>Groups</h3>
                                    <table class="w-100">
                                        <tr>
                                            <td>Allow group all posts</td>
                                            <td></td>
                                            <td><img src="images/check.svg" alt="" class="img-fluild"></td>
                                        </tr>
                                        <tr>
                                            <td>Create groups</td>
                                            <td></td>
                                            <td><img src="images/check.svg" alt="" class="img-fluild"></td>
                                        </tr>
                                        <tr>
                                            <td>View groups</td>
                                            <td></td>
                                            <td><img src="images/check.svg" alt="" class="img-fluild"></td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="s_table">
                                    <h3>Newsfeed</h3>
                                    <table class="w-100">
                                        <tr>
                                            <td>Allow status updates comments</td>
                                            <td></td>
                                            <td><img src="images/check.svg" alt="" class="img-fluild"></td>
                                        </tr>
                                        <tr>
                                            <td>Allow status updates</td>
                                            <td></td>
                                            <td><img src="images/check.svg" alt="" class="img-fluild"></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <div class="pkg_dash">
                                <h2>Packages</h2>
                                <div class="row">
                                    <div class="col-6">
                                        <form action="javascript:;">
                                            <p>
                                                <input type="radio" id="test1" name="radio-group" checked>
                                                <label for="test1">20.99 USD per 12 months (recurring)</label>
                                            </p>
                                            <p>
                                                <input type="radio" id="test2" name="radio-group">
                                                <label for="test2">4.25 USD per 1 month (recurring)</label>
                                            </p>
                                        </form>
                                    </div>
                                    <div class="col-6">
                                        <div class="pkg_dash_right">
                                            <p>PAY SECURELY WITH </p>
                                            <img class="img-fluid" src="images/pkg_dash.png" alt="">
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade  show active nav-search" id="nav-search" role="tabpanel"
                        aria-labelledby="nav-search-tab" tabindex="0">
                        <h2 class="mb-4">Search</h2>
                        <form action="javascript:;">
                            <div class='table-sm-responsive'>
                                <table class="table table-borderless">
                                    <tbody>
                                        <tr>
                                            <td>
                                                <h4>Looking For</h4>
                                            </td>
                                            <td>
                                                <select name="sources" class="custom-select sources"
                                                    placeholder="Female">
                                                    <option value="male">Male</option>
                                                    <option value="female">Female</option>
                                                </select>
                                            </td>
                                            <!-- <td class="form_gender">
                                                <select class="form-select" aria-label="Default select example">
                                                    <option selected="">Male</option>
                                                    <option value="1">Female</option>
                                                </select>
                                            </td> -->
                                        </tr>
                                        <tr>
                                            <td>
                                                <h4>Online Only</h4>
                                            </td>
                                            <td>
                                                <div class='custom-checkbox '>
                                                    <input type="checkbox">
                                                    <label for=""></label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h4>With Photo</h4>
                                            </td>
                                            <td>
                                                <div class='custom-checkbox '>
                                                    <input type="checkbox">
                                                    <label for=""></label>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <table class="table table-borderless">
                                    <tbody>
                                        <div class='text-center table-head'>
                                            <h4>Basic</h4>
                                        </div>
                                        <tr>
                                            <td>
                                                <h4>Here For</h4>
                                            </td>
                                            <td>
                                                <div class='custom-checkbox'>
                                                    <input type="checkbox">
                                                    <label for="">Fun</label>
                                                </div>
                                                <div class='custom-checkbox'>
                                                    <input type="checkbox">
                                                    <label for="">Whatever</label>
                                                </div>
                                                <div class='custom-checkbox'>
                                                    <input type="checkbox">
                                                    <label for="">Dating</label>
                                                </div>
                                                <div class='custom-checkbox'>
                                                    <input type="checkbox">
                                                    <label for="">Friendship</label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h4>Birthday</h4>
                                            </td>
                                            <td class="d-flex  align-items-center">
                                                <div>
                                                    <select name="sources" class="custom-select sources"
                                                        placeholder="32">
                                                        <option selected>32</option>
                                                        <option value="1">30</option>
                                                        <option value="1">30</option>
                                                        <option value="1">30</option>
                                                        <option value="1">30</option>
                                                    </select>
                                                </div>
                                                <p class="px-3">to</p>
                                                <div>
                                                    <select name="sources" class="custom-select sources"
                                                        placeholder="52">
                                                        <option selected>32</option>
                                                        <option value="1">30</option>
                                                        <option value="1">30</option>
                                                        <option value="1">30</option>
                                                        <option value="1">30</option>
                                                    </select>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <table class="table table-borderless">
                                    <tbody>
                                        <div class='text-center table-head'>
                                            <h4>Appearance</h4>
                                        </div>
                                        <tr>
                                            <td>
                                                <h4>Ethnicity</h4>
                                            </td>
                                            <td class="pkg_dash appear_dash">
                                                <div class="row">
                                                    <div class="col-12 col-lg-4">
                                                        <div>
                                                            <input type="radio" id="ethnicity53" name="ethnicity5-group"
                                                                checked="">
                                                            <label for="ethnicity53">African</label>
                                                        </div>
                                                        <div>
                                                            <input type="radio" id="ethnicity54"
                                                                name="ethnicity5-group">
                                                            <label for="ethnicity54">Arab</label>
                                                        </div>
                                                        <div>
                                                            <input type="radio" id="ethnicity55"
                                                                name="ethnicity5-group">
                                                            <label for="ethnicity55">Caucasian(white)</label>
                                                        </div>
                                                        <div>
                                                            <input type="radio" id="ethnicity56"
                                                                name="ethnicity5-group">
                                                            <label for="ethnicity56">Indian</label>
                                                        </div>
                                                        <div>
                                                            <input type="radio" id="ethnicity57"
                                                                name="ethnicity5-group">
                                                            <label for="ethnicity57">Native American</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-lg-4">
                                                        <div>
                                                            <input type="radio" id="ethnicity58"
                                                                name="ethnicity5-group">
                                                            <label for="ethnicity58">African American</label>
                                                        </div>
                                                        <div>
                                                            <input type="radio" id="ethnicity59"
                                                                name="ethnicity5-group">
                                                            <label for="ethnicity59">Asian</label>
                                                        </div>
                                                        <div>
                                                            <input type="radio" id="ethnicity510"
                                                                name="ethnicity5-group">
                                                            <label for="ethnicity510">Hispanic</label>
                                                        </div>
                                                        <div>
                                                            <input type="radio" id="ethnicity511"
                                                                name="ethnicity5-group">
                                                            <label for="ethnicity511">Mixed</label>
                                                        </div>
                                                        <div>
                                                            <input type="radio" id="ethnicity512"
                                                                name="ethnicity5-group">
                                                            <label for="ethnicity512">Other</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h4>Body Type</h4>
                                            </td>
                                            <td class="pkg_dash appear_dash">
                                                <div class="row">
                                                    <div class="col-12 col-lg-4">
                                                        <div>
                                                            <input type="radio" id="bodytype513" name="bodytype5-group">
                                                            <label for="bodytype513">Slim</label>
                                                        </div>
                                                        <div>
                                                            <input type="radio" id="bodytype514" name="bodytype5-group">
                                                            <label for="bodytype514">Average</label>
                                                        </div>
                                                        <div>
                                                            <input type="radio" id="bodytype515" name="bodytype5-group">
                                                            <label for="bodytype515">Athletic</label>
                                                        </div>
                                                        <div>
                                                            <input type="radio" id="bodytype516" name="bodytype5-group">
                                                            <label for="bodytype516">A little Plump</label>
                                                        </div>
                                                        <div>
                                                            <input type="radio" id="bodytype517" name="bodytype5-group">
                                                            <label for="bodytype517">Big and Lovely</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h4>Hair Color</h4>
                                            </td>
                                            <td class="pkg_dash appear_dash">
                                                <div class="row">
                                                    <div class="col-12 col-lg-4">
                                                        <div>
                                                            <input type="radio" id="haircolor518"
                                                                name="haircolor5-group">
                                                            <label for="haircolor518">Blond</label>
                                                        </div>
                                                        <div>
                                                            <input type="radio" id="haircolor519"
                                                                name="haircolor5-group">
                                                            <label for="haircolor519">Brown</label>
                                                        </div>
                                                        <div>
                                                            <input type="radio" id="haircolor520"
                                                                name="haircolor5-group">
                                                            <label for="haircolor520">Red</label>
                                                        </div>
                                                        <div>
                                                            <input type="radio" id="haircolor521"
                                                                name="haircolor5-group">
                                                            <label for="haircolor521">Black</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h4>Eye Color</h4>
                                            </td>
                                            <td class="pkg_dash appear_dash">
                                                <div class="row">
                                                    <div class="col-12 col-lg-4">
                                                        <div>
                                                            <input type="radio" id="eyecolor522" name="eyecolor5-group">
                                                            <label for="eyecolor522">Amber</label>
                                                        </div>
                                                        <div>
                                                            <input type="radio" id="eyecolor523" name="eyecolor5-group">
                                                            <label for="eyecolor523">Brown</label>
                                                        </div>
                                                        <div>
                                                            <input type="radio" id="eyecolor524" name="eyecolor5-group">
                                                            <label for="eyecolor524">Green</label>
                                                        </div>
                                                        <div>
                                                            <input type="radio" id="eyecolor525" name="eyecolor5-group">
                                                            <label for="eyecolor525">Other</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-lg-4">
                                                        <div>
                                                            <input type="radio" id="eyecolor526" name="eyecolor5-group">
                                                            <label for="eyecolor526">Blue</label>
                                                        </div>
                                                        <div>
                                                            <input type="radio" id="eyecolor527" name="eyecolor5-group">
                                                            <label for="eyecolor527">Gray</label>
                                                        </div>
                                                        <div>
                                                            <input type="radio" id="eyecolor528" name="eyecolor5-group">
                                                            <label for="eyecolor528">Hazel</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <table class="table table-borderless">
                                    <tbody>
                                        <div class='text-center table-head'>
                                            <h4>Lifestyle</h4>
                                        </div>
                                        <tr>
                                            <td>
                                                <h4>Favorite way
                                                    to Spend Time
                                                </h4>
                                            </td>
                                            <td>
                                                <div class="row">
                                                    <div class="col-12 col-lg-4">
                                                        <div class='custom-checkbox'>
                                                            <input type="checkbox">
                                                            <label for="">Books</label>
                                                        </div>
                                                        <div class='custom-checkbox'>
                                                            <input type="checkbox">
                                                            <label for="">Friends</label>
                                                        </div>
                                                        <div class='custom-checkbox'>
                                                            <input type="checkbox">
                                                            <label for="">Nightlife</label>
                                                        </div>
                                                        <div class='custom-checkbox'>
                                                            <input type="checkbox">
                                                            <label for="">Outdoor</label>
                                                        </div>
                                                        <div class='custom-checkbox'>
                                                            <input type="checkbox">
                                                            <label for="">Other</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-lg-4">
                                                        <div class='custom-checkbox'>
                                                            <input type="checkbox">
                                                            <label for="">Club</label>
                                                        </div>
                                                        <div class='custom-checkbox'>
                                                            <input type="checkbox">
                                                            <label for="">Music</label>
                                                        </div>
                                                        <div class='custom-checkbox'>
                                                            <input type="checkbox">
                                                            <label for="">Internet</label>
                                                        </div>
                                                        <div class='custom-checkbox'>
                                                            <input type="checkbox">
                                                            <label for="">Sports</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h4>Smoking</h4>
                                            </td>
                                            <td class="pkg_dash appear_dash">
                                                <div class="row">
                                                    <div class="col-12 col-lg-4">
                                                        <div>
                                                            <input type="radio" id="smooking529" name="smooking5-group">
                                                            <label for="smooking529">Never</label>
                                                        </div>
                                                        <div>
                                                            <input type="radio" id="smooking530" name="smooking5-group">
                                                            <label for="smooking530">Rarely</label>
                                                        </div>
                                                        <div>
                                                            <input type="radio" id="smooking531" name="smooking5-group">
                                                            <label for="smooking531">Often</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-lg-4">
                                                        <div>
                                                            <input type="radio" id="smooking532" name="smooking5-group">
                                                            <label for="smooking532">Quit</label>
                                                        </div>
                                                        <div>
                                                            <input type="radio" id="smooking533" name="smooking5-group">
                                                            <label for="smooking533">Socially</label>
                                                        </div>
                                                        <div>
                                                            <input type="radio" id="smooking534" name="smooking5-group">
                                                            <label for="smooking534">Very Often</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h4>Drinking</h4>
                                            </td>
                                            <td class="pkg_dash appear_dash">
                                                <div class="row">
                                                    <div class="col-12 col-lg-4">
                                                        <div>
                                                            <input type="radio" id="drinking535" name="drinking5-group">
                                                            <label for="drinking535">Never</label>
                                                        </div>
                                                        <div>
                                                            <input type="radio" id="drinking536" name="drinking5-group">
                                                            <label for="drinking536">Rarely</label>
                                                        </div>
                                                        <div>
                                                            <input type="radio" id="drinking537" name="drinking5-group">
                                                            <label for="drinking537">Often</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-lg-4">
                                                        <div>
                                                            <input type="radio" id="drinking538" name="drinking5-group">
                                                            <label for="drinking538">Quit</label>
                                                        </div>
                                                        <div>
                                                            <input type="radio" id="drinking539" name="drinking5-group">
                                                            <label for="drinking539">Socially</label>
                                                        </div>
                                                        <div>
                                                            <input type="radio" id="drinking540" name="drinking5-group">
                                                            <label for="drinking540">Very Often</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="d-flex justify-content-end align-items-center">
                                <div class="ds_btn d-flex justify-content-end align-items-center">
                                    <a href="dashboard_matches.php" class="button-container-2">
                                        <span class="mas">Search<i class="fa-solid fa-arrow-right-long"></i></span>
                                        <button type="button" name="Hover">Search<i
                                                class="fa-solid fa-arrow-right-long"></i></button>
                                    </a>
                                </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="tab-pane fade" id="nav-group" role="tabpanel" aria-labelledby="nav-group-tab"
                        tabindex="0">
                        <div class="group_dashboard">
                            <h2>Groups</h2>
                            <div class="gd_item">
                                <h3>Group 1</h3>
                                <div class="row row_group">
                                    <div class="col-3">
                                        <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#groups_modal">
                                            <div class="mm_d_cards">
                                                <img class="img-fluid" src="images/md-card1.png" alt="">
                                                <div class="mdCard_content">
                                                    <h5>Name: Olivia</h5>
                                                    <h5>Age: 29</h5>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-3">
                                        <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#groups_modal">
                                            <div class="mm_d_cards">
                                                <img class="img-fluid" src="images/md-card12.png" alt="">
                                                <div class="mdCard_content">
                                                    <h5>Name: Olivia</h5>
                                                    <h5>Age: 29</h5>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-3">
                                        <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#groups_modal">
                                            <div class="mm_d_cards">
                                                <img class="img-fluid" src="images/md-card11.png" alt="">
                                                <div class="mdCard_content">
                                                    <h5>Name: Olivia</h5>
                                                    <h5>Age: 29</h5>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-3">
                                        <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#groups_modal">
                                            <div class="mm_d_cards">
                                                <img class="img-fluid" src="images/md-card10.png" alt="">
                                                <div class="mdCard_content">
                                                    <h5>Name: Olivia</h5>
                                                    <h5>Age: 29</h5>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="gd_item">
                                <h3>Group 2</h3>
                                <div class="row row_group">
                                    <div class="col-3">
                                        <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#groups_modal">
                                            <div class="mm_d_cards">
                                                <img class="img-fluid" src="images/md-card1.png" alt="">
                                                <div class="mdCard_content">
                                                    <h5>Name: Olivia</h5>
                                                    <h5>Age: 29</h5>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-3">
                                        <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#groups_modal">
                                            <div class="mm_d_cards">
                                                <img class="img-fluid" src="images/md-card12.png" alt="">
                                                <div class="mdCard_content">
                                                    <h5>Name: Olivia</h5>
                                                    <h5>Age: 29</h5>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-event" role="tabpanel" aria-labelledby="nav-event-tab"
                        tabindex="0">
                        <div class="event_dashboard">
                            <h2>Events</h2>
                            <div class="ed_items">
                                <div class="row justify-content-between">
                                    <div class="col-5">
                                        <a href="dashboard_events.php">
                                            <div class="bpr_inner d-flex align-items-center">
                                                <img class="img-fluid" src="images/bpr1.png" alt="">
                                                <div class="bpr_desc">
                                                    <h5>Here is the history of how 420 got associated with smoking
                                                    </h5>
                                                    <h6>March 13, 2024</h6>
                                                    <p>Lorem ipsum simply dummy text is for using printing or
                                                        pricing.
                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-5">
                                        <a href="dashboard_events.php">
                                            <div class="bpr_inner d-flex align-items-center">
                                                <img class="img-fluid" src="images/bpr2.png" alt="">
                                                <div class="bpr_desc">
                                                    <h5>Here is the history of how 420 got associated with smoking
                                                    </h5>
                                                    <h6>March 13, 2024</h6>
                                                    <p>Lorem ipsum simply dummy text is for using printing or
                                                        pricing.
                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-5">
                                        <a href="dashboard_events.php">
                                            <div class="bpr_inner d-flex align-items-center">
                                                <img class="img-fluid" src="images/bpr3.png" alt="">
                                                <div class="bpr_desc">
                                                    <h5>Here is the history of how 420 got associated with smoking
                                                    </h5>
                                                    <h6>March 13, 2024</h6>
                                                    <p>Lorem ipsum simply dummy text is for using printing or
                                                        pricing.
                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-5">
                                        <a href="dashboard_events.php">
                                            <div class="bpr_inner d-flex align-items-center">
                                                <img class="img-fluid" src="images/bpr4.png" alt="">
                                                <div class="bpr_desc">
                                                    <h5>Here is the history of how 420 got associated with smoking
                                                    </h5>
                                                    <h6>March 13, 2024</h6>
                                                    <p>Lorem ipsum simply dummy text is for using printing or
                                                        pricing.
                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-5">
                                        <a href="dashboard_events.php">
                                            <div class="bpr_inner d-flex align-items-center">
                                                <img class="img-fluid" src="images/bpr2.png" alt="">
                                                <div class="bpr_desc">
                                                    <h5>Here is the history of how 420 got associated with smoking
                                                    </h5>
                                                    <h6>March 13, 2024</h6>
                                                    <p>Lorem ipsum simply dummy text is for using printing or
                                                        pricing.
                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-5">
                                        <a href="dashboard_events.php">
                                            <div class="bpr_inner d-flex align-items-center">
                                                <img class="img-fluid" src="images/bpr4.png" alt="">
                                                <div class="bpr_desc">
                                                    <h5>Here is the history of how 420 got associated with smoking
                                                    </h5>
                                                    <h6>March 13, 2024</h6>
                                                    <p>Lorem ipsum simply dummy text is for using printing or
                                                        pricing.
                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-5">
                                        <a href="dashboard_events.php">
                                            <div class="bpr_inner d-flex align-items-center">
                                                <img class="img-fluid" src="images/bpr2.png" alt="">
                                                <div class="bpr_desc">
                                                    <h5>Here is the history of how 420 got associated with smoking
                                                    </h5>
                                                    <h6>March 13, 2024</h6>
                                                    <p>Lorem ipsum simply dummy text is for using printing or
                                                        pricing.
                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-5">
                                        <a href="dashboard_events.php">
                                            <div class="bpr_inner d-flex align-items-center">
                                                <img class="img-fluid" src="images/bpr3.png" alt="">
                                                <div class="bpr_desc">
                                                    <h5>Here is the history of how 420 got associated with smoking
                                                    </h5>
                                                    <h6>March 13, 2024</h6>
                                                    <p>Lorem ipsum simply dummy text is for using printing or
                                                        pricing.
                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>

                            </div>
                            <a class="btn6" href="dashboard_add_event.php">
                                <img src="images/calender_star.png" alt="">
                                Add Event</a>
                        </div>

                    </div>
                    <div class="tab-pane fade" id="nav-blog" role="tabpanel" aria-labelledby="nav-blog-tab"
                        tabindex="0">
                        <div class="blog_dashboard">
                        <h2>Blogs</h2>
                            <div class="row">
                                <div class="col-7">
                                    <div class="blog_post">
                                        <h3>Smoke and Poke will provide a cannabis enthusiast with a HIGH</h2>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                            eiusmod tempor ut dolore magna aliqua.</p>
                                        <img src="images/blog_post1.png" alt="" class="blog_img1 img-fluid">
                                        <div class="bp_detail">
                                            <h4><i class="fa-solid fa-user"></i>By Admin</h4>
                                            <h4><i class="fa-regular fa-clock"></i>By Posted on March 13, 2024
                                            </h4>
                                            <h4>
                                                <img class="img-fluid" src="images/comment.svg" alt="">
                                                Leave a Comment
                                            </h4>
                                        </div>
                                    </div>
                                    <div class="blog_post">
                                        <h3>Cannabis-oriented celebrations</h2>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                            eiusmod tempor ut dolore magna aliqua.</p>
                                        <img src="images/blog_post2.png" alt="" class="blog_img1 img-fluid">
                                        <div class="bp_detail">
                                            <h4><i class="fa-solid fa-user"></i>By Admin</h4>
                                            <h4><i class="fa-regular fa-clock"></i>By Posted on March 13, 2024
                                            </h4>
                                            <h4>
                                                <img class="img-fluid" src="images/comment.svg" alt="">
                                                Leave a Comment
                                            </h4>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-5 pe-0">
                                    <div class="blog_post_right">
                                        <h2>Recent Posts</h2>
                                        <div class="bpr_inner d-flex align-items-center">
                                            <img class="img-fluid" src="images/bpr1.png" alt="">
                                            <div class="bpr_desc">
                                                <h5>Here is the history of how 420 got associated with smoking
                                                </h5>
                                                <h6>March 13, 2024</h6>
                                                <p>Lorem ipsum simply dummy text is for using printing or
                                                    pricing.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="bpr_inner d-flex align-items-center">
                                            <img class="img-fluid" src="images/bpr2.png" alt="">
                                            <div class="bpr_desc">
                                                <h5>Here is the history of how 420 got associated with smoking
                                                </h5>
                                                <h6>March 13, 2024</h6>
                                                <p>Lorem ipsum simply dummy text is for using printing or
                                                    pricing.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="bpr_inner d-flex align-items-center">
                                            <img class="img-fluid" src="images/bpr3.png" alt="">
                                            <div class="bpr_desc">
                                                <h5>Here is the history of how 420 got associated with smoking
                                                </h5>
                                                <h6>March 13, 2024</h6>
                                                <p>Lorem ipsum simply dummy text is for using printing or
                                                    pricing.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="bpr_inner d-flex align-items-center">
                                            <img class="img-fluid" src="images/bpr4.png" alt="">
                                            <div class="bpr_desc">
                                                <h5>Here is the history of how 420 got associated with smoking
                                                </h5>
                                                <h6>March 13, 2024</h6>
                                                <p>Lorem ipsum simply dummy text is for using printing or
                                                    pricing.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="bpr_inner d-flex align-items-center">
                                            <img class="img-fluid" src="images/bpr5.png" alt="">
                                            <div class="bpr_desc">
                                                <h5>Here is the history of how 420 got associated with smoking
                                                </h5>
                                                <h6>March 13, 2024</h6>
                                                <p>Lorem ipsum simply dummy text is for using printing or
                                                    pricing.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="bpr_inner d-flex align-items-center">
                                            <img class="img-fluid" src="images/bpr5.png" alt="">
                                            <div class="bpr_desc">
                                                <h5>Here is the history of how 420 got associated with smoking
                                                </h5>
                                                <h6>March 13, 2024</h6>
                                                <p>Lorem ipsum simply dummy text is for using printing or
                                                    pricing.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="bpr_inner d-flex align-items-center">
                                            <img class="img-fluid" src="images/bpr5.png" alt="">
                                            <div class="bpr_desc">
                                                <h5>Here is the history of how 420 got associated with smoking
                                                </h5>
                                                <h6>March 13, 2024</h6>
                                                <p>Lorem ipsum simply dummy text is for using printing or
                                                    pricing.
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="tab-pane fade" id="nav-chat" role="tabpanel" aria-labelledby="nav-chat-tab"
                        tabindex="0">
                        <div class="chat_dashboard">
                            <div class="row">
                                <div class="col-3">
                                    <div class="chat_left" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                        <h2>Chat</h2>
                                        <div class="cl_item">
                                            <div class="cl_item_inner active" id="v-pills-profile-tab"
                                                data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button"
                                                role="tab" aria-controls="v-pills-profile" aria-selected="true">
                                                <div class="mm_d_cards">
                                                    <img class="img-fluid" src="images/chat-list1.png" alt="">
                                                    <div class="mdCard_content">
                                                    </div>
                                                </div>
                                                <div class="cli_content">
                                                    <p>Jane Doe</p>
                                                    <p><span>32 y.o</span></p>
                                                </div>
                                            </div>
                                            <div class="cl_item_inner" id="v-pills-profile1-tab" data-bs-toggle="pill"
                                                data-bs-target="#v-pills-profile1" type="button" role="tab"
                                                aria-controls="v-pills-profile1" aria-selected="false">
                                                <div class="mm_d_cards">
                                                    <img class="img-fluid" src="images/chat-list1.png" alt="">
                                                    <div class="mdCard_content">
                                                    </div>
                                                </div>
                                                <div class="cli_content">
                                                    <p>Jane Doe</p>
                                                    <p><span>32 y.o</span></p>
                                                </div>
                                            </div>
                                            <div class="cl_item_inner" id="v-pills-profile2-tab" data-bs-toggle="pill"
                                                data-bs-target="#v-pills-profile2" type="button" role="tab"
                                                aria-controls="v-pills-profile2" aria-selected="false">
                                                <div class="mm_d_cards">
                                                    <img class="img-fluid" src="images/chat-list1.png" alt="">
                                                    <div class="mdCard_content">
                                                    </div>
                                                </div>
                                                <div class="cli_content">
                                                    <p>Jane Doe</p>
                                                    <p><span>32 y.o</span></p>
                                                </div>
                                            </div>
                                        </div>
                                        <h2>Groups</h2>
                                        <div class="cl_item">
                                            <div class="cl_item_inner" id="v-pills-profile3-tab" data-bs-toggle="pill"
                                                data-bs-target="#v-pills-profile3" type="button" role="tab"
                                                aria-controls="v-pills-profile3" aria-selected="false">
                                                <div class="mm_d_cards">
                                                    <img class="img-fluid" src="images/chat-list1.png" alt="">
                                                    <div class="mdCard_content">
                                                    </div>
                                                </div>
                                                <div class="cli_content">
                                                    <p>Jane Doe</p>
                                                    <p><span>32 y.o</span></p>
                                                </div>
                                            </div>
                                            <div class="cl_item_inner" id="v-pills-profile4-tab" data-bs-toggle="pill"
                                                data-bs-target="#v-pills-profile4" type="button" role="tab"
                                                aria-controls="v-pills-profile4" aria-selected="false">
                                                <div class="mm_d_cards">
                                                    <img class="img-fluid" src="images/chat-list1.png" alt="">
                                                    <div class="mdCard_content">
                                                    </div>
                                                </div>
                                                <div class="cli_content">
                                                    <p>Jane Doe</p>
                                                    <p><span>32 y.o</span></p>
                                                </div>
                                            </div>
                                            <div class="cl_item_inner" id="v-pills-profile5-tab" data-bs-toggle="pill"
                                                data-bs-target="#v-pills-profile5" type="button" role="tab"
                                                aria-controls="v-pills-profile5" aria-selected="false">
                                                <div class="mm_d_cards">
                                                    <img class="img-fluid" src="images/chat-list1.png" alt="">
                                                    <div class="mdCard_content">
                                                    </div>
                                                </div>
                                                <div class="cli_content">
                                                    <p>Jane Doe</p>
                                                    <p><span>32 y.o</span></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-9 ps-4">
                                    <div class="chat-right" id="v-pills-tabContent">

                                        <div class="chat-right-scroll fade show active" id="v-pills-profile"
                                            role="tabpanel" aria-labelledby="v-pills-profile-tab">
                                            <div class="cr-1 d-flex align-items-center">
                                                <div class="d-flex gap-3 align-items-center">
                                                    <img src="images/pic2.svg" alt="">
                                                    <h3>Mario Dunkin</h3>
                                                </div>
                                                <!-- <div class="cr_1_n">
                                                    <h4><span>Project Manager</span></h4>
                                                    <h2>-</h2>
                                                    <h4><span>New York, NY - United States</span></h4>
                                                </div> -->
                                            </div>
                                            <div class="cr-2-desc">
                                                <div class="cr-2">
                                                    <img src="images/pic2.svg" alt="">
                                                    <p>Pharetra convallis posuere morbi leo. Vestibulum lectus mauris
                                                        ultrices eros in.
                                                        Lobortis
                                                        elementum nibh tellus molestie nunc. Libero nunc consequat
                                                        interdum varius sit
                                                        amet
                                                        mattis vulputate. Duis at consectetur lorem donec massa. Eget
                                                        nulla facilisi
                                                        etiam
                                                        dignissim diam quis enim lobortis condimentum lacinia quis.</p>
                                                </div>
                                                <div class="cr-2 flex-row-reverse text-end">
                                                    <img src="images/pic2.svg" alt="">
                                                    <p>Pharetra convallis posuere morbi leo. Vestibulum lectus mauris
                                                        ultrices eros in.
                                                        Lobortis elementum nibh tellus molestie nunc. Libero nunc
                                                        consequat interdum
                                                        varius
                                                        sit amet
                                                        mattis vulputate. Duis at consectetur lorem donec massa. Eget
                                                        nulla facilisi
                                                        etiam
                                                        dignissim diam quis enim lobortis condimentum lacinia quis.
                                                    </p>
                                                </div>
                                                <div class="cr-2">
                                                    <img src="images/pic2.svg" alt="">
                                                    <p>Pharetra convallis posuere morbi leo. Vestibulum lectus mauris
                                                        ultrices eros in.
                                                        Lobortis
                                                        elementum nibh tellus molestie nunc. Libero nunc consequat
                                                        interdum varius sit
                                                        amet
                                                        mattis vulputate. Duis at consectetur lorem donec massa. Eget
                                                        nulla facilisi
                                                        etiam
                                                        dignissim diam quis enim lobortis condimentum lacinia quis.</p>
                                                </div>
                                                <div class="cr-2 flex-row-reverse text-end">
                                                    <img src="images/pic2.svg" alt="">
                                                    <p>Pharetra convallis posuere morbi leo. Vestibulum lectus mauris
                                                        ultrices eros in.
                                                        Lobortis elementum nibh tellus molestie nunc. Libero nunc
                                                        consequat interdum
                                                        varius
                                                        sit amet
                                                        mattis vulputate. Duis at consectetur lorem donec massa. Eget
                                                        nulla facilisi
                                                        etiam
                                                        dignissim diam quis enim lobortis condimentum lacinia quis.
                                                    </p>
                                                </div>
                                                <div class="cr-2">
                                                    <img src="images/pic2.svg" alt="">
                                                    <p>Pharetra convallis posuere morbi leo. Vestibulum lectus mauris
                                                        ultrices eros in.
                                                        Lobortis
                                                        elementum nibh tellus molestie nunc. Libero nunc consequat
                                                        interdum varius sit
                                                        amet
                                                        mattis vulputate. Duis at consectetur lorem donec massa. Eget
                                                        nulla facilisi
                                                        etiam
                                                        dignissim diam quis enim lobortis condimentum lacinia quis.</p>
                                                </div>
                                                <div class="cr-2 flex-row-reverse text-end">
                                                    <img src="images/pic2.svg" alt="">
                                                    <p>Pharetra convallis posuere morbi leo. Vestibulum lectus mauris
                                                        ultrices eros in.
                                                        Lobortis elementum nibh tellus molestie nunc. Libero nunc
                                                        consequat interdum
                                                        varius
                                                        sit amet
                                                        mattis vulputate. Duis at consectetur lorem donec massa. Eget
                                                        nulla facilisi
                                                        etiam
                                                        dignissim diam quis enim lobortis condimentum lacinia quis.
                                                    </p>
                                                </div>
                                                <div class="cr-2">
                                                    <img src="images/pic2.svg" alt="">
                                                    <p>Pharetra convallis posuere morbi leo. Vestibulum lectus mauris
                                                        ultrices eros in.
                                                        Lobortis
                                                        elementum nibh tellus molestie nunc. Libero nunc consequat
                                                        interdum varius sit
                                                        amet
                                                        mattis vulputate. Duis at consectetur lorem donec massa. Eget
                                                        nulla facilisi
                                                        etiam
                                                        dignissim diam quis enim lobortis condimentum lacinia quis.</p>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="chat-right-scroll fade" id="v-pills-profile1" role="tabpanel"
                                            aria-labelledby="v-pills-profile1-tab">
                                            <div class="cr-1 d-flex align-items-center">
                                                <div class="d-flex gap-3 align-items-center">
                                                    <img src="images/pic2.svg" alt="">
                                                    <h3>Jan Doe</h3>
                                                </div>
                                                <!-- <div class="cr_1_n">
                                                    <h4><span>Project Manager</span></h4>
                                                    <h2>-</h2>
                                                    <h4><span>New York, NY - United States</span></h4>
                                                </div> -->
                                            </div>
                                            <div class="cr-2-desc">
                                                <div class="cr-2">
                                                    <img src="images/pic2.svg" alt="">
                                                    <p>Pharetra convallis posuere morbi leo. Vestibulum lectus mauris
                                                        ultrices eros in.
                                                        Lobortis
                                                        elementum nibh tellus molestie nunc. Libero nunc consequat
                                                        interdum varius sit
                                                        amet
                                                        mattis vulputate. Duis at consectetur lorem donec massa. Eget
                                                        nulla facilisi
                                                        etiam
                                                        dignissim diam quis enim lobortis condimentum lacinia quis.</p>
                                                </div>
                                                <div class="cr-2 flex-row-reverse text-end">
                                                    <img src="images/pic2.svg" alt="">
                                                    <p>Pharetra convallis posuere morbi leo. Vestibulum lectus mauris
                                                        ultrices eros in.
                                                        Lobortis elementum nibh tellus molestie nunc. Libero nunc
                                                        consequat interdum
                                                        varius
                                                        sit amet
                                                        mattis vulputate. Duis at consectetur lorem donec massa. Eget
                                                        nulla facilisi
                                                        etiam
                                                        dignissim diam quis enim lobortis condimentum lacinia quis.
                                                    </p>
                                                </div>
                                                <div class="cr-2">
                                                    <img src="images/pic2.svg" alt="">
                                                    <p>Pharetra convallis posuere morbi leo. Vestibulum lectus mauris
                                                        ultrices eros in.
                                                        Lobortis
                                                        elementum nibh tellus molestie nunc. Libero nunc consequat
                                                        interdum varius sit
                                                        amet
                                                        mattis vulputate. Duis at consectetur lorem donec massa. Eget
                                                        nulla facilisi
                                                        etiam
                                                        dignissim diam quis enim lobortis condimentum lacinia quis.</p>
                                                </div>
                                                <div class="cr-2 flex-row-reverse text-end">
                                                    <img src="images/pic2.svg" alt="">
                                                    <p>Pharetra convallis posuere morbi leo. Vestibulum lectus mauris
                                                        ultrices eros in.
                                                        Lobortis elementum nibh tellus molestie nunc. Libero nunc
                                                        consequat interdum
                                                        varius
                                                        sit amet
                                                        mattis vulputate. Duis at consectetur lorem donec massa. Eget
                                                        nulla facilisi
                                                        etiam
                                                        dignissim diam quis enim lobortis condimentum lacinia quis.
                                                    </p>
                                                </div>
                                                <div class="cr-2">
                                                    <img src="images/pic2.svg" alt="">
                                                    <p>Pharetra convallis posuere morbi leo. Vestibulum lectus mauris
                                                        ultrices eros in.
                                                        Lobortis
                                                        elementum nibh tellus molestie nunc. Libero nunc consequat
                                                        interdum varius sit
                                                        amet
                                                        mattis vulputate. Duis at consectetur lorem donec massa. Eget
                                                        nulla facilisi
                                                        etiam
                                                        dignissim diam quis enim lobortis condimentum lacinia quis.</p>
                                                </div>
                                                <div class="cr-2 flex-row-reverse text-end">
                                                    <img src="images/pic2.svg" alt="">
                                                    <p>Pharetra convallis posuere morbi leo. Vestibulum lectus mauris
                                                        ultrices eros in.
                                                        Lobortis elementum nibh tellus molestie nunc. Libero nunc
                                                        consequat interdum
                                                        varius
                                                        sit amet
                                                        mattis vulputate. Duis at consectetur lorem donec massa. Eget
                                                        nulla facilisi
                                                        etiam
                                                        dignissim diam quis enim lobortis condimentum lacinia quis.
                                                    </p>
                                                </div>
                                                <div class="cr-2">
                                                    <img src="images/pic2.svg" alt="">
                                                    <p>Pharetra convallis posuere morbi leo. Vestibulum lectus mauris
                                                        ultrices eros in.
                                                        Lobortis
                                                        elementum nibh tellus molestie nunc. Libero nunc consequat
                                                        interdum varius sit
                                                        amet
                                                        mattis vulputate. Duis at consectetur lorem donec massa. Eget
                                                        nulla facilisi
                                                        etiam
                                                        dignissim diam quis enim lobortis condimentum lacinia quis.</p>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="chat-right-scroll fade" id="v-pills-profile2" role="tabpanel"
                                            aria-labelledby="v-pills-profile2-tab">
                                            <div class="cr-1 d-flex align-items-center">
                                                <div class="d-flex gap-3 align-items-center">
                                                    <img src="images/pic2.svg" alt="">
                                                    <h3>Jan D</h3>
                                                </div>
                                                <!-- <div class="cr_1_n">
                                                    <h4><span>Project Manager</span></h4>
                                                    <h2>-</h2>
                                                    <h4><span>New York, NY - United States</span></h4>
                                                </div> -->
                                            </div>
                                            <div class="cr-2-desc">
                                                <div class="cr-2">
                                                    <img src="images/pic2.svg" alt="">
                                                    <p>Pharetra convallis posuere morbi leo. Vestibulum lectus mauris
                                                        ultrices eros in.
                                                        Lobortis
                                                        elementum nibh tellus molestie nunc. Libero nunc consequat
                                                        interdum varius sit
                                                        amet
                                                        mattis vulputate. Duis at consectetur lorem donec massa. Eget
                                                        nulla facilisi
                                                        etiam
                                                        dignissim diam quis enim lobortis condimentum lacinia quis.</p>
                                                </div>
                                                <div class="cr-2 flex-row-reverse text-end">
                                                    <img src="images/pic2.svg" alt="">
                                                    <p>Pharetra convallis posuere morbi leo. Vestibulum lectus mauris
                                                        ultrices eros in.
                                                        Lobortis elementum nibh tellus molestie nunc. Libero nunc
                                                        consequat interdum
                                                        varius
                                                        sit amet
                                                        mattis vulputate. Duis at consectetur lorem donec massa. Eget
                                                        nulla facilisi
                                                        etiam
                                                        dignissim diam quis enim lobortis condimentum lacinia quis.
                                                    </p>
                                                </div>
                                                <div class="cr-2">
                                                    <img src="images/pic2.svg" alt="">
                                                    <p>Pharetra convallis posuere morbi leo. Vestibulum lectus mauris
                                                        ultrices eros in.
                                                        Lobortis
                                                        elementum nibh tellus molestie nunc. Libero nunc consequat
                                                        interdum varius sit
                                                        amet
                                                        mattis vulputate. Duis at consectetur lorem donec massa. Eget
                                                        nulla facilisi
                                                        etiam
                                                        dignissim diam quis enim lobortis condimentum lacinia quis.</p>
                                                </div>
                                                <div class="cr-2 flex-row-reverse text-end">
                                                    <img src="images/pic2.svg" alt="">
                                                    <p>Pharetra convallis posuere morbi leo. Vestibulum lectus mauris
                                                        ultrices eros in.
                                                        Lobortis elementum nibh tellus molestie nunc. Libero nunc
                                                        consequat interdum
                                                        varius
                                                        sit amet
                                                        mattis vulputate. Duis at consectetur lorem donec massa. Eget
                                                        nulla facilisi
                                                        etiam
                                                        dignissim diam quis enim lobortis condimentum lacinia quis.
                                                    </p>
                                                </div>
                                                <div class="cr-2">
                                                    <img src="images/pic2.svg" alt="">
                                                    <p>Pharetra convallis posuere morbi leo. Vestibulum lectus mauris
                                                        ultrices eros in.
                                                        Lobortis
                                                        elementum nibh tellus molestie nunc. Libero nunc consequat
                                                        interdum varius sit
                                                        amet
                                                        mattis vulputate. Duis at consectetur lorem donec massa. Eget
                                                        nulla facilisi
                                                        etiam
                                                        dignissim diam quis enim lobortis condimentum lacinia quis.</p>
                                                </div>
                                                <div class="cr-2 flex-row-reverse text-end">
                                                    <img src="images/pic2.svg" alt="">
                                                    <p>Pharetra convallis posuere morbi leo. Vestibulum lectus mauris
                                                        ultrices eros in.
                                                        Lobortis elementum nibh tellus molestie nunc. Libero nunc
                                                        consequat interdum
                                                        varius
                                                        sit amet
                                                        mattis vulputate. Duis at consectetur lorem donec massa. Eget
                                                        nulla facilisi
                                                        etiam
                                                        dignissim diam quis enim lobortis condimentum lacinia quis.
                                                    </p>
                                                </div>
                                                <div class="cr-2">
                                                    <img src="images/pic2.svg" alt="">
                                                    <p>Pharetra convallis posuere morbi leo. Vestibulum lectus mauris
                                                        ultrices eros in.
                                                        Lobortis
                                                        elementum nibh tellus molestie nunc. Libero nunc consequat
                                                        interdum varius sit
                                                        amet
                                                        mattis vulputate. Duis at consectetur lorem donec massa. Eget
                                                        nulla facilisi
                                                        etiam
                                                        dignissim diam quis enim lobortis condimentum lacinia quis.</p>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="chat-right-scroll fade" id="v-pills-profile3" role="tabpanel"
                                            aria-labelledby="v-pills-profile3-tab">
                                            <div class="cr-1 d-flex align-items-center justify-content-between">
                                                <div class="d-flex gap-3 align-items-center">
                                                    <!-- <img src="images/pic2.svg" alt=""> -->
                                                    <h3>Group 1</h3>
                                                    <h3><span>28 Members</span></h3>
                                                </div>
                                                <div class="d-flex align-items-center gap-2">
                                                   <img class="img-fluid" src="images/pic2.svg" alt="">
                                                   <img class="img-fluid" src="images/pic2.svg" alt="">
                                                   <img class="img-fluid" src="images/pic2.svg" alt="">
                                                   <h3><span>More</span></h3>
                                                </div>
                                                <!-- <div class="cr_1_n">
                                                    <h4><span>Project Manager</span></h4>
                                                    <h2>-</h2>
                                                    <h4><span>New York, NY - United States</span></h4>
                                                </div> -->
                                            </div>
                                            <div class="cr-2-desc">
                                                <div class="cr-2">
                                                    <img src="images/pic2.svg" alt="">
                                                    <p>Pharetra convallis posuere morbi leo. Vestibulum lectus mauris
                                                        ultrices eros in.
                                                        Lobortis
                                                        elementum nibh tellus molestie nunc. Libero nunc consequat
                                                        interdum varius sit
                                                        amet
                                                        mattis vulputate. Duis at consectetur lorem donec massa. Eget
                                                        nulla facilisi
                                                        etiam
                                                        dignissim diam quis enim lobortis condimentum lacinia quis.</p>
                                                </div>
                                                <div class="cr-2 flex-row-reverse text-end">
                                                    <img src="images/pic2.svg" alt="">
                                                    <p>Pharetra convallis posuere morbi leo. Vestibulum lectus mauris
                                                        ultrices eros in.
                                                        Lobortis elementum nibh tellus molestie nunc. Libero nunc
                                                        consequat interdum
                                                        varius
                                                        sit amet
                                                        mattis vulputate. Duis at consectetur lorem donec massa. Eget
                                                        nulla facilisi
                                                        etiam
                                                        dignissim diam quis enim lobortis condimentum lacinia quis.
                                                    </p>
                                                </div>
                                                <div class="cr-2">
                                                    <img src="images/pic2.svg" alt="">
                                                    <p>Pharetra convallis posuere morbi leo. Vestibulum lectus mauris
                                                        ultrices eros in.
                                                        Lobortis
                                                        elementum nibh tellus molestie nunc. Libero nunc consequat
                                                        interdum varius sit
                                                        amet
                                                        mattis vulputate. Duis at consectetur lorem donec massa. Eget
                                                        nulla facilisi
                                                        etiam
                                                        dignissim diam quis enim lobortis condimentum lacinia quis.</p>
                                                </div>
                                                <div class="cr-2 flex-row-reverse text-end">
                                                    <img src="images/pic2.svg" alt="">
                                                    <p>Pharetra convallis posuere morbi leo. Vestibulum lectus mauris
                                                        ultrices eros in.
                                                        Lobortis elementum nibh tellus molestie nunc. Libero nunc
                                                        consequat interdum
                                                        varius
                                                        sit amet
                                                        mattis vulputate. Duis at consectetur lorem donec massa. Eget
                                                        nulla facilisi
                                                        etiam
                                                        dignissim diam quis enim lobortis condimentum lacinia quis.
                                                    </p>
                                                </div>
                                                <div class="cr-2">
                                                    <img src="images/pic2.svg" alt="">
                                                    <p>Pharetra convallis posuere morbi leo. Vestibulum lectus mauris
                                                        ultrices eros in.
                                                        Lobortis
                                                        elementum nibh tellus molestie nunc. Libero nunc consequat
                                                        interdum varius sit
                                                        amet
                                                        mattis vulputate. Duis at consectetur lorem donec massa. Eget
                                                        nulla facilisi
                                                        etiam
                                                        dignissim diam quis enim lobortis condimentum lacinia quis.</p>
                                                </div>
                                                <div class="cr-2 flex-row-reverse text-end">
                                                    <img src="images/pic2.svg" alt="">
                                                    <p>Pharetra convallis posuere morbi leo. Vestibulum lectus mauris
                                                        ultrices eros in.
                                                        Lobortis elementum nibh tellus molestie nunc. Libero nunc
                                                        consequat interdum
                                                        varius
                                                        sit amet
                                                        mattis vulputate. Duis at consectetur lorem donec massa. Eget
                                                        nulla facilisi
                                                        etiam
                                                        dignissim diam quis enim lobortis condimentum lacinia quis.
                                                    </p>
                                                </div>
                                                <div class="cr-2">
                                                    <img src="images/pic2.svg" alt="">
                                                    <p>Pharetra convallis posuere morbi leo. Vestibulum lectus mauris
                                                        ultrices eros in.
                                                        Lobortis
                                                        elementum nibh tellus molestie nunc. Libero nunc consequat
                                                        interdum varius sit
                                                        amet
                                                        mattis vulputate. Duis at consectetur lorem donec massa. Eget
                                                        nulla facilisi
                                                        etiam
                                                        dignissim diam quis enim lobortis condimentum lacinia quis.</p>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="msg-area">
                                            <form action="javascript:;">
                                                <!-- <label>Write a message</label> -->
                                                <textarea name="" id="" placeholder="Write a message"
                                                    rows="1"></textarea>
                                                <div class=" my-2 d-flex align-items-center justify-content-between">
                                                    <div class="d-flex align-items-center gap-4">
                                                        <i class="fa-solid fa-paperclip"></i>
                                                        <i class="fa-solid fa-image"></i>
                                                        <i class="fa-regular fa-face-smile"></i>
                                                    </div>
                                                    <button class="theme-btn3 btn ">Send</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
include 'includes/footer.php';
$page = 'dashboard';
?>

<script>
AOS.init({
    once: true,
});
</script>