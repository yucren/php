<?php
/**
 * Created by PhpStorm.
 * User: user001
 * Date: 2016-11-15
 * Time: 12:50
 */
$sername="192.168.0.188\ERP,8000";
$connectinfo=array("UID"=>"sa","PWD"=>"123.123.yu","Database"=>"a");
$conn =sqlsrv_connect($sername,$connectinfo);
if ($conn)
{
    echo "连接成功";
    echo "<br>";
    echo "请接下你的工作";
}
else{

    die(print_r(sqlsrv_errors()));
}
sqlsrv_close($conn);
?>
<html>
<head>
   <title>my php web</title>
    <meta charset="utf-8">
</head>
<body>
<p>hello world</p>
</body>


</html>
