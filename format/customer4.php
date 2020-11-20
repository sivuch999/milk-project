<?php session_start(); $title = "Customer4"; $basePath = basename(__FILE__, '.php'); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include_once("./Header.php"); ?>
        <?php include_once('./service/connection.php'); ?>
        <LINK REL="SHORTCUT ICON" HREF="Q.png">
        <link rel="stylesheet" href="./css/css1.css" type = "text/css">
        <script src="./js/interval_time.js"></script>
    </head>
    <body>
        <form>
            <?php
                /*---------------------------------ConnectDB-------------------------------------------------------- 
                $host = 'localhost';
                $user = 'root';
                $password = '123456789';
                $database = 'project';
                $link=mysql_connect($Q);
                mysql_select_db($database,$link);
            /*---------------------------------------------------------------------------------------------------- 
                $fQ =$_REQUEST["number_q"];
                echo "$fnumber_q";
                $sql ="INSERT INTO q value" ('$fnumber_q');
                mysqli_set_charset($link,"utf8"); */
                date_default_timezone_set('Asia/Bangkok'); $today_date=date("d-M-Y");
            ?>
            <?php echo "Today is  $today_date "; ?><div class="demoarea" id="setinterval2"><span id="jq4uclock"></span></div>
            <div class="container">
                <div class="header" style="padding-top: 40px">
                    <font size="7" >WELCOME</font>
                    <div style = "margin-top: 100px">
                        <input type = text name = "Name" size="20" value="" placeholder="Name" required>
                    </div>
                    <div style = "margin-top: 40px">   
                        <input type = text name = "Name" size="20" value="" placeholder="Callnumber" required>
                    </div>
                    <div style = "margin-top:20px;">      
                        <button type="submit" class="buttonadd" value="" style="margin-right:33px">connect line</button>
                        <button type="reset" value="" class="buttoncancle">CANCLE</button>
                    </div>
                </div>   
            </div>
        </form>  
    </body>
</html>

<style lang="text/css">
    #jq4uclock {
        font-size: 17px;
        line-height: 17px;
    }
</style>