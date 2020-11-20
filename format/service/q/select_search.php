<?php 
    $searchqueue = "";
    if(isset($_POST['submitqueue']) && !empty($_POST['searchqueue']) ){ $searchqueue = "WHERE Q = ".$_POST['searchqueue']; }
    $rssql = "SELECT * FROM q $searchqueue ";
    $rs = mysqli_query($conn,$rssql);
?>