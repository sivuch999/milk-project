<?php session_start(); $title = "Login"; ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include_once("./Header.php"); ?>
        <?php include_once('./service/connection.php'); ?>
        <?php
            include_once('./service/restaurant/login.php');
            if (isset($result) && !empty($result)) {
                if ($result->num_rows == 0) {
                    echo "<script> alert('USERNAME OR PASSWORD INVALID!!!');window.location.href='./Login.php';</script>";
                } else {
                    header("Location:./Home.php");
                }
            }
            
        ?>
        <link rel="stylesheet" href="./css/Login.css" />
    </head>
    <body>
            <div class="container h-100">
                <div class="d-flex justify-content-center h-100">
                
                    <div class="user_card">
                        <div class="d-flex justify-content-center">
                            <div class="brand_logo_container">
                            <img src="https://i.pinimg.com/564x/11/d1/84/11d18400bfc45558d548749aee9f15c9.jpg" class="brand_logo" alt="Logo">
                        </div>
                    </div>

                    <div class="d-flex justify-content-center form_container">
                        <form method = "POST" action="">
                            <div class="input-group mb-3">
                                <div class="input-group-append">
                                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                                </div>
                                <input type="text" name="username" class="form-control input_user" value="" placeholder="username">
                            </div>
                            <div class="input-group mb-2">
                                <div class="input-group-append">
                                    <span class="input-group-text"><i class="fas fa-key"></i></span>
                                </div>
                                <input type="password" name="password" class="form-control input_pass" value="" placeholder="password">
                            </div>
                            <div class="form-group">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customControlInline">
                                    <label class="custom-control-label" for="customControlInline">Remember me</label>
                                </div>
                            </div>
                                <div class="d-flex justify-content-center mt-3 login_container">
                         <button type="submit" name="login" class="btn login_btn">LOGIN</button>
                       </div>
                        </form>
                    </div>
            
                    <div class="mt-4">
                        <div class="d-flex justify-content-center links">
                            Don't have an account? <a href="#" class="ml-2">Sign Up</a>
                        </div>
                        <div class="d-flex justify-content-center links">
                            <a href="#">Forgot your password?</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </body>
</html>