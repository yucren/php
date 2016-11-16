<?php
/**
 * Created by PhpStorm.
 * User: yu861
 * Date: 2016-11-16
 * Time: 22:15
 */ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>上海光线新材料科技有限公司</title>
</head>
<body>
<?php
$sesss_name=session_name();
$sess_id=$_GET[$sesss_name];
session_start();
$user=$_SESSION['user'];

?>
<h1 align="center">欢迎用户：<?=$user?>   访问上海光线新材料有限公司官网</h1>

</body>
</html>
