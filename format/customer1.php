<?php session_start(); $title = "Customer1"; $basePath = basename(__FILE__, '.php'); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
      <?php include_once("./Header.php"); ?>
      <?php include_once('./service/connection.php'); ?>
      <?php include_once('./service/q/insert.php'); ?>
      <?php include_once('./service/q/select_count.php'); ?>
      <LINK REL="SHORTCUT ICON" HREF="Q.png">
      <script src="./js/interval_time.js"></script>
  </head>

  <body>
    <div class="container">
      <!-- Trigger the modal with a button -->
      <center><button type="button" class="btn btn-warning btn-lg" data-toggle="modal" data-target="#myModal">กดเพื่อรับคิว</button></center>
    </div>

    <!-- My Modal -->
    <div class="modal fade" id="myModal" role="dialog">
      <div class="modal-dialog">
        
        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <div class="container">
              <div class="col-lg-12 text-center">
                <div class="row d-flex justify-content-center my-3">
                  <!--clock -->
                  <div class="demoarea" id="setinterval2"><span id="jq4uclock"></span></div>
                </div> 
                  
                <!--show queue -->
                <div class="row d-flex justify-content-center my-3">
                  <div class="card">
                    <div class="card-header">Your waiting queue</div>
                    <div class="card-body text-center">
                      <?php
                        if ($result->num_rows > 0) {
                          $data = $result->fetch_row();
                          $queue = $data[0] + 1;
                          echo $queue;
                        } else {
                          echo("Connection not alive");
                        }
                      ?>
                    </div>
                  </div>
                </div>

                  <div class="row d-flex justify-content-center my-3">
                    <form action="" method="POST">
                      <div class="form-group">
                        <!-- <label>Enter amount of person:</label> -->
                        <div class="input-group flex-nowrap">
                          <div class="input-group-prepend">
                            <span class="input-group-text" id="addon-wrapping">Enter amount of person</span>
                          </div>
                          <input name="Amount" type="number" class="form-control" min="1" placeholder="Amount of people" aria-describedby="addon-wrapping"/>
                        </div>
                      </div>
                      <input name="submit" type="submit" value="Place queue" class="btn btn-primary" />
                      <a name="cancel" value="Cancel" class="btn btn-primary" href="./Thanks.php">Cancel</a>
                    </form>
                  </div>
              </div>
            </div>
          </div>
        </div>
          
      </div>
    </div>
      
  </body>
</html>

<style lang="text/css">
  #jq4uclock {
    font-size: 42px;
    line-height: 42px;
  }
</style>