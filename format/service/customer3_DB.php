<?php
    if (isset($_POST['submit'])) {
        $lineId = $_POST['lineId'];
        $checkCustomerId = "SELECT * FROM customer WHERE customer_ID = '$lineId'";
        $isHasId = $conn->query($checkCustomerId);
        if ($isHasId->num_rows == 0) {
            // echo $isHasId->num_rows;
            // echo "Id not exsited";
            header("Location: customer4.php");
        } else {
            // echo $isHasId->num_rows;
            // echo "Id existed";
        }
        // echo $lineId;
    }
?>