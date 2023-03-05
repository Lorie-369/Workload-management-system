<?php
    //管理端用以获取没有写好工资的数据并修改
$servername="localhost";
$username="root";
$userpassword="Sxq113884471.";
$conn=new mysqli($servername,$username,$userpassword);
mysqli_select_db($conn,'Working');
    session_start();
    $sql="SELECT * FROM Working_Workload WHERE Condition='未审核'";
    $query = mysql_query($sql);
    $array = array();
    while($rows=mysql_fetch_assoc($query)){
        $array[] = $rows;
    }
    mysqli_close($conn);
    $response=json.encode($array);
    echo $response;