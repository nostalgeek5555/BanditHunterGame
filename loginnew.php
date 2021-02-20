<?php 
    header ('Access-Control-Allow-Origin *');
    $servername = "localhost";
    $dbname = "db_bandithunter";
    $dbuser = "root";
    $dbpassword = "";
    
    $tokenID = $_GET['tokenid'];
    $db = mysqli_connect ($servername, $nostal, $dbpassword, $dbname) or die('cant connect: ' . mysqli_error());
    

    $query = $db->prepare ("INSERT INTO tb_user (tokenID) VALUES ( ?)");
    $query->bind_param('s', $tokenID);
    $result = mysqli_query($db, $query) or die('insert failed: ' . mysqli_error());

?>
