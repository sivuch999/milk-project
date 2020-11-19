<?php
  if (isset($_POST['submit'])) {
    $amount = $_POST['Amount'];
    // INSERT INTO q (queue_date, customer_quantity) VALUES (NOW(), $amount)
    $addQueueStatement = "INSERT INTO q (queue_date, queue_time, customer_quantity, Q) VALUES (NOW(), NOW(), NULL, '$amount')";
    // echo $addQueueStatement;
    // $addQueueResult = $conn->query($addQueueStatement);
    if ($addQueueResult = $conn->query($addQueueStatement)) {
      $lastestAddRecordId = $conn->insert_id;
      header("Location: customer3.php");
    } else {
      echo "else";
    }
  }
  if (isset($_POST['cancel'])) {
    header("Location: Thanks.php");
  }

  $getQueueFromDB = "SELECT count(*) AS 'lastestQueue' FROM q WHERE DATE(queue_date) = CURDATE()";
  $result = $conn->query($getQueueFromDB);
?>