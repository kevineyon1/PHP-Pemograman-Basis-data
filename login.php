<?php @session_start();
 /*
 di tulis oleh : CITRA
 */
unset($_SESSION['USER_NAME']);
if (ISSET($_SESSION['USER_NAME']))
 {
  header ("location:index1.php");
 }
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Login</title>
<style type="text/css">
<!--
.style1 {
 font-family: Geneva, Arial, Helvetica, sans-serif;
 font-weight: bold;
 font-size: 36px;
 color: #FF3300;
}
.style4 {font-family: Geneva, Arial, Helvetica, sans-serif; font-weight: bold; }
-->
</style>
</head>
<body>
<center>
<form id="form1" name="form1" method="post" action="proses_log.php">
<table width="400" border="1">
  <tr>
    <td colspan="3" align="center" valign="top" bgcolor="#000000"><span class="style1">Login</span></td>
  </tr>
  <tr>
    <td width="100"><span class="style4">USER_NAME</span></td>
    <td width="3"><span class="style4">:</span></td>
    <td width="275"><input name="USER_NAME" type="text" id="USER_NAME" /></td>
  </tr>
  <tr>
    <td><span class="style4">Password</span></td>
    <td><span class="style4">:</span></td>
    <td><input name="pass" type="password" id="pass" /></td>
  </tr>
  <tr>
    <td colspan="3" align="right"><input type="submit" name="Submit" value="Login" /></td>
  </tr>
</table>
</form>
</center>
</body>
</html>