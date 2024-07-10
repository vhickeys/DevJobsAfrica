<!-- Header Span -->
<span class="header-span"></span>


<!-- Main Header-->
<header class="main-header header-shaddow">
    <!-- Main box -->
    <div class="main-box">
        <!--Nav Outer -->
        <div class="nav-outer">
            <div class="logo-box">
                <div class="logo"><a href="index.php">
                        <img src="../images/devjobs-var3.png" width="20%" alt="DevJobsAfrica Logo">
                    </a></div>
            </div>

            <nav class="nav main-menu">
                <ul class="navigation" id="navbar">
                    <li class="<?= setCurrentPage($current_page, 'index.php'); ?>">
                        <a href="index.php">Home</a>
                    </li>

                    <li class="<?= setCurrentPage($current_page, 'about.php'); ?>">
                        <a href="../about.php">About</a>
                    </li>

                    <li class="<?= setCurrentPage($current_page, 'job-listings.php'); ?>">
                        <a href="../job-listings.php">Find Jobs</a>
                    </li>

                    <?php if (($_SESSION['user_data']['role'] == 'consultant') || ($_SESSION['user_data']['role'] == 'jobSeeker')) : ?>

                        <li class="<?= setCurrentPage($current_page, 'my-profile.php'); ?> nav-element-switch"><a href="my-profile.php"><i class="la la-user-tie"></i>My Profile</a></li>
                        <li class="<?= setCurrentPage($current_page, 'my-resume.php'); ?> nav-element-switch"><a href="my-resume.php"><i class="la la-file-invoice"></i>My Resume</a></li>
                        <li class="<?= setCurrentPage($current_page, 'applied-jobs.php'); ?> nav-element-switch"><a href="applied-jobs.php"><i class="la la-briefcase"></i> Applied Jobs </a></li>
                        <li class="<?= setCurrentPage($current_page, 'job-alerts.php'); ?> nav-element-switch"><a href="job-alerts.php"><i class="la la-bell"></i>Job Alerts</a></li>
                        <li class="<?= setCurrentPage($current_page, ''); ?> nav-element-switch"><a href="javascript:void(0)"><i class="la la-bookmark-o"></i>Shortlisted Jobs</a></li>
                        <li class="<?= setCurrentPage($current_page, ''); ?> nav-element-switch"><a href="javascript:void(0)"><i class="la la-file-invoice"></i> CV manager</a></li>
                        <li class="<?= setCurrentPage($current_page, ''); ?> nav-element-switch"><a href="javascript:void(0)"><i class="la la-box"></i>Packages</a></li>
                        <li class="<?= setCurrentPage($current_page, ''); ?> nav-element-switch"><a href="javascript:void(0)"><i class="la la-comment-o"></i>Messages</a></li>

                    <?php elseif (($_SESSION['user_data']['role'] == 'employer')) : ?>

                        <li class="<?= setCurrentPage($current_page, ''); ?> nav-element-switch"><a href="javascript:void(0)"><i class="la la-user-tie"></i>Company Profile</a></li>
                        <li class="<?= setCurrentPage($current_page, ''); ?> nav-element-switch"><a href="javascript:void(0)"><i class="la la-paper-plane"></i>Post a New Job</a></li>
                        <li class="<?= setCurrentPage($current_page, ''); ?> nav-element-switch"><a href="javascript:void(0)"><i class="la la-briefcase"></i> Manage Jobs </a></li>
                        <li class="<?= setCurrentPage($current_page, ''); ?> nav-element-switch"><a href="javascript:void(0)"><i class="la la-file-invoice"></i> All Applicants</a></li>
                        <li class="<?= setCurrentPage($current_page, ''); ?> nav-element-switch"><a href="javascript:void(0)"><i class="la la-bookmark-o"></i>Shortlisted Resumes</a></li>
                        <li class="<?= setCurrentPage($current_page, ''); ?> nav-element-switch"><a href="javascript:void(0)"><i class="la la-box"></i>Packages</a></li>
                        <li class="<?= setCurrentPage($current_page, ''); ?> nav-element-switch"><a href="javascript:void(0)"><i class="la la-comment-o"></i>Messages</a></li>
                        <li class="<?= setCurrentPage($current_page, ''); ?> nav-element-switch"><a href="javascript:void(0)"><i class="la la-bell"></i>Resume Alerts</a></li>

                    <?php endif; ?>

                    <li class="<?= setCurrentPage($current_page, ''); ?> nav-element-switch"><a href="javascript:void(0)"><i class="la la-lock"></i>Change Password</a></li>
                    <li class="<?= setCurrentPage($current_page, ''); ?> nav-element-switch"><a href="javascript:void(0)"><i class="la la-user-alt"></i>View Profile</a></li>
                    <li class="nav-element-switch"><a href="?logout=true"><i class="la la-sign-out"></i>Logout</a></li>
                    <li class="<?= setCurrentPage($current_page, ''); ?> nav-element-switch"><a href="javascript:void(0)"><i class="la la-trash"></i>Delete Profile</a></li>

                    <?php if (!isset($_SESSION['user_data']['token'])) : ?>

                        <li class="dropdown">
                            <span>Consultants</span>
                            <ul>
                                <li><a href="javascript:void(0)">Register Account</a></li>
                                <li><a href="javascript:void(0)">Consultants Dashboard</a></li>
                            </ul>
                        </li>

                        <li class="dropdown">
                            <span>Employers</span>
                            <ul>
                                <li><a href="javascript:void(0)">Register Account</a></li>
                                <li><a href="javascript:void(0)">Employers Dashboard</a></li>
                            </ul>
                        </li>

                        <li class="dropdown">
                            <span>Job Seekers</span>
                            <ul>
                                <li><a href="javascript:void(0)">Register Account</a></li>
                                <li><a href="javascript:void(0)">Job Seekers Dashboard</a></li>
                            </ul>
                        </li>

                    <?php endif; ?>

                    <li class="<?= setCurrentPage($current_page, 'blog.php'); ?></li>">
                        <a href="javascript:void(0)">Blog</a>
                    </li>

                    <!-- Only for Mobile View -->
                    <li class="mm-add-listing">
                        <a href="javascript:void(0)" class="theme-btn btn-style-one">Job Post</a>
                        <span>
                            <span class="contact-info">
                                <span class="phone-num"><span>Call us</span><a href="tel:1234567890">123 456
                                        7890</a></span>
                                <span class="address">329 Queensberry Street, North Melbourne VIC <br>3051,
                                    Australia.</span>
                                <a href="javacript:void(0)" class="email">support@devjobsafrica.com</a>
                            </span>
                            <span class="social-links">
                                <a href="#"><span class="fab fa-facebook-f"></span></a>
                                <a href="#"><span class="fab fa-twitter"></span></a>
                                <a href="#"><span class="fab fa-instagram"></span></a>
                                <a href="#"><span class="fab fa-linkedin-in"></span></a>
                            </span>
                        </span>
                    </li>
                </ul>
            </nav>
            <!-- Main Menu End-->
        </div>

        <div class="outer-box">

            <button class="menu-btn">
                <span class="count">1</span>
                <span class="icon la la-heart-o"></span>
            </button>

            <button class="menu-btn">
                <span class="icon la la-bell"></span>
            </button>

            <!-- Dashboard Option -->
            <div class="dropdown dashboard-option">
                <a class="" role="button" data-toggle="dropdown" aria-expanded="false">
                    <img src="../images/resource/company-3.png" alt="avatar" class="thumb">
                </a>
                <ul class="dropdown-menu">
                    <li class="<?= setActivePage($current_page, 'index.php'); ?>"><a href="index.php"> <i class="la la-home"></i> Dashboard</a></li>
                    <?php if (($_SESSION['user_data']['role'] == 'consultant') || ($_SESSION['user_data']['role'] == 'jobSeeker')) : ?>

                        <li class="<?= setActivePage($current_page, 'my-profile.php'); ?>"><a href="my-profile.php"><i class="la la-user-tie"></i>My Profile</a></li>
                        <li class="<?= setActivePage($current_page, 'my-resume.php'); ?>"><a href="my-resume.php"><i class="la la-file-invoice"></i>My Resume</a></li>
                        <li class="<?= setActivePage($current_page, 'applied-jobs.php'); ?>"><a href="applied-jobs.php"><i class="la la-briefcase"></i> Applied Jobs </a></li>
                        <li class="<?= setActivePage($current_page, 'job-alerts.php'); ?>"><a href="job-alerts.php"><i class="la la-bell"></i>Job Alerts</a></li>
                        <li class="<?= setActivePage($current_page, ''); ?>"><a href="javascript:void(0)"><i class="la la-bookmark-o"></i>Shortlisted Jobs</a></li>
                        <li class="<?= setActivePage($current_page, ''); ?>"><a href="javascript:void(0)"><i class="la la-file-invoice"></i> CV manager</a></li>
                        <li class="<?= setActivePage($current_page, ''); ?>"><a href="javascript:void(0)"><i class="la la-box"></i>Packages</a></li>
                        <li class="<?= setActivePage($current_page, ''); ?>"><a href="javascript:void(0)"><i class="la la-comment-o"></i>Messages</a></li>

                    <?php elseif (($_SESSION['user_data']['role'] == 'employer')) : ?>

                        <li class="<?= setActivePage($current_page, ''); ?>"><a href="javascript:void(0)"><i class="la la-user-tie"></i>Company Profile</a></li>
                        <li class="<?= setActivePage($current_page, ''); ?>"><a href="javascript:void(0)"><i class="la la-paper-plane"></i>Post a New Job</a></li>
                        <li class="<?= setActivePage($current_page, ''); ?>"><a href="javascript:void(0)"><i class="la la-briefcase"></i> Manage Jobs </a></li>
                        <li class="<?= setActivePage($current_page, ''); ?>"><a href="javascript:void(0)"><i class="la la-file-invoice"></i> All Applicants</a></li>
                        <li class="<?= setActivePage($current_page, ''); ?>"><a href="javascript:void(0)"><i class="la la-bookmark-o"></i>Shortlisted Resumes</a></li>
                        <li class="<?= setActivePage($current_page, ''); ?>"><a href="javascript:void(0)"><i class="la la-box"></i>Packages</a></li>
                        <li class="<?= setActivePage($current_page, ''); ?>"><a href="javascript:void(0)"><i class="la la-comment-o"></i>Messages</a></li>
                        <li class="<?= setActivePage($current_page, ''); ?>"><a href="javascript:void(0)"><i class="la la-bell"></i>Resume Alerts</a></li>

                    <?php endif; ?>

                    <li class="<?= setActivePage($current_page, ''); ?>"><a href="javascript:void(0)"><i class="la la-lock"></i>Change Password</a></li>
                    <li class="<?= setActivePage($current_page, ''); ?>"><a href="javascript:void(0)"><i class="la la-user-alt"></i>View Profile</a></li>
                    <li><a href="?logout=true"><i class="la la-sign-out"></i>Logout</a></li>
                    <li class="<?= setActivePage($current_page, ''); ?>"><a href="javascript:void(0)"><i class="la la-trash"></i>Delete Profile</a></li>
                </ul>
            </div>
        </div>

    </div>

    <!-- Mobile Header -->
    <div class="mobile-header">
        <div class="logo"><a href="index.php">
                <img src="../images/devjobs-var3.png" width="50" alt="DevJobsAfrica Logo">
            </a></div>

        <!--Nav Box-->
        <div class="nav-outer clearfix">

            <div class="outer-box">
                <!-- Login/Register -->
                <div class="login-box">
                    <a href="register.php?jobCategory=jobSeeker"><span class="icon-user"></span></a>
                </div>

                <a href="#nav-mobile" class="mobile-nav-toggler navbar-trigger"><span class="flaticon-menu-1"></span></a>
            </div>
        </div>
    </div>

    <!-- Mobile Nav -->
    <div id="nav-mobile"></div>
</header>
<!--End Main Header -->