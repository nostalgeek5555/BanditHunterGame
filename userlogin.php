<?php
    header ('Access-Control-Allow-Origin *');
    $servername = "localhost";
    $dbuser = "root";
    $dbpassword = "";
    $dbname = "db_bandithunter";
    
    $tokenID = $_GET['tokenid'];
    $con = mysqli_connect($servername, $dbuser, $dbpassword, $dbname);
    // Check connection
    if (mysqli_connect_errno())
    {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    $qz = "SELECT tokenID FROM tb_user where tokenID= $tokenID" ;
    $qz = str_replace("\'","",$qz);
    $result = mysqli_query($con,$qz);
    
    while($row = mysqli_fetch_array($result))
    {
        echo $row['tokenID'];
    }
    mysqli_close($con);
?>