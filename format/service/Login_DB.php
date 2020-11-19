<?php
    session_start();
    include_once('./connection.php');
    if(isset($_POST['login'])){
        $username = $_POST['username'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM restaurant 
        WHERE username = '".$username."'
        AND password = '".$password."' ";

        $result = $conn->query($sql);

        if ($result->num_rows == 0) {
            echo "<script> alert('USERNAME OR PASSWORD INVALID!!!');window.location.href='../Login.php';</script>";
        } else {
            header("Location:../Home.php");
        }   
    }
?>