<?php

require('classes/functions.php');

authCheck();

$title = "Create Jobs";
include_once('components/head.php');
include_once('components/nav-header.php');
include_once('components/header.php');
include_once('components/sidebar.php');

$sectors = $record->getRecordsByStatus('sectors', '0');

?>

<!--**********************************
            Content body start
***********************************-->

<div class="content-body">
    <!-- row -->
    <div class="page-titles">
        <ol class="breadcrumb">
            <li>
                <h5 class="bc-title">Create Jobs</h5>
            </li>
            <li class="breadcrumb-item"><a href="index.php">
                    <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2.125 6.375L8.5 1.41667L14.875 6.375V14.1667C14.875 14.5424 14.7257 14.9027 14.4601 15.1684C14.1944 15.4341 13.8341 15.5833 13.4583 15.5833H3.54167C3.16594 15.5833 2.80561 15.4341 2.53993 15.1684C2.27426 14.9027 2.125 14.5424 2.125 14.1667V6.375Z" stroke="#2C2C2C" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M6.375 15.5833V8.5H10.625V15.5833" stroke="#2C2C2C" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    Home </a>
            </li>
        </ol>
        <a class="text-primary fs-13" href="view-jobs.php">View Jobs</a>
    </div>
    <div class="container-fluid">
        <div class="row">
            <?php
            include_once 'components/alert_messages.php';
            ?>

            <div class="col-xl-12 col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Create Jobs</h4>
                    </div>
                    <div class="card-body">
                        <div class="basic-form">
                            <form action="classes/process.php?action=uploadJobs" method="POST" enctype="multipart/form-data">

                                <div class="mb-3 row">
                                    <label class="col-sm-3 col-form-label">Job Sectors:</label>
                                    <div class="col-sm-9">
                                        <select class="default-select form-control wide" name="sector_id" tabindex="null" required>
                                            <option value="">-- Select Sectors --</option>
                                            <?php
                                            foreach ($sectors as $sector) {
                                                $sector_id = $sector['id'];
                                                $sector_name = $sector['name'];
                                            ?>

                                                <option value='<?= $sector_id ?>'>
                                                    <?= $sector_name ?>
                                                </option>

                                            <?php
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>

                                <div class="mb-3 row mt-3">
                                    <label class="col-sm-3 col-form-label">Title:</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="title" class="form-control" placeholder="Enter Job Title" value="" required>
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label class="col-sm-3 col-form-label">Caption:</label>
                                    <div class="col-sm-9">
                                        <textarea class="form-txtarea form-control" name="caption" rows="5" id="comment" required></textarea>
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label class="col-sm-3 col-form-label">Description:</label>
                                    <div class="col-sm-9">
                                        <textarea class="form-txtarea form-control" name="editor1" rows="8" id="comment" required></textarea>
                                    </div>
                                </div>

                                <hr class="my-5">

                                <h4>Other Job Details</h4>

                                <div class="mb-3 row mt-3">
                                    <label class="col-sm-3 col-form-label">Name of Organization:</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="company" class="form-control" placeholder="Enter Name of Organization" value="">
                                    </div>
                                </div>

                                <div class="mb-3 row mt-3">
                                    <label class="col-sm-3 col-form-label">Salary:</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="salary" class="form-control" placeholder="Enter Job Salary" value="">
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label class="col-sm-3 col-form-label">Job Type:</label>
                                    <div class="col-sm-9">
                                        <select class="default-select form-control wide" name="job_type" tabindex="null" required>
                                            <option value="">-- Select Job Type --</option>
                                            <?php
                                            $jobTypes = [
                                                'Contract',
                                                'Full time',
                                                'Internship',
                                            ];
                                            foreach ($jobTypes as $jobType) {
                                            ?>

                                                <option value='<?= $jobType ?>'>
                                                    <?= $jobType ?>
                                                </option>

                                            <?php
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label class="col-sm-3 col-form-label">Career Level:</label>
                                    <div class="col-sm-9">

                                        <select class="default-select form-control wide" name="career_level" tabindex="null" required>
                                            <option value="">-- Select Job Type --</option>
                                            <?php
                                            $careerLevels = [
                                                'Entry Level',
                                                'Mid-Level',
                                                'Junior Level',
                                                'Senior Level',
                                                'Professional',
                                            ];
                                            foreach ($careerLevels as $careerLevel) {
                                            ?>

                                                <option value='<?= $careerLevel ?>'>
                                                    <?= $careerLevel ?>
                                                </option>

                                            <?php
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label class="col-sm-3 col-form-label">Education Level:</label>
                                    <div class="col-sm-9">
                                        <select class="default-select form-control wide" name="education_level" tabindex="null" required>
                                            <option value="">-- Select Education Level --</option>
                                            <?php
                                            $educationalLevels = [
                                                'Associate Degree',
                                                'Bachelors Degree',
                                                'Masters Degree',
                                                'PHD',
                                            ];
                                            foreach ($educationalLevels as $educationalLevel) {
                                            ?>

                                                <option value='<?= $educationalLevel ?>'>
                                                    <?= $educationalLevel ?>
                                                </option>

                                            <?php
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label class="col-sm-3 col-form-label">Years of Experience:</label>
                                    <div class="col-sm-9">

                                        <select class="default-select form-control wide" name="years_of_experience" tabindex="null" required>
                                            <option value="">-- Select Years of Experience --</option>
                                            <?php
                                            $experienceLevels = [
                                                '< 1 Year',
                                                '1 Year',
                                                '2 Years',
                                                '3 Years',
                                                '4 Years',
                                                '5+ Years',
                                                '10+ Years',
                                            ];
                                            foreach ($experienceLevels as $experienceLevel) {
                                            ?>

                                                <option value='<?= $experienceLevel ?>'>
                                                    <?= $experienceLevel ?>
                                                </option>

                                            <?php
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>

                                <div class="mb-3 row mt-3">
                                    <label class="col-sm-3 col-form-label">Location:</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="location" class="form-control" placeholder="Enter Job Location" value="">
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label class="col-sm-3 col-form-label">Expiration Date:</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="deadline" class="form-control mdate" value="2024-06-02" placeholder="2024-06-02" data-dtp="dtp_qKeaw">
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label for="formFile" class="col-sm-3">Job Image:</label>
                                    <div class="col-sm-9">
                                        <div class="mb-3">
                                            <p class="text-danger"><small>You cannnot upload images greater than
                                                    500KB*</small></p>
                                            <input class="form-control" name="image" type="file" id="formFile">
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <div class="col-sm-3">Status:</div>
                                    <div class="col-sm-9">
                                        <div class="form-check">
                                            <input class="form-check-input" name="status" type="checkbox">
                                            <label class="form-check-label">
                                                Hidden
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <input type="hidden" name="author" value="<?= $_SESSION['user_data']['fullName'] ?? 'Anonymous' ?>">

                                <div class="my-3 row justify-content-center">
                                    <div class="col-sm-3"></div>
                                    <div class="col-sm-9">
                                        <button type="submit" name="submit-job" class="btn btn-primary w-100">Upload
                                            Job</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--**********************************
            Content body end
***********************************-->

<?php
include_once('components/footer.php');
include_once('components/scripts.php');
?>