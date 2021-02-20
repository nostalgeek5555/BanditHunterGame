<?php 
    header ('Access-Control-Allow-Origin *');
    $servername = "localhost";
    $dbname = "db_bandithunter";
    $dbuser = "root";
    $dbpassword = "";

    $db = mysqli_connect ($servername, $dbuser, $dbpassword, $dbname) or die('cant connect: ' . mysqli_error());
    $tokenID = mysqli_real_escape_string($db, $_GET['tokenid']);

    $query = "SELECT IFNULL ( (SELECT * FROM tb_user where tokenID='".$tokenID."'), 'not found')";
    $result = mysqli_query($db, $query) or die('insert failed: ' . mysqli_error());
    while($row = mysqli_fetch_array($result))
    {
      echo $row['tokenID'];
    }
    mysqli_close($con);
?>
