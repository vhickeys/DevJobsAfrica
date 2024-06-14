    <!-- Sidebar Backdrop -->
    <div class="sidebar-backdrop"></div>

    <!-- User Sidebar -->
    <div class="user-sidebar">

        <div class="sidebar-inner">
            <ul class="navigation">
                <li class="<?= setActivePage($current_page, 'index.php'); ?>"><a href="index.php"> <i class="la la-home"></i> Dashboard</a></li>

                <?php if (($_SESSION['user_data']['role'] == 'consultant') || ($_SESSION['user_data']['role'] == 'jobSeeker')) : ?>

                    <li class="<?= setActivePage($current_page, 'my-profile.php'); ?>"><a href="my-profile.php"><i class="la la-user-tie"></i>My Profile</a></li>
                    <li class="<?= setActivePage($current_page, 'my-resume.php'); ?>"><a href="my-resume.php"><i class="la la-file-invoice"></i>My Resume</a></li>
                    <li class="<?= setActivePage($current_page, 'applied-jobs.php'); ?>"><a href="applied-jobs.php"><i class="la la-briefcase"></i> Applied Jobs </a></li>
                    <li class="<?= setActivePage($current_page, 'job-alerts.php'); ?>"><a href="job-alerts.php"><i class="la la-bell"></i>Job Alerts</a></li>
                    <li class="<?= setActivePage($current_page, 'shortlisted-jobs.php'); ?>"><a href="shortlisted-jobs.php"><i class="la la-bookmark-o"></i>Shortlisted Jobs</a></li>
                    <li class="<?= setActivePage($current_page, 'cv-manager.php'); ?>"><a href="cv-manager.php"><i class="la la-file-invoice"></i> CV manager</a></li>
                    <li class="<?= setActivePage($current_page, 'messages.php'); ?>"><a href="messages.php"><i class="la la-comment-o"></i>Messages</a></li>

                <?php elseif (($_SESSION['user_data']['role'] == 'employer')) : ?>

                    <li class="<?= setActivePage($current_page, 'company-profile.php'); ?>"><a href="company-profile.php"><i class="la la-user-tie"></i>Company Profile</a></li>
                    <li class="<?= setActivePage($current_page, 'post-job.php'); ?>"><a href="post-job.php"><i class="la la-paper-plane"></i>Post a New Job</a></li>
                    <li class="<?= setActivePage($current_page, 'manage-jobs.php'); ?>"><a href="manage-jobs.php"><i class="la la-briefcase"></i> Manage Jobs </a></li>
                    <li class="<?= setActivePage($current_page, 'applicants.php'); ?>"><a href="applicants.php"><i class="la la-file-invoice"></i> All Applicants</a></li>
                    <li class="<?= setActivePage($current_page, 'shortlisted-resumes.php'); ?>"><a href="shortlisted-resumes.php"><i class="la la-bookmark-o"></i>Shortlisted Resumes</a></li>
                    <li class="<?= setActivePage($current_page, 'messages.php'); ?>"><a href="messages.php"><i class="la la-comment-o"></i>Messages</a></li>
                    <li class="<?= setActivePage($current_page, 'resume-alerts.php'); ?>"><a href="resume-alerts.php"><i class="la la-bell"></i>Resume Alerts</a></li>

                <?php endif; ?>

                <li class="<?= setActivePage($current_page, ''); ?>"><a href="javascript:void(0)"><i class="la la-user-tie"></i>Interviews</a></li>
                <li class="<?= setActivePage($current_page, ''); ?>"><a href="javascript:void(0)"><i class="la la-file-alt"></i>Assignments</a></li>
                <li class="<?= setActivePage($current_page, ''); ?>"><a href="javascript:void(0)"><i class="la la-user-plus"></i>Onboarding</a></li>

                <li class="<?= setActivePage($current_page, 'change-password.php'); ?>"><a href="change-password.php"><i class="la la-lock"></i>Change Password</a></li>
                <li><a href="?logout=true"><i class="la la-sign-out"></i>Logout</a></li>
                <li class="<?= setActivePage($current_page, ''); ?>"><a href="javascript:void(0)"><i class="la la-trash"></i>Delete Profile</a></li>
            </ul>

            <div class="skills-percentage">
                <h4>Skills Percentage</h4>
                <p>Put value for "Cover Image" field to increase your skill up to "85%"</p>

                <!-- Pie Graph -->
                <div class="pie-graph">
                    <div class="graph-outer">
                        <input type="text" class="dial" data-fgColor="#7367F0" data-bgColor="transparent" data-width="234" data-height="234" data-linecap="normal" value="30">
                        <div class="inner-text count-box"><span class="count-text txt" data-stop="30" data-speed="2000"></span>%
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End User Sidebar -->