<?php
require_once 'webadmin/classes/functions.php';
$page_title = "Login";
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
                            <h4 class="fw-bold text-white">Dev Jobs Africa</h4>
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
        <div class="logo"><a href="index.html">
                <h4 class="fw-bold text-dark">Dev Jobs Africa</h4>
        </div>

        <!--Nav Box-->
        <div class="nav-outer clearfix">

            <div class="outer-box">
                <!-- Login/Register -->
                <div class="login-box">
                    <a href="login-popup.html" class="call-modal"><span class="icon-user"></span></a>
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
        <!-- Login Form -->
        <div class="login-form default-form">
            <div class="form-inner">
                <h3>Login to Dev Jobs Africa</h3>
                <!--Login Form-->
                <form>

                    <?php include_once 'page-components/alert-messages.php' ?>

                    <div id="jobLoginAlert">
                        alert...
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" id="userEmail" name="userEmail" placeholder="Enter Email">
                    </div>

                    <div class="form-group">
                        <label>Password</label>
                        <input id="userPassword" type="password" name="password" value="" placeholder="Enter Password">
                    </div>

                    <?php if (isset($_GET['jobID']) && $_GET['jobID'] != '') : ?>
                        <input type="hidden" id="jobID" name="jobID" value="<?= $_GET['jobID'] ?>">
                    <?php endif; ?>

                    <div class="form-group">
                        <div class="field-outer">
                            <div class="input-group checkboxes square">
                                <input type="checkbox" name="remember-me" value="" id="remember">
                                <label for="remember" class="remember"><span class="custom-checkbox"></span> Remember me</label>
                            </div>
                            <a href="#" class="pwd">Forgot password?</a>
                        </div>
                    </div>

                    <div class="form-group">
                        <button class="theme-btn btn-style-one" id="loginUser" type="submit" name="log-in">Log In</button>
                    </div>
                </form>

                <div class="bottom-box">
                    <div class="text">Don't have an account? <a href="register.php?jobCategory=consultant">Signup</a></div>
                    <div class="divider"><span>or</span></div>
                    <div class="btn-box row">
                        <div class="col-lg-6 col-md-12">
                            <a href="#" class="theme-btn social-btn-two facebook-btn"><i class="fab fa-facebook-f"></i> Log In via
                                Facebook</a>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <a href="#" class="theme-btn social-btn-two google-btn"><i class="fab fa-google"></i> Log In via
                                Gmail</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End Login Form -->
    </div>
</div>
<!-- End Info Section -->

<?php
include_once 'page-components/scripts.php';
?>