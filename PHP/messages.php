<?php
$servername="localhost";
$username="root";
$userpassword="Sxq113884471.";
$conn=new mysqli($servername,$username,$userpassword);
mysqli_select_db($conn,'Working');
    $sql="SELECT * FROM Message";
    $table=mysqli_fetch_all(mysqli_query($conn.$sql));
    mysqli_close();
    $response=$table[0][messages];