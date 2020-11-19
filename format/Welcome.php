<?php session_start(); $title = "WELCOME"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once("./Header.php"); ?>
</head>
  <body>
    <div class="container">
      <div class = "row" style = "margin-top: 15%">
        <div class = "col-md-4 text-center mx-auto">
          <div class="card border-2 shadow">
            <div class="card-body">
              <h1 class="card-title">WELCOME</h1>
              <p>Welcome to the login page</p>
                <a href="Register.php" class="btn btn-lg btn-warning">REGISTER</a><hr>
                <a href="Login.php" class="btn btn-lg btn-warning">LOG IN</a>
            </div>
          </div>
        </div>  
      </div>
    </div>
  </body>
</html>
