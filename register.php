<?php
$page = 'Home';
$pageDesc = '""';
include 'includes/header.php';
$page = 'home';
?>

<section class="hero-section-register">
    <div class="hs1">
        <div class="container">
            <div class="row">
                <div class="col-7">
                    <div class="hs-logo">
                        <a href="index.php">
                            <!-- <img class="img-fluid" src="images/logo.png" alt=""> -->
                        </a>
                    </div>

                </div>
                <div class="col-5 p-0">
                    <div class="hs-right">
                        <img class="img-fluid" src="images/regis.png" alt="">
                        <h2>Join For Free</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="register_body">
    <div class="container">
        <h4>Join our fast-growing community. Find new friends, date up, share photo and video Enjoy!</h4>
        <div class="col-12">
            <div class="regis_form">
                <form class="myForm" action="register2.php">
                    <h2>Register your profile</h2>
                    <div class="form-control">
                        <input type="text" name="username" placeholder="Username">
                        <p class="empty_field">Should contain only latin letters and digits</p>
                    </div>
                    <div class="form-control">
                        <input type="email" placeholder="Email">
                        <p class="empty_field">Should be valid</p>
                    </div>
                    <div class="form-control">
                        <input type="text" placeholder="Password">
                    </div>
                    <div class="form-control">
                        <input type="text" placeholder="Repeat Password">
                    </div>
                    <div class="form-control regis_last d-flex">
                        <div class="form_gender">
                            <label for="">Gender</label>
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Male</option>
                                <option value="1">Female</option>
                            </select>
                        </div>
                        <button type="submit" class="btn-theme2">Continue<i
                                class="fa-solid fa-arrow-right-long"></i></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<?php
include 'includes/footer.php';
$page = 'home';
?>

<script>
    AOS.init({
            once: true,
        });
</script>