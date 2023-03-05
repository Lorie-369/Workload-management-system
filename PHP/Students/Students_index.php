<?php
    //获取已填报工作量数据
$servername="localhost";
$username="root";
$userpassword="Sxq113884471.";
$conn=new mysqli($servername,$username,$userpassword);
mysqli_select_db($conn,'Working');
    session_start();
    $ID=$_SESSION['ID'];
    $sql="SELECT * FROM Working_Workload WHERE ID='$ID' ";
    $query = mysql_query($sql);
    $array = array();
    while($rows=mysql_fetch_assoc($query)){
    $array[] = $rows;
    }
    mysqli_close($conn);
    $response=json.encode($array);
    echo $response;