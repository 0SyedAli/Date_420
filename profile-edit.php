<?php
$page = 'Home';
$pageDesc = '""';
include 'includes/header_dash.php';
$page = 'home';
?>
<section class="edit-profile nav-search">
    <div class="container">
        <div class="row">
            <div class="col-12 photo_dashboard">
                <h2>Profile Edit</h2>
                <div class="row">
                    <div class="col-6">
                        <div class="ep_top d-flex align-items-end gap-3">
                            <div id="imageContainer">
                                <img class="img-fluid" src="images/profile_1.png" alt="">
                            </div>
                            <div class="file_upload_regis">
                                <input class="form-control formFile" type="file" id="formFile2" accept="image/*">
                                <label>
                                    <a href="javascript:;" class="btn-theme2">Choose file</a>
                                    <h6>No File Chosen</h6>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <form action="my-profile.php">
                    <div class='table-sm-responsive'>
                        <table class="table table-borderless">
                            <tbody>
                                <tr>
                                    <td>
                                        <h4>Looking For</h4>
                                    </td>
                                    <td class="pkg_dash appear_dash">
                                        <div class="row">
                                            <div class="col-12 col-lg-4">
                                                <div>
                                                    <input type="radio" id="test311" name="radio-group" checked="">
                                                    <label for="test311">Male</label>
                                                </div>
                                                <div>
                                                    <input type="radio" id="test312" name="radio-group">
                                                    <label for="test312">Female</label>
                                                </div>
                                            </div>

                                        </div>
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
                            <button class="btn btn-theme2 d-flex align-items-center gap-2">Submit<i
                                    class="fa-solid fa-arrow-right"></i></button>
                        </div>
                    </div>
                </form>
                <!-- <form action="my-profile.php">
                    <div class='table-sm-responsive'>
                        <table class="table table-borderless">
                            <tbody>
                                <tr>
                                    <td>
                                        <h4>Email</h4>
                                    </td>
                                    <td class="ed">
                                        <div class="edit_pen">
                                            <p>email.address.com</p>
                                            <a href="javascript:;" class="e_pen"><i class="fa-thin fa-pencil"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h4>Real Name</h4>
                                    </td>
                                    <td class="ed">
                                        <div class="edit_pen">
                                            <p>Kaden Salazar</p>
                                            <a href="javascript:;" class="e_pen"><i class="fa-thin fa-pencil"></i></a>
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
                                            <label for="">Male</label>
                                        </div>
                                        <div class='custom-checkbox'>
                                            <input type="checkbox">
                                            <label for="">Female</label>
                                        </div>
                                    </td>
                                </tr>
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
                                    <td>
                                        <p>13, June 1980</p>
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
                                    <td>
                                        <div class="row">
                                            <div class="col-12 col-lg-4">
                                                <div class='custom-checkbox'>
                                                    <input type="checkbox">
                                                    <label for="">African</label>
                                                </div>
                                                <div class='custom-checkbox'>
                                                    <input type="checkbox">
                                                    <label for="">Arab</label>
                                                </div>
                                                <div class='custom-checkbox'>
                                                    <input type="checkbox">
                                                    <label for="">Caucasian(white)</label>
                                                </div>
                                                <div class='custom-checkbox'>
                                                    <input type="checkbox">
                                                    <label for="">Indian</label>
                                                </div>
                                                <div class='custom-checkbox'>
                                                    <input type="checkbox">
                                                    <label for="">Native American</label>
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-4">
                                                <div class='custom-checkbox'>
                                                    <input type="checkbox">
                                                    <label for="">African American</label>
                                                </div>
                                                <div class='custom-checkbox'>
                                                    <input type="checkbox">
                                                    <label for="">Asian</label>
                                                </div>
                                                <div class='custom-checkbox'>
                                                    <input type="checkbox">
                                                    <label for="">Hispanic</label>
                                                </div>
                                                <div class='custom-checkbox'>
                                                    <input type="checkbox">
                                                    <label for="">Mixed</label>
                                                </div>
                                                <div class='custom-checkbox'>
                                                    <input type="checkbox">
                                                    <label for="">Other</label>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h4>Body Type</h4>
                                    </td>
                                    <td>
                                        <div class="row">
                                            <div class="col-12 col-lg-4">
                                                <div class='custom-checkbox'>
                                                    <input type="checkbox">
                                                    <label for="">Slim</label>
                                                </div>
                                                <div class='custom-checkbox'>
                                                    <input type="checkbox">
                                                    <label for="">Average</label>
                                                </div>
                                                <div class='custom-checkbox'>
                                                    <input type="checkbox">
                                                    <label for="">Athletic</label>
                                                </div>
                                                <div class='custom-checkbox'>
                                                    <input type="checkbox">
                                                    <label for="">A little Plump</label>
                                                </div>
                                                <div class='custom-checkbox'>
                                                    <input type="checkbox">
                                                    <label for="">Big and Lovely</label>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h4>Hair Color</h4>
                                    </td>
                                    <td>
                                        <div class="row">
                                            <div class="col-12 col-lg-4">
                                                <div class='custom-checkbox'>
                                                    <input type="checkbox">
                                                    <label for="">Blond</label>
                                                </div>
                                                <div class='custom-checkbox'>
                                                    <input type="checkbox">
                                                    <label for="">Brown</label>
                                                </div>
                                                <div class='custom-checkbox'>
                                                    <input type="checkbox">
                                                    <label for="">Red</label>
                                                </div>
                                                <div class='custom-checkbox'>
                                                    <input type="checkbox">
                                                    <label for="">Black</label>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h4>Eye Color</h4>
                                    </td>
                                    <td>
                                        <div class="row">
                                            <div class="col-12 col-lg-4">
                                                <div class='custom-checkbox'>
                                                    <input type="checkbox">
                                                    <label for="">Amber</label>
                                                </div>
                                                <div class='custom-checkbox'>
                                                    <input type="checkbox">
                                                    <label for="">Brown</label>
                                                </div>
                                                <div class='custom-checkbox'>
                                                    <input type="checkbox">
                                                    <label for="">Green</label>
                                                </div>
                                                <div class='custom-checkbox'>
                                                    <input type="checkbox">
                                                    <label for="">Other</label>
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-4">
                                                <div class='custom-checkbox'>
                                                    <input type="checkbox">
                                                    <label for="">Blue</label>
                                                </div>
                                                <div class='custom-checkbox'>
                                                    <input type="checkbox">
                                                    <label for="">Gray</label>
                                                </div>
                                                <div class='custom-checkbox'>
                                                    <input type="checkbox">
                                                    <label for="">Hazel</label>
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
                                    <td>
                                        <div class="row">
                                            <div class="col-12 col-lg-4">
                                                <div class='custom-checkbox'>
                                                    <input type="checkbox">
                                                    <label for="">Never</label>
                                                </div>
                                                <div class='custom-checkbox'>
                                                    <input type="checkbox">
                                                    <label for="">Rarely</label>
                                                </div>
                                                <div class='custom-checkbox'>
                                                    <input type="checkbox">
                                                    <label for="">Often</label>
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-4">
                                                <div class='custom-checkbox'>
                                                    <input type="checkbox">
                                                    <label for="">Quit</label>
                                                </div>
                                                <div class='custom-checkbox'>
                                                    <input type="checkbox">
                                                    <label for="">Socially</label>
                                                </div>
                                                <div class='custom-checkbox'>
                                                    <input type="checkbox">
                                                    <label for="">Very Often</label>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h4>Drinking</h4>
                                    </td>
                                    <td>
                                        <div class="row">
                                            <div class="col-12 col-lg-4">
                                                <div class='custom-checkbox'>
                                                    <input type="checkbox">
                                                    <label for="">Never</label>
                                                </div>
                                                <div class='custom-checkbox'>
                                                    <input type="checkbox">
                                                    <label for="">Rarely</label>
                                                </div>
                                                <div class='custom-checkbox'>
                                                    <input type="checkbox">
                                                    <label for="">Often</label>
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-4">
                                                <div class='custom-checkbox'>
                                                    <input type="checkbox">
                                                    <label for="">Quit</label>
                                                </div>
                                                <div class='custom-checkbox'>
                                                    <input type="checkbox">
                                                    <label for="">Socially</label>
                                                </div>
                                                <div class='custom-checkbox'>
                                                    <input type="checkbox">
                                                    <label for="">Very Often</label>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="d-flex justify-content-end align-items-center">
                            <button type="submit" class="btn btn-theme2 d-flex align-items-center gap-2">Submit<i
                                    class="fa-solid fa-arrow-right"></i></button>
                        </div>
                    </div>
                </form> -->
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