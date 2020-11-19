<!DOCTYPE html>
<html>
    <head>

    </head>

    <body>
        <?php
            include_once('connection.php');
            
            if(isset($_POST['search'])){
                $searchq = $_POST['searchq'];
                $sql = "SELECT * FROM q WHERE queue_max = '$searchq' ";
                $result = mysqli_query($conn,$sql);

                while($row = mysqli_fetch_array($result)){ ?>
                    <form action="" method="POST">
                        <table align = "center" border = "1px" style = "width:60px; line-heigh:40px;">
                            <t>
                                <th>Q</th>
                                <th>queue_max</th>
                                <th>customer_ID</th>
                                <th>queue_date</th>
                                <th>customer_quantity</th>
                            </t>
                            <tr>
                                <td><?php echo $row['queue_max']; ?> </td>    
                                <td><?php echo $row['customer_ID']; ?></td>
                                <td><?php echo $row['queue_date']; ?></td>
                                <td><?php echo $row['queue_time']; ?></td>
                                <td><?php echo $row['customer_quantity']; ?></td>
                            </tr>
                        </table>
                    </form>
                    
              <?php  } 
            }?>

    </body>

</html>