<?php @session_start();
  /*
 di tulis oleh : ANDHIKA NUR AFIAN
 */
//cek ketersediaan session yang ada
if (ISSET($_SESSION['USER_NAME']))
 {
 echo "Login Berhasil.."."<br />";
 echo "Anda Login Sebagai"." : ".$_SESSION['USER_NAME']."<br />";
 echo "<a href='login.php'>Logout</a>"."<br />";
 }
else
 {
 unset($_SESSION['USER_NAME']);
 echo "<script type='text/javascript'>alert('Silahkan Login dahulu!');document.location='login.php'</script>";
 }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Index1</title>
<style type="text/css">
<!--
.style4 {
 font-family: Geneva, Arial, Helvetica, sans-serif;
 font-weight: bold;
 font-size: 36px;
 color: #FF3300;
}
-->
</style>
</head>
<body>
<span class="style4">Welcome...</span>
</body>
</html>