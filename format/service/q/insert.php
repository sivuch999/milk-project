<?php
  if (isset($_POST['submit'])) {
    $amount = $_POST['Amount'];
    $addQueueStatement = "INSERT INTO q (queue_date, queue_time, customer_quantity, Q) VALUES (NOW(), NOW(), NULL, '$amount')";
    if ($addQueueResult = $conn->query($addQueueStatement)) {
      $lastestAddRecordId = $conn->insert_id;
      header("Location: customer3.php");
    }
  }

  if (isset($_POST['cancel'])) {
    header("Location: Thanks.php");
  }
?>