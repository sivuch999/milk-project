<?php session_start(); $title = "ManageQueue"; ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <?php $rs = null; ?>
        <?php include_once("./Header.php"); ?>
        <?php include_once('./service/connection.php'); ?>
        <?php include_once('./service/manageQ_DB.php'); ?>
        <script src="./js/manageQ.js"></script>
    </head>
    <body>
        <h1><center>ManageQueue</center> </h1>

        <form name= "searchq" action="" method="post" align = "center">
            <label>ค้นหาคิว :</label>
            <input type="search" name="searchqueue" id="chsearch" onblur="checksearch()">
            <input type="submit" name=submitqueue value="searchforqueue" >
        </form>
                    
        <br>
        
        <form action="" method="post">
            <table align = "center" valign = "bottom" border = "1" width = "50%">
                <tr>
                    <th>คิว</th>
                    <th>ชื่อ</th>
                    <th>time</th>
                    <th>จำนวนลูกค้า</th>
                    <!-- <th>สถานะ</th> -->
                    <th>edit</th>
                    <th>cancel</th>
                </tr> 
        <?php if (isset($rs) && !empty($rs)) { ?>
            <?php while($rowsearch = mysqli_fetch_array($rs)){ ?>
                <tr>
                    <td><?php echo $rowsearch['Q']; ?> </td>    
                    <td><?php echo $rowsearch['customer_ID']; ?></td>
                    <td><?php echo $rowsearch['queue_date']; ?></td>
                    <td><?php echo $rowsearch['customer_quantity']; ?></td>
                    <!-- <td><?php echo $rowsearch['status']; ?></td> -->
                    <td align = center>แก้ไข</td>
                    <td align = center>ยกเลิก</td>
                </tr>
            <?php } ?>
        <?php } ?>
            </table>

        </form>

    </body>
</html>