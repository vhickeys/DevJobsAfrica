<?php
require_once 'webadmin/classes/functions.php';

regPageAuth($_GET['jobCategory'], 'index');

$page_title = "Register";
include_once 'page-components/header.php';
?>

<!-- Main Header-->
<header class="main-header">
    <div class="container-fluid">
        <!-- Main box -->
        <div class="main-box">
            <!--Nav Outer -->
            <div class="nav-outer">
                <div class="logo-box">
                    <div class="logo"><a href="index.php">
                            <img src="images/devjobs-var3.png" width="20%" alt="DevJobsAfrica Logo">
                        </a></div>
                </div>
            </div>

            <div class="outer-box">
                <!-- Login/Register -->
                <div class="btn-box">
                    <a href="index.php" class="theme-btn btn-style-three call-modal">Home</a>
                    <a href="job-listings.php" class="theme-btn btn-style-one"><span class="btn-title">Find Jobs</span></a>
                </div>
            </div>
        </div>
    </div>

    <!-- Mobile Header -->
    <div class="mobile-header">
        <div class="logo"><a href="index.php">
                <img src="images/devjobs-var3.png" width="50" alt="DevJobsAfrica Logo">
        </div>

        <!--Nav Box-->
        <div class="nav-outer clearfix">

            <div class="outer-box">
                <!-- Login/Register -->
                <div class="login-box">
                    <a href="login-popup.php" class="call-modal"><span class="icon-user"></span></a>
                </div>

                <a href="#nav-mobile" class="mobile-nav-toggler navbar-trigger"><span class="flaticon-menu-1"></span></a>
            </div>
        </div>
    </div>

    <!-- Mobile Nav -->
    <div id="nav-mobile">
        <li><a href="">book</a></li>
    </div>
</header>
<!--End Main Header -->

