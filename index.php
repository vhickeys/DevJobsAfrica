<?php
require 'webadmin/classes/functions.php';
$page_title = "Home Page";
include_once 'page-components/header.php';
include_once 'page-components/main-header.php';

$sectors = $record->getRecordsByStatus('sectors', '0');
$allJobListings = array_slice($jobListing->getJobsListingsStatus(), 0, 5);
$openings = array_slice($jobListing->getJobsListingsStatus(), 0, 10);

?>

<!-- Banner Section-->
<section class="banner-section -type-13">
    <div class="auto-container">
        <div class="row">
            <div class="content-column col-lg-7">
                <div class="inner-column">
                    <div class="title-box wow fadeInUp" data-wow-delay="300ms">
                        <h3>There Are 178 Postings Here For you!</h3>
                        <div class="text text-white">Find Jobs, Employment & Career Opportunities</div>
                    </div>

                    <!-- Job Search Form -->
                    <div class="job-search-form wow fadeInUp" data-wow-delay="600ms">
                        <form method="post" action="job-listings.php">
                            <div class="row">
                                <div class="form-group col-lg-5">
                                    <span class="icon flaticon-search-1"></span>
                                    <input type="text" name="field_name" placeholder="Job title, keywords, or company">
                                </div>
                                <!-- Form Group -->
                                <div class="form-group col-lg-4 location">
                                    <span class="icon flaticon-map-locator"></span>
                                    <input type="text" name="field_name" placeholder="City or postcode">
                                </div>
                                <!-- Form Group -->
                                <div class="form-group col-lg-3 btn-box">
                                    <button type="submit" class="theme-btn btn-style-one"><span class="btn-title">Find Jobs</span></button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- Job Search Form -->

                    <!-- Popular Search -->
                    <div class="popular-searches wow fadeInUp" data-wow-delay="900ms">
                        <span class="title">Popular Searches : </span>
                        <a href="job-listings.php">Program Officer</a>,
                        <a href="job-listings.php">Country Director</a>,
                        <a href="job-listings.php">Program Coordinator</a>,
                        <a href="job-listings.php">Senior Program Officer</a>,
                    </div>
                    <!-- End Popular Search -->

                    <div class="bottom-box wow fadeInUp" data-wow-delay="1500ms">
                        <div class="count-employers">
                            <span class="title">1k+ Candidates</span>
                            <img src="images/resource/multi-peoples.png" alt="">
                        </div>
                        <a href="register.php?jobCategory=jobSeeker" class="upload-cv"><span class="icon flaticon-file"></span> Upload your CV</a>
                    </div>
                </div>
            </div>

            <!-- <div class="image-column col-lg-5 col-md-12">
                <div class="image-box">
                    <figure class="main-image wow fadeIn anm" data-wow-delay="1200ms" data-speed-x="2"><img src="images/index-13/header/2.png" alt=""></figure>
                </div>
            </div> -->
        </div>
    </div>
</section>
<!-- End Banner Section-->

<!-- Job Categories -->
<section class="layout-pt-120 layout-pb-60">
    <div class="auto-container">
        <div class="row justify-content-between align-items-end">
            <div class="col-lg-6">
                <div class="">
                    <h2 class="fw-700">Jobs by sectors</h2>
                    <div class="text mt-9">178 jobs live - 24 added today.</div>
                </div>
            </div>

            <div class="col-auto">
                <a href="job-listings.php" class="button-icon -arrow text-dark-blue">
                    Browse All
                    <span class="fa fa-angle-right"></span>
                </a>
            </div>
        </div>

        <div class="row grid-flex pt-50 wow fadeInUp">

            <?php
            if ($sectors != null) {
                foreach ($sectors as $sector) {
            ?>

                    <!-- Icon Block -->
                    <div class="col-xl-auto col-lg-3 col-md-6 col-sm-12">
                        <a href="#" class="icon-item -type-3">
                            <div class="icon-wrap">
                                <div class="icon flaticon-money-1"></div>
                            </div>

                            <div class="content">
                                <h4><?= $sector['name'] ?></h4>
                            </div>
                        </a>
                    </div>

                <?php
                }
                ?>

            <?php
            }
            ?>

        </div>
    </div>
