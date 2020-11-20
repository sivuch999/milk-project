<?php
    if (isset($_POST['submit'])) {
        $lineId = $_POST['lineId'];
        $checkCustomerId = "SELECT * FROM customer WHERE customer_ID = '$lineId'";
        $isHasId = $conn->query($checkCustomerId);
    }
?>