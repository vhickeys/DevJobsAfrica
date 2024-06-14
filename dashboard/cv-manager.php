<?php

require_once '../webadmin/classes/functions.php';
authRoleCheckJobUser('employer', '../login', 'index', 'You are not authorized to access this page. Not an Employer!');

$page_title = 'CV Manager';
$current_page = 'cv-manager.php';

include_once 'page-components/dashboard-header.php';
include_once 'page-components/dashboard-main-header.php';
include_once 'page-components/dashboard-sidebar.php';

?>

<!-- Dashboard -->
<section class="user-dashboard">
    <div class="dashboard-outer">
        <div class="upper-title-box">
            <h3>Cv Manager</h3>
            <div class="text">Ready to jump back in?</div>
        </div>
        <div class="row">

            <div class="col-lg-12">
                <!-- CV Manager Widget -->
                <div class="cv-manager-widget ls-widget">
                    <div class="widget-title">
                        <h4>Cv Manager</h4>
                    </div>
                    <div class="widget-content">
                        <div class="uploading-resume">
                            <div class="uploadButton">
                                <input class="uploadButton-input" type="file" name="attachments[]" accept="image/*, application/pdf" id="upload" multiple />
                                <label class="cv-uploadButton" for="upload">
                                    <span class="title">Drop files here to upload</span>
                                    <span class="text">To upload file size is (Max 5Mb) and allowed file types are (.doc, .docx, .pdf)</span>
                                    <span class="theme-btn btn-style-one">Upload Resume</span>
                                </label>
                                <span class="uploadButton-file-name"></span>
                            </div>
                        </div>

                        <div class="files-outer">
                            <div class="file-edit-box">
                                <span class="title">Sample CV</span>
                                <div class="edit-btns">
                                    <button><span class="la la-pencil"></span></button>
                                    <button><span class="la la-trash"></span></button>
                                </div>
                            </div>

                            <div class="file-edit-box">
                                <span class="title">Sample CV</span>
                                <div class="edit-btns">
                                    <button><span class="la la-pencil"></span></button>
                                    <button><span class="la la-trash"></span></button>
                                </div>
                            </div>

                            <div class="file-edit-box">
                                <span class="title">Sample CV</span>
                                <div class="edit-btns">
                                    <button><span class="la la-pencil"></span></button>
                                    <button><span class="la la-trash"></span></button>
                                </div>
                            </div>
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