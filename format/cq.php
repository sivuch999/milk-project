<?php session_start(); $title = "Confirm_Q"; $basePath = basename(__FILE__, '.php'); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include_once("./Header.php"); ?>
        <link rel="stylesheet" href="./css/Login.css" />
    </head>
    <body>
        <?php
            date_default_timezone_set('Asia/Bangkok');
            $today_date=date("d-M-Y");
            $today_time=date("h:i:s: a");
            echo "<b>Today is </b> $today_date $today_time";
        ?>
        <form>
            <p>
                <label for="q">คิวที่ </label>
                <input type="q" name="q" class="form-control">
            </p>
            <button type="submit" class="btn btn-success">บันทึก</button>
        </form>

        <?php
            echo"mooooongaaa";
        ?>

    </body>
</html>