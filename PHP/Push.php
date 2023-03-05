<?php
    session_start();
    $params=json_decode(urldecode($_POST['ajax']));
    $_SESSION['AcName']=$params['AcName'];
    $_SESSION['AcTime']=$params['AcTime'];
    $_SESSION['ID']=$params['ID'];