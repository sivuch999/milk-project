<?php
    if(isset($_POST['submit']))
    {
        $restaurantname = $_POST['restaurantname'];
        $fullname = $_POST['fullname'];
        $address = $_POST['address'];
        $phonenumber = $_POST['phonenumber'];
        $email= $_POST['email'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $confirmpassword = $_POST['confirmpassword'];

        $sql = "INSERT INTO restaurant(restaurantname, fullname, address, phonenumber, email, username, password) 
                VALUES('".$_POST['restaurantname']."',
                        '".$_POST['fullname']."',
                        '".$_POST['address']."',
                        '".$_POST['phonenumber']."',
                        '".$_POST['email']."',
                        '".$_POST['username']."',
                        '".$_POST['password']."')";

        if ($conn->query($sql) == TRUE) {
            echo "<script>alert('REGISTER COMPLETE!!!!');window.location.href='./Login.php';</script>";
        }else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        $conn->close();       
    }
?>