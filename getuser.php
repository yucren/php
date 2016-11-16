<?php
$servername ="yuchengren.oicp.io\ERP,17641";
$connectinfo=array("UID"=>"sa","PWD"=>"123.123.yu","Database"=>"AIS20160807175904");
$conn =sqlsrv_connect($servername,$connectinfo);
$stmt="{call dbo.getuserpass(?,?)}";
$hello2=str_repeat('a',20);
$myworld=iconv('utf-8','gbk','俞程仁');
$param=array(array($myworld,SQLSRV_PARAM_IN), array($hello2,SQLSRV_PARAM_OUT) );
$hello=sqlsrv_query($conn,$stmt,$param);
$dd=1;
sqlsrv_fetch($hello);
while ($hello2 ==str_repeat('a',20))
{

    sqlsrv_next_result($hello);

}
echo $hello2;


?>



