<?php

require_once '../webadmin/classes/functions.php';
authRoleCheckJobUser('employer', '../login', 'index', 'You are not authorized to access this page. You are an Employer!');

$page_title = 'My Profile';
$current_page = 'my-profile.php';

include_once 'page-components/dashboard-header.php';
include_once 'page-components/dashboard-main-header.php';
include_once 'page-components/dashboard-sidebar.php';

$my_profile = $record->getRecordByColumn('job_users', 'token', $_SESSION['user_data']['role']);

// echo '<pre>';
// print_r($my_profile);

?>

<!-- Dashboard -->
<section class="user-dashboard">
    <div class="dashboard-outer">
        <div class="upper-title-box">
            <h3>My Profile</h3>
            <div class="text">Ready to jump back in?</div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <!-- Ls widget -->
                <div class="ls-widget">
                    <div class="tabs-box">
                        <div class="widget-title">
                            <h4>My Profile</h4>
                        </div>

                        <div class="widget-content">

                            <div class="uploading-outer">
                                <div class="uploadButton">
                                    <input class="uploadButton-input" type="file" name="attachments[]" accept="image/*, application/pdf" id="upload" multiple />
                                    <label class="uploadButton-button ripple-effect" for="upload">Browse Logo</label>
                                    <span class="uploadButton-file-name"></span>
                                </div>
                                <div class="text">Max file size is 1MB, Minimum dimension: 330x300 And Suitable files are .jpg & .png</div>
                            </div>

                            <form class="default-form">
                                <div class="row">
                                    <!-- Input -->
                                    <div class="form-group col-lg-6 col-md-12">
                                        <label>Full Name</label>
                                        <input type="text" name="fullname" value="<?= $my_profile['fullname'] ?>" disabled>
                                    </div>

                                    <!-- Input -->
                                    <div class="form-group col-lg-6 col-md-12">
                                        <label>Job Title</label>
                                        <input type="text" name="name" placeholder="e.g. UI Designer">
                                    </div>

                                    <!-- Input -->
                                    <div class="form-group col-lg-6 col-md-12">
                                        <label>Phone</label>
                                        <input type="text" name="name" placeholder="e.g. 0 123 456 7890">
                                    </div>

                                    <!-- Input -->
                                    <div class="form-group col-lg-6 col-md-12">
                                        <label>Email address</label>
                                        <input type="text" name="email" value="<?= $my_profile['email'] ?>" disabled>
                                    </div>

                                    <!-- Input -->
                                    <div class="form-group col-lg-6 col-md-12">
                                        <label>Website</label>
                                        <input type="text" name="name" placeholder="e.g. www.johndoe.com">
                                    </div>

                                    <!-- Input -->
                                    <div class="form-group col-lg-3 col-md-12">
                                        <label>Current Salary($)</label>
                                        <select class="chosen-select">
                                            <option>40-70 K</option>
                                            <option>50-80 K</option>
                                            <option>60-90 K</option>
                                            <option>70-100 K</option>
                                            <option>100-150 K</option>
                                        </select>
                                    </div>

                                    <!-- Input -->
                                    <div class="form-group col-lg-3 col-md-12">
                                        <label>Expected Salary($)</label>
                                        <select class="chosen-select">
                                            <option>120-350 K</option>
                                            <option>40-70 K</option>
                                            <option>50-80 K</option>
                                            <option>60-90 K</option>
                                            <option>70-100 K</option>
                                            <option>100-150 K</option>
                                        </select>
                                    </div>

                                    <!-- Input -->
                                    <div class="form-group col-lg-6 col-md-12">
                                        <label>Experience</label>
                                        <input type="text" name="name" placeholder="5-10 Years">
                                    </div>

                                    <!-- Input -->
                                    <div class="form-group col-lg-6 col-md-12">
                                        <label>Age</label>
                                        <select class="chosen-select">
                                            <option>23 - 27 Years</option>
                                            <option>24 - 28 Years</option>
                                            <option>25 - 29 Years</option>
                                            <option>26 - 30 Years</option>
                                        </select>
                                    </div>

                                    <!-- Input -->
                                    <div class="form-group col-lg-6 col-md-12">
                                        <label>Education Levels</label>
                                        <input type="text" name="name" placeholder="Certificate">
                                    </div>

                                    <!-- Input -->
                                    <div class="form-group col-lg-6 col-md-12">
                                        <label>Languages</label>
                                        <input type="text" name="name" placeholder="English, Turkish">
                                    </div>

                                    <!-- Search Select -->
                                    <div class="form-group col-lg-6 col-md-12">
                                        <label>Categories </label>
                                        <select data-placeholder="Categories" class="chosen-select multiple" multiple tabindex="4">
                                            <option value="Banking">Banking</option>
                                            <option value="Digital&Creative">Digital & Creative</option>
                                            <option value="Retail">Retail</option>
                                            <option value="Human Resources">Human Resources</option>
                                            <option value="Management">Management</option>
                                        </select>
                                    </div>

                                    <!-- Input -->
                                    <div class="form-group col-lg-6 col-md-12">
                                        <label>Allow In Search & Listing</label>
                                        <select class="chosen-select">
                                            <option>Yes</option>
                                            <option>No</option>
                                        </select>
                                    </div>

                                    <!-- About Company -->
                                    <div class="form-group col-lg-12 col-md-12">
                                        <label>Description</label>
                                        <textarea placeholder="Spent several years working on sheep on Wall Street. Had moderate success investing in Yugo's on Wall Street. Managed a small team buying and selling Pogo sticks for farmers. Spent several years licensing licorice in West Palm Beach, FL. Developed several new methods for working it banjos in the aftermarket. Spent a weekend importing banjos in West Palm Beach, FL.In this position, the Software Engineer collaborates with Evention's Development team to continuously enhance our current software solutions as well as create new solutions to eliminate the back-office operations and management challenges present"></textarea>
                                    </div>

                                    <!-- Input -->
                                    <div class="form-group col-lg-6 col-md-12">
                                        <button class="theme-btn btn-style-one">Save</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Ls widget -->
                <div class="ls-widget">
                    <div class="tabs-box">
                        <div class="widget-title">
                            <h4>Social Network</h4>
                        </div>

                        <div class="widget-content">
                            <form class="default-form">
                                <div class="row">
                                    <!-- Input -->
                                    <div class="form-group col-lg-6 col-md-12">
                                        <label>Facebook</label>
                                        <input type="text" name="name" placeholder="www.facebook.com/Invision">
                                    </div>

                                    <!-- Input -->
                                    <div class="form-group col-lg-6 col-md-12">
                                        <label>Twitter</label>
                                        <input type="text" name="name" placeholder="">
                                    </div>

                                    <!-- Input -->
                                    <div class="form-group col-lg-6 col-md-12">
                                        <label>Linkedin</label>
                                        <input type="text" name="name" placeholder="">
                                    </div>

                                    <!-- Input -->
                                    <div class="form-group col-lg-6 col-md-12">
                                        <label>Google Plus</label>
                                        <input type="text" name="name" placeholder="">
                                    </div>

                                    <!-- Input -->
                                    <div class="form-group col-lg-6 col-md-12">
                                        <button class="theme-btn btn-style-one">Save</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Ls widget -->
                <div class="ls-widget">
                    <div class="tabs-box">
                        <div class="widget-title">
                            <h4>Contact Information</h4>
                        </div>

                        <div class="widget-content">
                            <form class="default-form">
                                <div class="row">
                                    <!-- Input -->
                                    <div class="form-group col-lg-6 col-md-12">
                                        <label>Country</label>
                                        <select class="chosen-select">
                                            <option>Australia</option>
                                            <option>Pakistan</option>
                                            <option>Chaina</option>
                                            <option>Japan</option>
                                            <option>India</option>
                                        </select>
                                    </div>

                                    <!-- Input -->
                                    <div class="form-group col-lg-6 col-md-12">
                                        <label>City</label>
                                        <select class="chosen-select">
                                            <option>Melbourne</option>
                                            <option>Pakistan</option>
                                            <option>Chaina</option>
                                            <option>Japan</option>
                                            <option>India</option>
                                        </select>
                                    </div>

                                    <!-- Input -->
                                    <div class="form-group col-lg-12 col-md-12">
                                        <label>Complete Address</label>
                                        <input type="text" name="name" placeholder="329 Queensberry Street, North Melbourne VIC 3051, Australia.">
                                    </div>

                                    <!-- Input -->
                                    <div class="form-group col-lg-6 col-md-12">
                                        <label>Find On Map</label>
                                        <input type="text" name="name" placeholder="329 Queensberry Street, North Melbourne VIC 3051, Australia.">
                                    </div>

                                    <!-- Input -->
                                    <div class="form-group col-lg-3 col-md-12">
                                        <label>Latitude</label>
                                        <input type="text" name="name" placeholder="Melbourne">
                                    </div>

                                    <!-- Input -->
                                    <div class="form-group col-lg-3 col-md-12">
                                        <label>Longitude</label>
                                        <input type="text" name="name" placeholder="Melbourne">
                                    </div>

                                    <!-- Input -->
                                    <div class="form-group col-lg-12 col-md-12">
                                        <button class="theme-btn btn-style-one">Save</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>


        </div>
    </div>
</section>
<!-- End Dashboard -->

<?php
include_once 'page-components/dashboard-footer.php';
?>