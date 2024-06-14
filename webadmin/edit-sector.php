<?php

require ('classes/functions.php');
$sector_id = $_GET["sId"];

authCheckById($sector_id, "view-sectors");

$title = "Edit Sector";
include_once ('components/head.php');
include_once ('components/nav-header.php');
include_once ('components/header.php');
include_once ('components/sidebar.php');

$sector = $record->getRecord("sectors", $sector_id);

?>

<!--**********************************
            Content body start
***********************************-->

<div class="content-body">
    <!-- row -->
    <div class="page-titles">
        <ol class="breadcrumb">
            <li>
                <h5 class="bc-title">Edit Sectors</h5>
            </li>
            <li class="breadcrumb-item"><a href="index.php">
                    <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M2.125 6.375L8.5 1.41667L14.875 6.375V14.1667C14.875 14.5424 14.7257 14.9027 14.4601 15.1684C14.1944 15.4341 13.8341 15.5833 13.4583 15.5833H3.54167C3.16594 15.5833 2.80561 15.4341 2.53993 15.1684C2.27426 14.9027 2.125 14.5424 2.125 14.1667V6.375Z"
                            stroke="#2C2C2C" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M6.375 15.5833V8.5H10.625V15.5833" stroke="#2C2C2C" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                    Home </a>
            </li>
        </ol>
        <a class="text-primary fs-13" href="view-sectors.php">View Sectors</a>
    </div>
    <div class="container-fluid">
        <div class="row">

            <?php include_once 'components/alert_messages.php' ?>

            <div class="col-xl-12 col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Edit this Sector</h4>
                    </div>
                    <div class="card-body">
                        <div class="basic-form">
                            <form action="classes/process.php?action=edit-sector" method="POST"
                                enctype="multipart/form-data">

                                <input type="hidden" name="sector_id" class="form-control"
                                    value="<?= $sector_id; ?>">

                                <div class="mb-3 row">
                                    <label class="col-sm-3 col-form-label">Name:</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="name" class="form-control"
                                            value="<?= $sector['name'] ?>" placeholder="Enter Name of Job sector"
                                            required>
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label class="col-sm-3 col-form-label">Description:</label>
                                    <div class="col-sm-9">
                                        <textarea class="form-txtarea form-control" name="description" rows="8"
                                            id="comment"><?= $sector['description'] ?></textarea>
                                    </div>
                                </div>


                                <div class="mb-3 row">
                                    <div class="col-sm-3">Status:</div>
                                    <div class="col-sm-9">
                                        <div class="form-check">
                                            <input class="form-check-input" <?= $sector['status'] == '1' ? 'checked' : '' ?> name="status" type="checkbox">
                                            <label class="form-check-label">
                                                Hidden
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <input type="hidden" name="author"
                                    value="<?= $_SESSION['user_data']['fullName'] ?? 'Anonymous' ?>">

                                <div class="my-3 row justify-content-center">
                                    <button type="submit" name="edit-sector" class="btn btn-primary">Edit this
                                        Sector</button>
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
include_once ('components/footer.php');
include_once ('components/scripts.php');
?>