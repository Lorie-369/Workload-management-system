<?php
$servername="localhost";
$username="root";
$userpassword="Sxq113884471.";
$conn=new mysqli($servername,$username,$userpassword);
mysqli_select_db($conn,'Working');
    session_start();
    $AcName=$_SESSION['AcName'];
    $AcTime=$_SESSION['AcTime'];
    $sql="SELECT * FROM Working_Workload WHERE AcName='$AcName' and AcTime='$AcTime' ";
    $query = mysql_query($sql);
    $row=mysql_fetch_assoc($query);
    $response=json.encode($row);
    echo $response;