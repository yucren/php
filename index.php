<?php
/**
 * Created by PhpStorm.
 * User: yu861
 * Date: 2016-11-16
 * Time: 20:54
 */ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>欢迎访问，请登录谢谢你的帮助</title>
</head>
<body>
<form action="getuser.php" method="post" enctype="multipart/form-data">
    <table align="center" border="1px" cellpadding="5px" cellspacing="10px" bgcolor="#f0ffff">

        <tr>
            <th colspan="2">欢迎登录</th>
        </tr>
        <tr>
            <td><label for="user">用户名</label></td>
            <td><input type="text" name="user" id="user" maxlength="20" required="required"></td>
        </tr>
        <tr>
            <td><label for="passworld">密码</label></td>
            <td><input type="password" name="passworld" id="passworld" maxlength="20" required="required"></td>

        </tr>
        <tr>

            <td colspan="2" align="center"><input type="submit" value="提交"></td>

        </tr>



    </table>

</form>

</body>
</html>