</section>
<!-- End Job Categories -->

<!-- Work Section -->
<section class="layout-pt-60 layout-pb-60">
    <div class="auto-container">
        <div class="row justify-content-center">
            <div class="col-lg-5">
                <div class="sec-title text-center">
                    <h2>How It Works?</h2>
                    <div class="text">Employers can sign on to DevjobAfrica by creating an account and posting job listings for open positions within their organization.</div>
                </div>
            </div>
        </div>

        <div class="row grid-base wow fadeInUp">

            <!-- Work Block -->
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="work-block -type-2 mb-0">
                    <div class="inner-box">
                        <div class="icon-wrap -blue">
                            <span class="icon icon-case"></span>
                        </div>
                        <h5>Register an account to start</h5>
                        <p>Our platform allows employers to specify the requirements and qualifications necessary for the role, as well as any additional preferences they may have for potential candidates. </p>
                    </div>
                </div>
            </div>

            <!-- Work Block -->
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="work-block -type-2 mb-0">
                    <div class="inner-box">
                        <div class="icon-wrap -red">
                            <span class="icon icon-contact"></span>
                        </div>
                        <h5>Recruitment process</h5>
                        <p>Our recruitment process involves thorough screening and assessment of each candidate's skills, experience, and professional background. We use a combination of advanced technology and human expertise to ensure that only the most qualified individuals are considered for the position. </p>
                    </div>
                </div>
            </div>

            <!-- Work Block -->
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="work-block -type-2 mb-0">
                    <div class="inner-box">
                        <div class="icon-wrap -yellow">
                            <span class="icon icon-doc"></span>
                        </div>
                        <h5>Get Shortlisted</h5>
                        <p>At the end of the recruitment process, employers will be provided with a shortlist of the top candidates who have been selected for further consideration. These candidates will have undergone rigorous evaluation to ensure that they meet the requirements and qualifications specified by the employer. </p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- End Work Section -->

<!-- About Section -->
<section class="about-section-two style-two layout-pt-60 layout-pb-60">
    <div class="auto-container">
        <div class="row justify-content-between align-items-center">
            <!-- Image Column -->
            <div class="image-column -no-margin col-xl-6 col-lg-6 col-md-12 col-sm-12 wow fadeInRight">
                <div class="image-box -type-1">
                    <figure class="main-image wow fadeIn anm" data-wow-delay="1200ms" data-speed-x="2"><img src="images/resource/devjobres-1.jpg" alt="Opportunities in Donor funded and Donor assisted Programs and Projects in Africa | DevJobsAfrica"></figure>

                    <!-- Info BLock One -->
                    <div class="info_block wow fadeIn anm" data-wow-delay="1500ms" data-speed-x="3" data-speed-y="3">
                        <span class="icon flaticon-email-3"></span>
                        <p>Job seekers can access a wide <br> range of job opportunities </p>
                    </div>

                    <!-- Info BLock Two -->
                    <!-- <div class="info_block_two wow fadeIn anm" data-wow-delay="1800ms" data-speed-x="2" data-speed-y="2">
                        <p>10k+ Candidates</p>
                        <div class="image"><img src="images/resource/multi-peoples.png" alt=""></div>
                    </div> -->

                    <!-- Info BLock Four -->
                    <div class="info_block_four wow fadeIn anm" data-wow-delay="2400ms" data-speed-x="2" data-speed-y="3">
                        <span class="icon flaticon-file"></span>
                        <div class="inner">
                            <p>Upload Your CV</p>
                            <span class="sub-text">It only takes a few seconds</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Content Column -->
            <div class="content-column mb-0 col-xl-5 col-lg-6 col-md-12 col-sm-12">
                <div class="wow fadeInLeft">
                    <div class="sec-title">
                        <h2 class="fw-700">Opportunities in Donor funded and Donor assisted Programs and Projects in Africa.</h2>
                        <div class="text mt-30">In today’s competitive job market, job seekers often struggle to find employment opportunities that align with their skills and interests, while organizations face challenges in efficiently sourcing and hiring qualified candidates for their projects in Africa. <br><br> DevjobsAfrica provides Job Seekers the opportunity to search for and secure positions in Donor funded and Donor assisted Projects commensurate with their professional qualifications and experience.</div>
                    </div>
                    <a href="login.php?jobCategory=jobSeeker" class="theme-btn -blue-dark">Post Resume</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End About Section -->

