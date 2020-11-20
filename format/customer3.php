<?php session_start(); $title = "Customer3"; ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include_once("./Header.php"); ?>
        <?php include_once('./service/connection.php'); ?>
        <?php include_once('./service/customer/select_by_line.php');
            if (isset($isHasId) && !empty($isHasId)) {
                print_r($isHasId);
                if ($isHasId->num_rows > 0) {
                    header("Location: customer4.php");
                } 
            }
        ?>
        <script src="http://www.jacklmoore.com/colorbox/jquery.colorbox.js"></script>
        <link rel="stylesheet" href="http://www.jacklmoore.com/colorbox/example1/colorbox.css" />
        <script src="./js/customer_3.js"></script>
    </head>

    <body>
        <div class="container mt-5">
            <div class="col-lg-12 text-center">
                <div class="row d-flex justify-content-center">
                    <div class="card">
                        <div class="card-header text-center">
                            Line information
                        </div>
                        <div class="card-body">
                            <form action="" method="POST" onsubmit="closePopup();">
                                <div class="form-group">
                                    <!-- <label>Enter amount of person:</label> -->
                                    <div class="input-group flex-nowrap">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="addon-wrapping">Line id</span>
                                        </div>
                                        <input name="lineId" type="text" class="form-control" min="1" placeholder="Enter your line id" aria-describedby="addon-wrapping" required />
                                    </div>
                                </div>
                                <input class="btn btn-primary" type="submit" name="submit" />
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </body>

</html>