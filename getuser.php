<?php
session_start();
$loginuser =$_POST['user'];
$user = iconv('utf-8','gbk',$_POST['user']) ;
$password= $_POST['passworld'];
$servername ="yuchengren.oicp.io\ERP,17641";
$connectinfo=array("UID"=>"sa","PWD"=>"123.123.yu","Database"=>"AIS20160807175904");
$conn =sqlsrv_connect($servername,$connectinfo);
$stmt="{call dbo.getuserpass(?,?)}";
$hello2=str_repeat('a',20);
$param=array(array($user,SQLSRV_PARAM_IN), array($hello2,SQLSRV_PARAM_OUT) );
$hello=sqlsrv_query($conn,$stmt,$param);
$dd=1;
sqlsrv_fetch($hello);
while ($hello2 ==str_repeat('a',20))
{

    sqlsrv_next_result($hello);
}
$stmtuser="SELECT top(1) fname FROM t_user where fname = ?";
$userarray=array($user);
$k3user=sqlsrv_query($conn,$stmtuser,$userarray);
$row=sqlsrv_fetch_array($k3user);


if ( $row[0]==$user and $password==$hello2)
{
    echo '登录成功';
    echo session_name();
    echo "<br>";
    echo session_id();
     $webaddress = "welcome.php?".session_name().'='.session_id();
    echo "<meta http-equiv=\"refresh\" content=\"1;url=$webaddress\">";
    $_SESSION['user']=$loginuser;
}
else{
    echo '用户名或者密码不对，请重新登录';
}
sqlsrv_close($conn);



?>



