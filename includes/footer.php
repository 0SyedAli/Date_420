<footer>
    <div class="fm_gradient"></div>
    <div class="container">
        <div class="footer_main">
            <div class="row">
                <div class="col-6 d-flex align-items-end" data-aos="fade-up" data-aos-duration="3000">
                    <div class="mt-3">
                        <div class="foot-logo">
                            <img class="img-fluid" src="images/foot-logo.png" alt="">
                        </div>
                        <!-- <div class="multi_search_field">
                        <form action="javascript:;">
                            <div class="ms-field">
                                <div class="ms-search">
                                    <i class="fa-light fa-magnifying-glass"></i>
                                    <input type="email" placeholder="Email Address">
                                </div>
                            </div>
                            <button class="btn btn-theme2" type="submit">Subcribe</button>
                        </form>
                    </div> -->
                        <div class="foot1">
                            <h4>Enjoy the Highs in Life...</h4>
                            <!-- <div class="d-flex align-items-start">
                            <ul>
                                <li>
                                    <h5>Contact Us</h5>
                                </li>
                                <li>info@date420friendly.com</li>
                                <li>+012-324-545-66</li>
                            </ul>
                            <ul class="f1_ul2">
                                <li>
                                    <h5>Location</h5>
                                </li>
                                <li>St. Gangnam Uhuy, 8329 NYC</li>
                            </ul>
                        </div> -->
                        </div>
                    </div>
                </div>
                <div class="col-6" data-aos="fade-left" data-aos-duration="3000">
                    <div class="row">
                        <div class="col-5">
                            <ul>
                                <li class="p-0">
                                    <h4><span>Links</span></h4>
                                </li>
                                <li><a href="matchmaking.php">Hotlist</a></li>
                                <li><a href="dashboard_matches.php">My Matches</a></li>
                                <li><a href="dashboard_search.php">Search</a></li>
                            </ul>
                        </div>
                        <div class="col-4">
                            <ul>
                                <li class="p-0">
                                    <h4><span>Plan</span></h4>
                                </li>
                                <li><a href="dashboard_subcription.php">Subscription</a></li>
                                <li><a href="javascript:;">Events</a></li>
                                <li><a href="javascript:;">Blogs</a></li>
                            </ul>
                        </div>
                        <div class="col-3">
                            <ul>
                                <li class="p-0">
                                    <h4><span>Connections</span></h4>
                                </li>
                                <li><a href="javascript:;">Chat</a></li>
                                <li><a href="dashboard_group.php">Groups</a></li>
                                <li><a href="my-preference.php">My Preferences</a></li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<section>
    <div class="container">
        <div class="copy-write">
            <p>© 2024 Date420Friendly. All Rights Reserved. </p>
        </div>
    </div>
</section>

<div class="modal fade p-0" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog login_dialog">
        <div class="modal-content login_modal">
            <div class="login-gradient-top"></div>
            <div class="modal-body">
                <h3>Login</h3>
                <p>Lorem ipsum dolor sit amet consectetur. Posuere mollis
                    cursus elit cum at pellentesque vestibulum libero.</p>
                <form action="dashboard.php">
                    <input type="text" placeholder="User name">
                    <input type="password" placeholder="Password">
                    <button class="btn btn-theme2">Login</button>
                    <h6><span>Don't have an account? <a href="javascript:;">Signup</a></span></h6>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade p-0 " id="groups_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog login_dialog groups_dialog">
        <div class="modal-content login_modal">
            <div class="login-gradient-top"></div>
            <div class="modal-body">
                <h3>Please Subscribe To View This Profile</h3>
                <form action="register.php">
                    <button class="btn btn-theme2">Subscribe</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script src="js/jquery-3.6.3.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/aos.js"></script>
<script src="js/fancybox.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="https://cdn.ckeditor.com/ckeditor5/40.1.0/classic/ckeditor.js"></script>
<script type="text/javascript" src="js/slick.js"></script>
<script src="js/custom.js"></script>


<script>
document.addEventListener('DOMContentLoaded', function() {
    document.querySelectorAll('.myForm').forEach(form => {
        form.addEventListener('submit', function(event) {
            event.preventDefault();
            let allFieldsFilled = true;
            form.querySelectorAll(
                    'input[type="text"], input[type="email"], input[type="password"]')
                .forEach(input => {
                    const emptyField = input.parentNode.querySelector('.empty_field');
                    if (emptyField) {
                        emptyField.style.display = input.value.trim() === '' ? 'block' :
                            'none';
                        if (input.value.trim() === '') allFieldsFilled = false;
                    }
                });
            if (allFieldsFilled) form.submit();
        });
    });
});
</script>

</body>

</html>