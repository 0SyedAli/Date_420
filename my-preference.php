<?php
$page = 'Home';
$pageDesc = '""';
include 'includes/header_dash.php';
$page = 'home';
?>
<section class="dashboard_section my_pref">
    <div class="container">
        <h2>My Preferences</h2>
        <div class="row">
            <div class="col-12">
                <nav class="my_pref_tabs">
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <button class="nav-link active" id="nav-general-tab" data-bs-toggle="tab"
                            data-bs-target="#nav-general" type="button" role="tab" aria-controls="nav-general"
                            aria-selected="true"><i class="fa-regular fa-gear"></i>General</button>
                        <button class="nav-link" id="nav-notification-tab" data-bs-toggle="tab"
                            data-bs-target="#nav-notification" type="button" role="tab" aria-controls="nav-notification"
                            aria-selected="false"><i class="fa-regular fa-envelope"></i>Mail Notifications</button>

                    </div>
                </nav>
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-general" role="tabpanel"
                        aria-labelledby="nav-general-tab" tabindex="0">
                        <div class="genr_dash">
                            <form action="javascript:;">
                                <div class=" genr_item">
                                    <div class='custom-checkbox'>
                                        <input type="checkbox">
                                        <label for="">Subscribe to Newsletters</label>
                                    </div>
                                    <p>Uncheck this box to stop receiving any mails</p>
                                </div>
                                <div class="genr_subm">
                                    <!-- <button class="btn btn-theme2 d-flex align-items-center gap-2">Submit<i
                                    class="fa-solid fa-arrow-right"></i></button> -->
                                    <a href="javascript:;" class="button-container-2 d-flex m-0">
                                        <span class="mas">Submit<i class="fa-solid fa-arrow-right ps-2"></i></span>
                                        <button type="submit" name="Hover">Submit<i
                                                class="fa-solid fa-arrow-right ps-2"></i></button>
                                    </a>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-notification" role="tabpanel"
                        aria-labelledby="nav-notification-tab" tabindex="0">
                        <div class="mail_dash">
                            <form action="javascript:;">
                                <div class=" table-responsive">
                                    <table>
                                        <tr class="cc_d">
                                            <th>
                                                <h3>Message</h3>
                                            </th>
                                            <td>
                                                <div class="cc_d_item">
                                                    <div class='custom-checkbox'>
                                                        <input type="checkbox">
                                                        <label for="">Someone Sends Me a New Chat Message</label>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="cc_d">
                                            <th>
                                                <h3>Group</h3>
                                            </th>
                                            <td>
                                                <div class="cc_d_item">
                                                    <div class='custom-checkbox'>
                                                        <input type="checkbox">
                                                        <label for="">Someone Invites Me To a Group</label>
                                                    </div>

                                                </div>
                                            </td>
                                        </tr>

                                        <tr class="cc_d">
                                            <th>
                                                <h3>Events</h3>
                                            </th>
                                            <td>
                                                <div class="cc_d_item">
                                                    <div class='custom-checkbox'>
                                                        <input type="checkbox">
                                                        <label for="">Someone Add New Event</label>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>
                                                <h3>Blogs</h3>
                                            </th>
                                            <td>
                                                <div class='custom-checkbox'>
                                                    <input type="checkbox">
                                                    <label for="">Someone Add New Blog</label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="cc_d">
                                            <th>
                                                <a href="javascript:;" class="button-container-2 d-inline-flex m-0">
                                                    <span class="mas">Submit<i
                                                            class="fa-solid fa-arrow-right ps-2"></i></span>
                                                    <button type="submit" name="Hover">Submit<i
                                                            class="fa-solid fa-arrow-right ps-2"></i></button>
                                                </a>
                                            </th>

                                        </tr>
                                    </table>
                                </div>
                            </form>
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