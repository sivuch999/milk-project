<?php session_start(); $title = "Profile"; $basePath = basename(__FILE__, '.php'); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include_once("./Header.php"); ?>
        <?php include_once('./service/connection.php'); ?>
        <?php include_once('./service/q/select_all.php'); ?>
        <script src="./js/interval_time.js"></script>
        <LINK REL="SHORTCUT ICON" HREF="Q.png">
    </head>

    <body>
        <center><button type="button" class="btn btn-warning" type=onsubmit action=customer2.php>กดเพื่อรับคิว</button></center>
    </body>
</html>