<!-- Job Section -->
<section class="layout-pt-60 layout-pb-60">
    <div class="auto-container">
        <div class="row wow fadeInUp">
            <div class="featured-column col-xl-12 col-lg-12 col-md-12 col-sm-12">
                <div class="sec-title text-center">
                    <h2 class="color-blue-dark fw-700">Latest Jobs</h2>
                    <div class="text">DevJobsAfrica has a vast database of job listings from various organizations and donors across Africa.</div>
                </div>

                <div class="outer-box job-block-five-separated">

                    <?php

                    if ($allJobListings != null) {
                        foreach ($allJobListings as $jobListing) {
                    ?>

                            <!-- Job Block -->
                            <div class="job-block-five">
                                <div class="inner-box">
                                    <div class="content">
                                        <span class="company-logo"><img src="webadmin/images/job-listings/<?= $jobListing['image'] ?? 'default.png' ?>" alt="<?= $jobListing['title'] ?> | DevJobs Africa"></span>
                                        <h4><a href="job-description.php?devJob=<?= $jobListing['slug'] ?>"><?= $jobListing['title'] ?></a></h4>
                                        <ul class="job-info mb-0">
                                            <?php if ($jobListing['career_level'] != '') : ?>
                                                <li><span class="icon flaticon-briefcase"></span> <?= $jobListing['career_level'] ?></li>
                                            <?php endif; ?>

                                            <?php if ($jobListing['location'] != '') : ?>
                                                <li><span class="icon flaticon-map-locator"></span> <?= $jobListing['location'] ?></li>
                                            <?php endif; ?>
                                            <li><span class="icon flaticon-clock-3"></span> <?= get_time_ago(strtotime($jobListing['date'])) ?></li>
                                            <?php if ($jobListing['salary'] != '0') : ?>
                                                <li><span class="icon flaticon-money"></span> <?= $jobListing['salary'] ?></li>
                                            <?php endif; ?>
                                        </ul>
                                    </div>
                                    <?php if ($jobListing['job_type'] != '') : ?>
                                        <ul class="job-other-info">
                                            <li class="time mb-0"><?= $jobListing['job_type'] ?></li>
                                        </ul>
                                    <?php endif; ?>

                                    <a href="register.php?jobCategory=jobSeeker&jobID=<?= $jobListing['id'] ?>" class="theme-btn btn-dark-blue">Apply Job</a>
                                </div>
                            </div>

                    <?php
                        }
                    }
                    ?>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Job Section -->

<!-- Registeration Banners -->
<section class="layout-pt-60 layout-pb-60">
    <div class="auto-container">
        <div class="row wow fadeInUp">
            <!-- Banner Style One -->
            <div class="banner-style-one -type-2 col-lg-6 col-md-12 col-sm-12">
                <div class="inner-box" style="background-image:url('images/resource/bg-1.png')">
                    <div class="content">
                        <h3>Employers</h3>
                        <p>By using the Devjobs Job portal, organizations can streamline the recruitment process and access a wide pool of qualified candidates who are passionate about making a difference in Africa.</p>
                        <a href="register.php?jobCategory=employer" class="theme-btn btn-style-five">Register Account</a>
                    </div>
                    <figure class="image"><img src="images/resource/employer.png" alt=""></figure>
                </div>
            </div>

            <!-- Banner Style Two -->
            <div class="banner-style-two -type-2 col-lg-6 col-md-12 col-sm-12">
                <div class="inner-box" style="background-image:url('images/resource/bg-2.png')">
                    <div class="content">
                        <h3 class="color-dark-1">Candidate</h3>
                        <p class="color-dark-2">DevjobsAfrica provides Job Seekers the opportunity to search for and secure positions in Donor funded and Donor assisted Projects commensurate with their professional qualifications and experience.</p>
                        <a href="register.php?jobCategory=jobSeeker" class="theme-btn btn-style-five color-dark-1">Register Account</a>
                    </div>
                    <figure class="image"><img src="images/resource/job-seeker.png" alt=""></figure>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Registeration Banners -->

