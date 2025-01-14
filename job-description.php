<?php

require_once 'webadmin/classes/functions.php';
pageCheckBySlug($_GET['devJob'], 'index');
$devJob = $_GET['devJob'];

$page_title = "Job Description";
include_once 'page-components/header.php';
include_once 'page-components/main-header.php';

$jobContent = $jobListing->getJobContent($devJob);

?>

<!-- Job Detail Section -->
<section class="job-detail-section at-jsv7">
    <!-- Upper Box -->
    <div class="upper-box">
        <div class="auto-container pt-5">
            <!-- Job Block -->
            <div class="job-block-seven at-jsv7">
                <div class="inner-box row">
                    <div class="col-lg-8">
                        <div class="position-relative">
                            <!-- <div class="tags">
                                <a class="flaticon-bookmark" href="#"></a>
                            </div> -->
                            <div class="content ps-0">
                                <div class="d-sm-flex align-items-center">
                                    <figure class="image mb-sm-0"><img class="rounded-circle w60" src="images/resource/company-logo/3-1.png" alt=""></figure>
                                    <div class="ms-0 ms-sm-3">
                                        <h4 class="fz20 mb-0"><a href="#">Software Engineer (Android), Libraries</a></h4>
                                        <p>by <span class="fw500 text">CreativeLayers</span> in Design & Creative</p>
                                    </div>
                                </div>
                                <ul class="job-other-info d-sm-flex ms-0 at-jsv7 mt30">
                                    <li class="time">Full Time</li>
                                    <li class="time2">London, UK</li>
                                    <li class="time2">11 hours ago</li>
                                    <li class="time2">450 - $900/month</li>
                                    <li class="time2">847 (views)</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="text-lg-end">
                            <div class="titles mb-3 mb-sm-0">
                                <h4 class="fz20 fw500 mb-1">Application Ends</h4>
                                <p class="text mb15"><?= date('d M, Y', strtotime($jobContent['deadline'])) ?></p>
                            </div>
                            <div class="btn-box justify-content-lg-end mb-0">

                                <?php if (!isset($_SESSION['user_data']['fullName']) && !isset($_SESSION['user_data']['email'])) : ?>
                                    <a href="register.php?jobCategory=jobSeeker&jobID=<?= $jobContent['id'] ?>" class="theme-btn btn-style-one w-100">Apply For Job <i class="fal fa-long-arrow-right ms-3"></i></a>
                                <?php else : ?>
                                    <a href="dashboard/applied-jobs.php" class="theme-btn btn-style-one w-100">Apply For Job <i class="fal fa-long-arrow-right ms-3"></i></a>
                                <?php endif ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="job-detail-outer">
        <div class="auto-container">
            <div class="row">
                <div class="content-column col-lg-8 col-md-12 col-sm-12">
                    <div class="job-detail">
                        <h4 class="fz30 fw500">Description</h4>

                        <?= $jobContent['description'] ?>

                        <!-- <p class="text">As a Product Designer, you will work within a Product Delivery Team fused with UX, engineering, product and data talent. You will help the team design beautiful interfaces that solve business challenges for our clients. We work with a number of Tier 1 banks on building web-based applications for AML, KYC and Sanctions List management workflows. This role is ideal if you are looking to segue your career into the FinTech or Big Data arenas.</p>
                        <h4>Key Responsibilities</h4>
                        <ul class="list-style-three">
                            <li class="dark-color">Be involved in every step of the product design cycle from discovery to developer handoff and user acceptance testing.</li>
                            <li class="dark-color">Work with BAs, product managers and tech teams to lead the Product Design</li>
                            <li class="dark-color">Maintain quality of the design process and ensure that when designs are translated into code they accurately reflect the design specifications.</li>
                            <li class="dark-color">Accurately estimate design tickets during planning sessions.</li>
                            <li class="dark-color">Contribute to sketching sessions involving non-designersCreate, iterate and maintain UI deliverables including sketch files, style guides, high fidelity prototypes, micro interaction specifications and pattern libraries.</li>
                            <li class="dark-color">Ensure design choices are data led by identifying assumptions to test each sprint, and work with the analysts in your team to plan moderated usability test sessions.</li>
                            <li class="dark-color">Design pixel perfect responsive UI’s and understand that adopting common interface patterns is better for UX than reinventing the wheel</li>
                            <li class="dark-color">Present your work to the wider business at Show & Tell sessions.</li>
                        </ul>
                        <h4>Skill & Experience</h4>
                        <ul class="list-style-three">
                            <li class="dark-color">You have at least 3 years’ experience working as a Product Designer.</li>
                            <li class="dark-color">You have experience using Sketch and InVision or Framer X</li>
                            <li class="dark-color">You have some previous experience working in an agile environment – Think two-week sprints.</li>
                            <li class="dark-color">You are familiar using Jira and Confluence in your workflow</li>
                        </ul> -->
                    </div>
                    <hr class="opacity-100">

                    <!-- Job Skill -->
                    <div class="job-skill-widget mb30">
                        <h5 class="fz18 fw500">Job Skill</h5>
                        <ul class="job-other-info at-jsv7 bottom d-sm-flex align-items-center mt20">
                            <li class="time bg-gray">Marketing Jobs</li>
                            <li class="time2">Designer</li>
                            <li class="time2">Engimeering</li>
                            <li class="time2">Developer</li>
                            <li class="time2">Security Jobs</li>
                        </ul>
                    </div>

                    <!-- Application Ends -->
                    <div class="application-end-widget">
                        <div class="d-sm-flex justify-content-sm-between">
                            <div class="titles mb-3 mb-sm-0">
                                <h4 class="fz20 fw500">Application ends</h4>
                                <p class="text"><?= date('d M, Y', strtotime($jobContent['deadline'])) ?></p>
                            </div>
                            <div class="btn-box mb-0">
                                <a href="#" class="theme-btn btn-style-one">Apply For Job <i class="fal fa-long-arrow-right ms-3"></i></a>
                            </div>
                        </div>
                    </div>

                    <!-- Related Jobs -->
                    <div class="related-jobs">
                        <div class="title-box">
                            <h3>Similar jobs</h3>
                            <div class="text">2020 jobs live - 293 added today.</div>
                        </div>

                        <!-- Job Block -->
                        <div class="job-block at-jsv6">
                            <div class="inner-box">
                                <div class="tags d-flex align-items-center">
                                    <a class="far fa-crown" href="#"></a>
                                    <a class="far fa-bolt" href="#"></a>
                                    <a class="flaticon-bookmark" href="#"></a>
                                </div>
                                <div class="content ps-0">
                                    <div class="d-sm-flex align-items-center">
                                        <figure class="image mb-sm-0"><img class="rounded-circle w60" src="images/resource/company-logo/3-1.png" alt=""></figure>
                                        <div class="ms-0 ms-sm-3">
                                            <h4 class="fz20 mb-0"><a href="#">Software Engineer (Android), Libraries</a></h4>
                                            <p>by <span class="fw500 text">CreativeLayers</span> in Design & Creative</p>
                                        </div>
                                    </div>
                                    <ul class="job-other-info d-sm-flex ms-0 at-jsv6 mt30">
                                        <li class="time">Full Time</li>
                                        <li class="time2">London, UK</li>
                                        <li class="time2">11 hours ago</li>
                                        <li class="time2">450 - $900/month</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="sidebar-column col-lg-4 col-md-12 col-sm-12">
                    <aside class="sidebar">
                        <div class="sidebar-widget at-jsv7">
                            <h4 class="widget-title">Job Overview</h4>
                            <div class="widget-content">
                                <ul class="job-overview at-sv5">
                                    <li>
                                        <i class="icon flaticon-title"></i>
                                        <div class="ml15">
                                            <h5>Qualification</h5>
                                            <span>Bachelor Degree</span>
                                        </div>
                                    </li>
                                    <li>
                                        <i class="icon fal fa-circle-dollar"></i>
                                        <div class="ml15">
                                            <h5>Offered Salary</h5>
                                            <span>$150 - $180 / week</span>
                                        </div>
                                    </li>
                                    <li>
                                        <i class="icon flaticon-map-locator"></i>
                                        <div class="ml15">
                                            <h5>Hiring location</h5>
                                            <span>London, UK</span>
                                        </div>
                                    </li>
                                    <li>
                                        <i class="icon icon-calendar"></i>
                                        <div class="ml15">
                                            <h5>Date Posted</h5>
                                            <span>Posted 1 hours ago</span>
                                        </div>
                                    </li>
                                    <li>
                                        <i class="icon flaticon-profit"></i>
                                        <div class="ml15">
                                            <h5>Career Level</h5>
                                            <span>Officer</span>
                                        </div>
                                    </li>
                                    <li>
                                        <i class="icon far fa-mars"></i>
                                        <div class="ml15">
                                            <h5>Gender</h5>
                                            <span>Both</span>
                                        </div>
                                    </li>
                                    <li>
                                        <i class="icon flaticon-man"></i>
                                        <div class="ml15">
                                            <h5>Experience</h5>
                                            <span>4-8 Year</span>
                                        </div>
                                    </li>
                                    <li>
                                        <i class="icon fal fa-hourglass-end"></i>
                                        <div class="ml15">
                                            <h5>Expiration date</h5>
                                            <span>April 06, 2021</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="d-grid mb15">
                                <a href="#" class="ud-btn-transparent">Send Message</a>
                            </div>
                            <div class="text-center">
                                <div class="social-link-style1">
                                    <a class="me-3" href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a class="me-3" href="#"><i class="fab fa-twitter"></i></a>
                                    <a class="me-3" href="#"><i class="fab fa-instagram"></i></a>
                                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="sidebar-widget company-widget at-jsv6">
                            <div class="widget-content">
                                <div class="company-title">
                                    <div class="company-logo"><img src="images/resource/company-7.png" alt=""></div>
                                    <h5 class="company-name">InVision</h5>
                                    <a href="#" class="profile-link">View company profile</a>
                                </div>
                                <ul class="company-info">
                                    <li>Primary industry: <span>Software</span></li>
                                    <li>Company size: <span>501-1,000</span></li>
                                    <li>Founded in: <span>2011</span></li>
                                    <li>Phone: <span>123 456 7890</span></li>
                                    <li>Email: <span>info@joio.com</span></li>
                                    <li>Location: <span>London, UK</span></li>
                                </ul>
                                <div class="btn-box"><a href="#" class="theme-btn btn-style-three">www.invisionapp.com</a></div>
                                <div class="d-grid mb15 mt20">
                                    <a href="#" class="ud-btn-transparent">Send Message</a>
                                </div>
                                <div class="text-center">
                                    <div class="social-link-style1">
                                        <a class="me-3" href="#"><i class="fab fa-facebook-f"></i></a>
                                        <a class="me-3" href="#"><i class="fab fa-twitter"></i></a>
                                        <a class="me-3" href="#"><i class="fab fa-instagram"></i></a>
                                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="p-0">
                            <!-- Job Skills -->
                            <h4 class="widget-title fz18 mb25 fw500">Location</h4>
                            <div class="widget-content">
                                <div class="map-outer">
                                    <div class="map-canvas at-sv5" data-zoom="12" data-lat="-37.817085" data-lng="144.955631" data-type="roadmap" data-hue="#ffc400" data-title="Envato" data-icon-path="images/icons/contact-map-marker.png" data-content="Melbourne VIC 3000, Australia<br><a href='mailto:info@youremail.com'>info@youremail.com</a>">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Job Detail Section -->

<?php
include_once 'page-components/footer.php';
include_once 'page-components/scripts.php';
?>