<?php
$page = 'Home';
$pageDesc = '""';
include 'includes/header_dash.php';
$page = 'home';
?>
<section class="marketing_section nav-search">
    <div class="container">
        <h2 class="mb-4">Marketing</h2>
        <form action="my-profile.php">
            <div class='table-sm-responsive'>
                <table class="table table-borderless">
                    <tbody>
                        <tr>
                            <td>
                                <h4>Looking For</h4>
                            </td>
                            <td>
                                <select name="sources" class="custom-select sources" placeholder="Female">
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
                                <div class='custom-checkbox empt'>
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
                                <div class='custom-checkbox empt'>
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
                                    <select name="sources" class="custom-select sources" placeholder="32">
                                        <option selected>32</option>
                                        <option value="1">30</option>
                                        <option value="1">30</option>
                                        <option value="1">30</option>
                                        <option value="1">30</option>
                                    </select>
                                </div>
                                <p class="px-3">to</p>
                                <div>
                                    <select name="sources" class="custom-select sources" placeholder="52">
                                        <option selected>32</option>
                                        <option value="1">30</option>
                                        <option value="1">30</option>
                                        <option value="1">30</option>
                                        <option value="1">30</option>
                                    </select>
                                </div>
                            </td>
                            <!-- <td class='d-flex form_gender'>
                                                <select class="form-select " aria-label="Default select example">
                                                    <option selected="">32</option>
                                                    <option value="1">33</option>
                                                </select>
                                                <span>to</span>
                                                <select class="form-select " aria-label="Default select example">
                                                    <option selected="">52</option>
                                                    <option value="1">52</option>
                                                </select>
                                            </td> -->
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
                                            <input type="radio" id="test3" name="radio-group" checked="">
                                            <label for="test3">African</label>
                                        </div>
                                        <div>
                                            <input type="radio" id="test4" name="radio-group">
                                            <label for="test4">Arab</label>
                                        </div>
                                        <div>
                                            <input type="radio" id="test5" name="radio-group">
                                            <label for="test5">Caucasian(white)</label>
                                        </div>
                                        <div>
                                            <input type="radio" id="test6" name="radio-group">
                                            <label for="test6">Indian</label>
                                        </div>
                                        <div>
                                            <input type="radio" id="test7" name="radio-group">
                                            <label for="test7">Native American</label>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-4">
                                        <div>
                                            <input type="radio" id="test8" name="radio-group">
                                            <label for="test8">African American</label>
                                        </div>
                                        <div>
                                            <input type="radio" id="test9" name="radio-group">
                                            <label for="test9">Asian</label>
                                        </div>
                                        <div>
                                            <input type="radio" id="test10" name="radio-group">
                                            <label for="test10">Hispanic</label>
                                        </div>
                                        <div>
                                            <input type="radio" id="test11" name="radio-group">
                                            <label for="test11">Mixed</label>
                                        </div>
                                        <div>
                                            <input type="radio" id="test12" name="radio-group">
                                            <label for="test12">Other</label>
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
                                            <input type="radio" id="test13" name="radio-group">
                                            <label for="test13">Slim</label>
                                        </div>
                                        <div>
                                            <input type="radio" id="test14" name="radio-group">
                                            <label for="test14">Average</label>
                                        </div>
                                        <div>
                                            <input type="radio" id="test15" name="radio-group">
                                            <label for="test15">Athletic</label>
                                        </div>
                                        <div>
                                            <input type="radio" id="test16" name="radio-group">
                                            <label for="test16">A little Plump</label>
                                        </div>
                                        <div>
                                            <input type="radio" id="test17" name="radio-group">
                                            <label for="test17">Big and Lovely</label>
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
                                            <input type="radio" id="test18" name="radio-group">
                                            <label for="test18">Blond</label>
                                        </div>
                                        <div>
                                            <input type="radio" id="test19" name="radio-group">
                                            <label for="test19">Brown</label>
                                        </div>
                                        <div>
                                            <input type="radio" id="test20" name="radio-group">
                                            <label for="test20">Red</label>
                                        </div>
                                        <div>
                                            <input type="radio" id="test21" name="radio-group">
                                            <label for="test21">Black</label>
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
                                            <input type="radio" id="test22" name="radio-group">
                                            <label for="test22">Amber</label>
                                        </div>
                                        <div>
                                            <input type="radio" id="test23" name="radio-group">
                                            <label for="test23">Brown</label>
                                        </div>
                                        <div>
                                            <input type="radio" id="test24" name="radio-group">
                                            <label for="test24">Green</label>
                                        </div>
                                        <div>
                                            <input type="radio" id="test25" name="radio-group">
                                            <label for="test25">Other</label>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-4">
                                        <div>
                                            <input type="radio" id="test26" name="radio-group">
                                            <label for="test26">Blue</label>
                                        </div>
                                        <div>
                                            <input type="radio" id="test27" name="radio-group">
                                            <label for="test27">Gray</label>
                                        </div>
                                        <div>
                                            <input type="radio" id="test28" name="radio-group">
                                            <label for="test28">Hazel</label>
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
                                            <input type="radio" id="test29" name="radio-group">
                                            <label for="test29">Never</label>
                                        </div>
                                        <div>
                                            <input type="radio" id="test30" name="radio-group">
                                            <label for="test30">Rarely</label>
                                        </div>
                                        <div>
                                            <input type="radio" id="test31" name="radio-group">
                                            <label for="test31">Often</label>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-4">
                                        <div>
                                            <input type="radio" id="test32" name="radio-group">
                                            <label for="test32">Quit</label>
                                        </div>
                                        <div>
                                            <input type="radio" id="test33" name="radio-group">
                                            <label for="test33">Socially</label>
                                        </div>
                                        <div>
                                            <input type="radio" id="test34" name="radio-group">
                                            <label for="test34">Very Often</label>
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
                                            <input type="radio" id="test35" name="radio-group">
                                            <label for="test35">Never</label>
                                        </div>
                                        <div>
                                            <input type="radio" id="test36" name="radio-group">
                                            <label for="test36">Rarely</label>
                                        </div>
                                        <div>
                                            <input type="radio" id="test37" name="radio-group">
                                            <label for="test37">Often</label>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-4">
                                        <div>
                                            <input type="radio" id="test38" name="radio-group">
                                            <label for="test38">Quit</label>
                                        </div>
                                        <div>
                                            <input type="radio" id="test39" name="radio-group">
                                            <label for="test39">Socially</label>
                                        </div>
                                        <div>
                                            <input type="radio" id="test40" name="radio-group">
                                            <label for="test40">Very Often</label>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="d-flex justify-content-end align-items-center">
                    <button class="btn btn-theme2 d-flex align-items-center gap-2">Sumbit<i
                            class="fa-solid fa-arrow-right"></i></button>
                </div>
            </div>
        </form>
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