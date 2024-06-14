<?php
if (isset($_SESSION['jobUserWarningMessage'])) {
?>

    <div class="message-box warning">
        <p>Warning: <?php echo $_SESSION['jobUserWarningMessage']; ?></p>
    </div>

<?php
    unset($_SESSION['jobUserWarningMessage']);
}

if (isset($_SESSION['jobUserErrorMessage'])) {
?>

    <div class="message-box error">
        <p>Error: <?php echo $_SESSION['jobUserErrorMessage']; ?></p>
    </div>

<?php
    unset($_SESSION['jobUserErrorMessage']);
}

if (isset($_SESSION['jobUserInfoMessage'])) {
?>

    <div class="message-box info">
        <p>Info: <?php echo $_SESSION['jobUserInfoMessage']; ?></p>
    </div>

<?php
    unset($_SESSION['jobUserInfoMessage']);
}

if (isset($_SESSION['jobUserSuccessMessage'])) {
?>

    <div class="message-box success">
        <p>Success: <?php echo $_SESSION['jobUserSuccessMessage']; ?></p>
    </div>

<?php
    unset($_SESSION['jobUserSuccessMessage']);
}
?>