<!-- Info Section -->
<div class="login-section">
    <div class="image-layer" style="background-image: url(images/background/12.jpg);"></div>
    <div class="outer-box">
        <?php
        switch ($_GET['jobCategory']) {
            case 'consultant':
        ?>
                <!-- Consultant Register Form -->
                <div class="login-form default-form">
                    <div class="form-inner">
                        <h3>Create a Free DevJob Account</h3>

                        <!-- Consultant Register Form -->
                        <div class="btn-box row mb-4">
                            <div class="col-lg-4 col-md-12 col-sm-12">
                                <a href="register.php?jobCategory=consultant" class="theme-btn <?= setActiveJobReg($_GET['jobCategory'], 'consultant', 'btn-style-seven', 'btn-style-four'); ?> w-100 mb-sm-3"><i class="la la-handshake"></i> Consultant </a>
                            </div>
                            <div class="col-lg-4 col-md-12 col-sm-12">
                                <a href="register.php?jobCategory=employer" class="theme-btn <?= setActiveJobReg($_GET['jobCategory'], 'employer', 'btn-style-seven', 'btn-style-four'); ?> w-100 mb-sm-3"><i class="la la-briefcase"></i> Employer </a>
                            </div>
                            <div class="col-lg-4 col-md-12 col-sm-12">
                                <a href="register.php?jobCategory=jobSeeker" class="theme-btn <?= setActiveJobReg($_GET['jobCategory'], 'jobSeeker', 'btn-style-seven', 'btn-style-four'); ?> w-100 mb-sm-3"><i class="la la-user"></i> Job Seekers </a>
                            </div>
                        </div>

                        <form>
                            <div id="consultantAlert">
                                alert...
                            </div>

                            <div class="form-group">
                                <label>Full Name</label>
                                <input type="text" id="fullname" name="fullname" placeholder="Full Name" required>
                            </div>

                            <div class="form-group">
                                <label>Email Address</label>
                                <input type="email" id="email" name="email" placeholder="Email" required>
                            </div>

                            <div class="form-group">
                                <label>Area of Expertise (optional)</label>
                                <input type="text" id="area_of_expertise" name="area_of_expertise" placeholder="Area of Expertise" required>
                            </div>

                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" id="password" name="password" value="" placeholder="Password">
                            </div>

                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" id="password_confirm" name="password_confirm" value="" placeholder="Confirm Password">
                            </div>

                            <input type="hidden" id="role" name="role" value="<?= $_GET['jobCategory'] ?>">

                            <div class="form-group">
                                <button class="theme-btn btn-style-one" id="regConsultant" type="submit" name="Register">Register</button>
                            </div>
                        </form>

                        <div class="bottom-box">
                            <div class="divider"><span>or</span></div>
                            <div class="btn-box row">
                                <!-- <div class="col-lg-6 col-md-12">
                                    <a href="#" class="theme-btn social-btn-two facebook-btn"><i class="fab fa-linkedin"></i> Log In via LinkedIn</a>
                                </div> -->
                                <div class="col-lg-6 col-md-12">
                                    <a href="login.php" class="theme-btn social-btn-two facebook-btn"> Already Registered? Log In</a>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <a href="#" class="theme-btn social-btn-two google-btn"><i class="fab fa-google"></i> Log In via Gmail</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Registration Form -->

            <?php
                break;

            case 'employer':
            ?>
                <!-- Employer Registration Form -->
                <div class="login-form default-form">
                    <div class="form-inner">
                        <h3>Create a Free DevJob Account</h3>

                        <!-- Employer Registration Form -->

                        <div class="btn-box row mb-4">
                            <div class="col-lg-4 col-md-12 col-sm-12">
                                <a href="register.php?jobCategory=consultant" class="theme-btn <?= setActiveJobReg($_GET['jobCategory'], 'consultant', 'btn-style-seven', 'btn-style-four'); ?> w-100 mb-sm-3"><i class="la la-handshake"></i> Consultant </a>
                            </div>
                            <div class="col-lg-4 col-md-12 col-sm-12">
                                <a href="register.php?jobCategory=employer" class="theme-btn <?= setActiveJobReg($_GET['jobCategory'], 'employer', 'btn-style-seven', 'btn-style-four'); ?> w-100 mb-sm-3"><i class="la la-briefcase"></i> Employer </a>
                            </div>
                            <div class="col-lg-4 col-md-12 col-sm-12">
                                <a href="register.php?jobCategory=jobSeeker" class="theme-btn <?= setActiveJobReg($_GET['jobCategory'], 'jobSeeker', 'btn-style-seven', 'btn-style-four'); ?> w-100 mb-sm-3"><i class="la la-user"></i> Job Seekers </a>
                            </div>
                        </div>

                        <form>
                            <div id="employerAlert">
                                alert...
                            </div>

                            <div class="form-group">
                                <label>Company Name</label>
                                <input type="text" id="company_name" name="company_name" placeholder="Company Name" required>
                            </div>

                            <div class="form-group">
                                <label>Email Address</label>
                                <input type="email" id="company_email" name="company_email" placeholder="Email" required>
                            </div>

                            <div class="form-group">
                                <label>Industry</label>
                                <input type="text" id="company_industry" name="company_industry" placeholder="industry" required>
                            </div>

                            <div class="form-group">
                                <label>Password</label>
                                <input id="company_password" type="password" name="company_password" value="" placeholder="Password">
                            </div>

                            <div class="form-group">
                                <label>Password</label>
                                <input id="company_pwdconfirm" type="password" name="company_pwdconfirm" value="" placeholder="Password">
                            </div>

                            <input type="hidden" id="company_role" name="company_role" value="<?= $_GET['jobCategory'] ?>">

                            <div class="form-group">
                                <button class="theme-btn btn-style-one" type="submit" id="regEmployer" name="employer">Register</button>
                            </div>
                        </form>

                        <div class="bottom-box">
                            <div class="divider"><span>or</span></div>
                            <div class="btn-box row">
                                <!-- <div class="col-lg-6 col-md-12">
                                    <a href="#" class="theme-btn social-btn-two facebook-btn"><i class="fab fa-linkedin"></i> Log In via LinkedIn</a>
                                </div> -->
                                <div class="col-lg-6 col-md-12">
                                    <a href="login.php" class="theme-btn social-btn-two facebook-btn"> Already Registered? Log In</a>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <a href="#" class="theme-btn social-btn-two google-btn"><i class="fab fa-google"></i> Log In via Gmail</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Registration Form -->
            <?php
                break;

            case 'jobSeeker':
            ?>
                <!-- Register Job Seekers Form -->
                <div class="login-form default-form">
                    <div class="form-inner">
                        <h3>Create a Free DevJob Account</h3>

                        <!--Register Job Seekers Form-->

                        <div class="btn-box row mb-4">
                            <div class="col-lg-4 col-md-12 col-sm-12">
                                <a href="register.php?jobCategory=consultant" class="theme-btn <?= setActiveJobReg($_GET['jobCategory'], 'consultant', 'btn-style-seven', 'btn-style-four'); ?> w-100 mb-sm-3"><i class="la la-handshake"></i> Consultant </a>
                            </div>
                            <div class="col-lg-4 col-md-12 col-sm-12">
                                <a href="register.php?jobCategory=employer" class="theme-btn <?= setActiveJobReg($_GET['jobCategory'], 'employer', 'btn-style-seven', 'btn-style-four'); ?> w-100 mb-sm-3"><i class="la la-briefcase"></i> Employer </a>
                            </div>
                            <div class="col-lg-4 col-md-12 col-sm-12">
                                <a href="register.php?jobCategory=jobSeeker" class="theme-btn <?= setActiveJobReg($_GET['jobCategory'], 'jobSeeker', 'btn-style-seven', 'btn-style-four'); ?> w-100 mb-sm-3"><i class="la la-user"></i> Job Seekers </a>
                            </div>
                        </div>

                        <form>
                            <div id="jobSeekerAlert">
                                alert...
                            </div>
                            <div class="form-group">
                                <label>Full Name</label>
                                <input type="text" id="jobSeeker_name" name="jobSeeker_name" placeholder="Full Name" required>
                            </div>

                            <div class="form-group">
                                <label>Email Address</label>
                                <input type="email" id="jobSeeker_email" name="jobSeeker_email" placeholder="Email" required>
                            </div>

                            <div class="form-group">
                                <label>Password</label>
                                <input id="jobSeeker_password" type="password" id="jobSeeker_password" name="jobSeeker_password" value="" placeholder="Password">
                            </div>

                            <div class="form-group">
                                <label>Password</label>
                                <input id="jobSeeker_pwdRep" type="password" id="jobSeeker_pwdRep" name="jobSeeker_pwdRep" value="" placeholder="Confirm Password">
                            </div>

                            <input type="hidden" id="jobSeeker_role" name="jobSeeker_role" value="<?= $_GET['jobCategory'] ?>">

                            <?php if (isset($_GET['jobID']) && $_GET['jobID'] != '') : ?>
                                <input type="hidden" id="jobID" name="jobID" value="<?= $_GET['jobID'] ?>">
                            <?php endif; ?>

                            <div class="form-group">
                                <button class="theme-btn btn-style-one" type="submit" id="regJobSeeker" name="regJobSeeker">Register</button>
                            </div>
                        </form>

                        <div class="bottom-box">
                            <div class="divider"><span>or</span></div>
                            <div class="btn-box row">
                                <!-- <div class="col-lg-6 col-md-12">
                                    <a href="#" class="theme-btn social-btn-two facebook-btn"><i class="fab fa-linkedin"></i> Log In via LinkedIn</a>
                                </div> -->
                                <div class="col-lg-6 col-md-12">
                                    <a href="login.php" class="theme-btn social-btn-two facebook-btn"> Already Registered? Log In</a>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <a href="#" class="theme-btn social-btn-two google-btn"><i class="fab fa-google"></i> Log In via Gmail</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Login Form -->
        <?php
                break;

            default:
                # code...
                break;
        }
        ?>
    </div>
</div>
<!-- End Info Section -->

<?php
include_once 'page-components/scripts.php';
?>