<!-- Top Companies -->
<section class="layout-pt-60 layout-pb-60">
    <div class="auto-container">
        <div class="row justify-content-between align-items-end">
            <div class="col-lg-6">
                <div class="sec-title mb-0">
                    <h2 class="color-blue-dark fw-700">Top Company Registered</h2>
                    <div class="text">Some of the companies we've helped recruit excellent applicants over the years.</div>
                </div>
            </div>
        </div>

        <div class="carousel-outer pt-50 wow fadeInUp">
            <div class="companies-carousel owl-carousel owl-theme default-dots">
                <!-- Company Block -->

                <?php

                if ($openings != null) {
                    foreach ($openings as $jobListing) {
                ?>

                        <div class="company-block">
                            <div class="inner-box">
                                <figure class="image"><img src="webadmin/images/job-listings/<?= $jobListing['image'] ?? 'default.png' ?>" alt="<?= $jobListing['title'] ?> | DevJobs Africa"></figure>
                                <h4 class="name"><?= substr($jobListing['company'], 0, 20) ?> ..</h4>
                                <div class="location"><i class="flaticon-map-locator"></i> <?= $jobListing['location'] ?? 'Nigeria' ?></div>
                                <a href="job-listings.php" class="theme-btn btn-dark-blue"><?= $record->countByCondition('jobs', 'company', $jobListing['company'], 'date', 'DESC') ?> Open Position</a>
                            </div>
                        </div>

                <?php
                    }
                }
                ?>
            </div>
        </div>
    </div>
</section>
<!-- End Top Companies -->

<!-- Clients Section -->
<section class="clients-section-two alternate layout-pt-120 layout-pb-60">
    <div class="auto-container">
        <div class="sponsors-outer wow fadeInUp">
            <!--Sponsors Carousel-->
            <ul class="sponsors-carousel owl-carousel owl-theme">
                <li class="slide-item">
                    <figure class="image-box"><a href="https://www.aefgroup.org"><img src="https://www.aefgroup.org/images/logo.png" alt="AEF | DevJobs Africa"></a></figure>
                </li>
                <li class="slide-item">
                    <figure class="image-box"><a href="https://aef-events.com"><img src="https://aef-events.com/images/logo-dark.png" alt="AEF Events | DevJobs Africa"></a></figure>
                </li>
                <li class="slide-item">
                    <figure class="image-box"><a href="https://vsafrica.org/"><img src="https://vsafrica.org/assets/vsa/vs-dark.png" alt="VSA | DevJobs Africa"></a></figure>
                </li>
                <li class="slide-item">
                    <figure class="image-box"><a href="https://aefid.org"><img src="https://aefid.org/images/logo2.png" alt="AEFID | DevJobs Africa"></a></figure>
                </li>
                <li class="slide-item">
                    <figure class="image-box"><a href="https://www.aefgroup.org"><img src="https://www.aefgroup.org/images/logo.png" alt="AEF | DevJobs Africa"></a></figure>
                </li>
                <li class="slide-item">
                    <figure class="image-box"><a href="https://aef-events.com"><img src="https://aef-events.com/images/logo-dark.png" alt="AEF Events | DevJobs Africa"></a></figure>
                </li>
                <li class="slide-item">
                    <figure class="image-box"><a href="https://vsafrica.org/"><img src="https://vsafrica.org/assets/vsa/vs-dark.png" alt="VSA | DevJobs Africa"></a></figure>
            </ul>
        </div>
    </div>
</section>
<!-- End Clients Section -->


<?php
include_once 'page-components/footer.php';
include_once 'page-components/scripts.php';
?>