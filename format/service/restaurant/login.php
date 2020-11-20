<?php
    if(isset($_POST['login'])){
        $username = $_POST['username'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM restaurant 
        WHERE username = '".$username."'
        AND password = '".$password."' ";

        $_SESSION["login"] = true;

        $result = $conn->query($sql);
    }
?>