<?php session_start(); $title = "Profile"; ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include_once("./Header.php"); ?>
        <?php include_once('./service/connection.php'); ?>
        <?php include_once('./service/restaurant/select_all.php'); ?>
    </head>
    <body>
        <center><h1>PROFILE</h1></center>
        <?php
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<div class = 'container'>";
                        echo "<div class = 'row justify-content-center'>";
                            echo "<div class = 'col-md-6 '>";
                                echo "<div class='card border-2 shadow'>";
                                    echo "<div class='card-body'>";
                                        echo "<div class = 'from-group'>";
                                            echo "<div class='row'>";
                                                echo "<div class = 'col-md-6 '>";
                                                    echo "<label><b>RESTAURANT NAME</b></label>";  
                                                echo "</div>"; 
                                                
                                                echo "<div class = 'col-md-6 '>";
                                                    echo "<label>" .$row['restaurantname']. "</label>";
                                                echo "</div>";
                                            echo "</div>";
                                        echo "</div>";
                                        echo "<hr>";
                                        
                                        echo "<div class = 'from-group'>";
                                            echo "<div class='row'>";
                                                echo "<div class = 'col-md-6 '>";
                                                    echo "<label><b>FULL NAME</b></label>";  
                                                echo "</div>"; 
                                                
                                                echo "<div class = 'col-md-6 '>";
                                                    echo "<label>" .$row['fullname']. "</label>";
                                                echo "</div>";
                                            echo "</div>";
                                        echo "</div>";
                                        echo "<hr>";

                                        echo "<div class = 'from-group'>";
                                            echo "<div class='row'>";
                                                echo "<div class = 'col-md-6 '>";
                                                    echo "<label><b>ADDRESS</b></label>";  
                                                echo "</div>"; 
                                            
                                                echo "<div class = 'col-md-6 '>";
                                                    echo "<label>" .$row['address']. "</label>";
                                                echo "</div>";
                                            echo "</div>";
                                        echo "</div>";
                                        echo "<hr>";

                                        echo "<div class = 'from-group'>";
                                            echo "<div class='row'>";
                                                echo "<div class = 'col-md-6 '>";
                                                    echo "<label><b>PHONE NUMBER</b></label>";  
                                                echo "</div>"; 
                                            
                                                echo "<div class = 'col-md-6 '>";
                                                    echo "<label>" .$row['phonenumber']. "</label>";
                                                echo "</div>";
                                            echo "</div>";
                                        echo "</div>";
                                        echo "<hr>";

                                        echo "<div class = 'from-group'>";
                                            echo "<div class='row'>";
                                                echo "<div class = 'col-md-6 '>";
                                                    echo "<label><b>E-MAIL</b></label>";  
                                                echo "</div>"; 
                                            
                                                echo "<div class = 'col-md-6 '>";
                                                    echo "<label>" .$row['email']. "</label>";
                                                echo "</div>";
                                            echo "</div>";
                                        echo "</div>";
                                        echo "<hr>";

                                        echo "<div class = 'from-group'>";
                                            echo "<div class='row'>";
                                                echo "<div class = 'col-md-6 '>";
                                                    echo "<label><b>USERNAME</b></label>";  
                                                echo "</div>"; 
                                            
                                                echo "<div class = 'col-md-6 '>";
                                                    echo "<label>" .$row['username']. "</label>";
                                                echo "</div>";
                                            echo "</div>";
                                        echo "</div>";
                                        echo "<hr>";

                                        echo "<div class = 'from-group'>";
                                            echo "<div class='row'>";
                                                echo "<div class = 'col-md-6 '>";
                                                    echo "<label><b>PASSWORD</b></label>";  
                                                echo "</div>"; 
                                        
                                                echo "<div class = 'col-md-6 '>";
                                                    echo "<label>" .$row['password']. "</label>";
                                                echo "</div>";
                                            echo "</div>";
                                        echo "</div>";
                                        echo "<hr>";

                                        echo "<center><button type='submit' class='btn btn-lg btn-dark' name='edit'>EDIT</button></center>";

                                    echo "</div>";
                                echo "</div>";
                            echo "</div>";
                        echo "</div>";
                    echo "</div>";
                
                //echo "id:".$row["Customer_id"]." - Name: ".$row["Customer_Name"]." ".$row["Customer_Lastname"]."<br>";
            
                }
            } else {
                echo "<tr><td colspan='6'><center>ไม่มีข้อมูล</center></td></tr>";
            } 
            echo "</table>";
        ?>
    </body>
</html>