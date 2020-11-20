<?php
  $getQueueFromDB = "SELECT count(*) AS 'lastestQueue' FROM q WHERE DATE(queue_date) = CURDATE()";
  $result = $conn->query($getQueueFromDB);
?>