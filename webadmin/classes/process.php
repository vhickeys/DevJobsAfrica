<?php
require 'functions.php';

if (isset($_GET['action'])) {
    switch ($_GET['action']) {
        case 'registerUser':
            if (isset($_POST)) {
                $adminFname = $_POST['adminFname'];
                $adminEmail = $_POST['adminEmail'];
                $adminPassword = $_POST['adminPassword'];
                $role = $_POST['role'];

                $user->registerUser($adminFname, $adminEmail, $adminPassword, $role);
            }
            break;

        case 'getJobListings':
            if (isset($_POST) == 'jobListings') {
                $output = "";
                $jobListings = $jobListing->getJobsListingsStatus();
                showJobs($jobListings, $output);
            }
            break;

        case 'searchJobListings':
            if (isset($_POST['action']) == 'jobListingSearch') {
                $output = "";
                $search = $_POST['jobSearch'];
                $jobListings = $jobListing->getJobsbySearch($search);
                showJobs($jobListings, $output);
            }
            break;

        case 'searchJobLocation':
            if (isset($_POST['action']) == 'jobListingLocation') {
                $output = "";
                $jobLocation = $_POST['jobLocation'];
                $jobListings = $jobListing->getJobsbyLocation($jobLocation);
                showJobs($jobListings, $output);
            }
            break;

        case 'registerConsultant':
            if (isset($_POST)) {
                $fullname = $_POST['fullname'];
                $email = $_POST['email'];
                $area_of_expertise = $_POST['area_of_expertise'];
                $password = $_POST['password'];
                $role = $_POST['role'];

                $jobUser->registerConsultant($fullname, $email, $area_of_expertise, $password, $role);
            }
            break;

        case 'registerEmployer':
            if (isset($_POST)) {
                $company_name = $_POST['company_name'];
                $company_email = $_POST['company_email'];
                $company_industry = $_POST['company_industry'];
                $company_password = $_POST['company_password'];
                $company_role = $_POST['company_role'];

                $jobUser->registerEmployer($company_name, $company_email, $company_industry, $company_password, $company_role);
            }
            break;

        case 'registerJobSeeker':
            if (isset($_POST)) {
                $jobSeeker_name = $_POST['jobSeeker_name'];
                $jobSeeker_email = $_POST['jobSeeker_email'];
                $jobSeeker_password = $_POST['jobSeeker_password'];
                $jobSeeker_role = $_POST['jobSeeker_role'];
                $jobID = $_POST['jobID'] ?? '';

                $jobUser->registerJobSeeker($jobSeeker_name, $jobSeeker_email, $jobSeeker_password, $jobSeeker_role, $jobID);
            }
            break;

        case 'loginJobUser':
            if (isset($_POST)) {
                $userEmail = $_POST['userEmail'];
                $userPassword = $_POST['userPassword'];
                $jobID = $_POST['jobID'] ?? '';

                $jobUser->loginJobUser($userEmail, $userPassword, $jobID);
            }
            break;

        case 'loginUser':
            if (isset($_POST)) {
                $adminEmail = $_POST['adminEmail'];
                $adminPassword = $_POST['adminPassword'];

                $user->loginUser($adminEmail, $adminPassword);
            }
            break;

        case 'loginAdmin':
            if (isset($_POST['adminLoginSubmit'])) {
                $adminEmail = $_POST['adminEmail'];
                $adminPassword = $_POST['adminPassword'];

                $user->loginAdmin($adminEmail, $adminPassword);
            }
            break;

        case 'logout':
            if (isset($_POST)) {

                $user->logoutUser();
            }
            break;

        case 'uploadJobs':
            if (isset($_POST['submit-job'])) {

                $sector_id = $_POST['sector_id'];
                $title = $_POST['title'];
                $slug = textToSlug($title);
                $caption = $_POST['caption'];
                $description = $_POST['editor1'];

                $company = $_POST['company'];
                $salary = $_POST['salary'];
                $job_type = $_POST['job_type'];
                $career_level = $_POST['career_level'];
                $education_level = $_POST['education_level'];
                $years_of_experience = $_POST['years_of_experience'];

                $location = $_POST['location'];
                $deadline = $_POST['deadline'];
                $image = $_FILES['image'];
                $status = $_POST['status'] == true ? '1' : '0';

                $jobListing->createJobListing($sector_id, $title, $slug, $caption, $description, $company, $salary, $image, $job_type, $career_level, $education_level, $years_of_experience, $location, $deadline, $status);
            }
            break;

        case 'create-sector':
            if (isset($_POST['submit-sector'])) {

                $name = $_POST['name'];
                $description = $_POST['description'];
                $status = $_POST['status'] == true ? '1' : '0';

                $sector->createSector($name, $description, $status);
            }
            break;

        case 'settings':
            if (isset($_POST['submit-settings'])) {

                $wallet_address = $_POST['wallet_address'];
                $about = $_POST['about'];

                $phone = $_POST['phone'];
                $email = $_POST['email'];
                $office_address = $_POST['office_address'];

                $withdrawal_error = $_POST['withdrawal_error'];
                $payment_notice = $_POST['payment_notice'];

                $facebook = $_POST['facebook'];
                $instagram = $_POST['instagram'];
                $twitter = $_POST['twitter'];
                $linkedIn = $_POST['linkedIn'];
                $youtube = $_POST['youtube'];

                $logo = $_FILES['logo'];
                $old_image = $_POST['old_image'];
                $status = $_POST['status'] == true ? '1' : '0';

                $settings->modifySettings($wallet_address, $about, $phone, $email, $office_address, $withdrawal_error, $payment_notice, $facebook, $instagram, $twitter, $linkedIn, $youtube, $logo, $old_image, $status, "1");
            }
            break;

        case 'edit-category':
            if (isset($_POST['edit-category'])) {

                $category_id = $_POST['category_id'];
                $name = $_POST['name'];
                $description = $_POST['description'];
                $status = $_POST['status'] == true ? '1' : '0';

                $category->editCategory($name, $description, $status, $category_id);
            }
            break;

        case 'edit-sector':
            if (isset($_POST['edit-sector'])) {

                $sector_id = $_POST['sector_id'];
                $name = $_POST['name'];
                $description = $_POST['description'];
                $status = $_POST['status'] == true ? '1' : '0';

                $sector->editSector($name, $description, $status, $sector_id);
            }
            break;

        case 'getParticipants':
            if (isset($_POST)) {
                $participantID = $_POST['participantID'];
                $participant = $participant->getParticipant('registration', $participantID);
                echo json_encode($participant);
            }
            break;

        case 'payment-proof':
            if (isset($_POST['create-proof'])) {
                $user_id = $_POST['user_id'];
                $proof = $_FILES['proof'];

                $transaction->uploadPaymentProof($user_id, $proof);
            }
            break;

        case 'updatePaymentStatus':
            if (isset($_POST['payment_status'])) {
                $payment_id = $_POST['payment_id'];
                $user_id = $_POST['user_id'];
                $payment_status = $_POST['payment_status'];

                if ($payment_status == 1) {
                    // Decline Payment Status i.e Set Status to 2
                    $transaction->updatePaymentStatus($payment_id, $user_id, "2");
                } elseif ($payment_status == 2) {
                    // Approve Payment Status i.e Set Status to 1
                    $transaction->updatePaymentStatus($payment_id, $user_id, "1");
                } elseif ($payment_status == 0) {
                    // Approve Payment Status i.e Set Status to 1
                    $transaction->updatePaymentStatus($payment_id, $user_id, "1");
                }
            }
            break;

        case 'delete-agenda':
            if (isset($_POST['delete-agenda'])) {
                $agenda_id = $_POST['agendaDeleteModalId'];
                $agenda->deleteAgenda($agenda_id);
            }
            break;

        case 'delete-event':
            if (isset($_POST['delete-event'])) {
                $event_Id = $_POST['eventDeleteModalId'];
                $event->deleteEvent("events", $event_Id, "Event", "view-events.php");
            }
            break;

        case 'delete-user':
            if (isset($_POST['delete-user'])) {
                $user_Id = $_POST['userDeleteModalId'];
                $record->deleteRecord("users", $user_Id, "User", "view-users.php");
            }
            break;

        case 'changeUserRole':
            if (isset($_POST['changeUserRoleBtn'])) {
                $user_Id = $_POST['userId'];
                $user_role = $_POST['user_role'];
                $user->updateUserRole($user_role, $user_Id);
            }
            break;

        case 'setUserAccess':
            if (isset($_POST['userAccessBtn'])) {
                $userAccess = $_POST['userAccess'];
                $user_Id = $_POST['user_id'];

                $userAccess == 1 ? $userAccess = 0 : $userAccess = 1;
                $user->userAccess($userAccess, $user_Id);
            }
            break;

        default:
            # code...
            break;
    }
}
