<?php
	$mac=$_POST['mac'];
	$ip=$_POST['ip'];
	$username=$_POST['username'];
	$linklogin=$_POST['link-login'];
	$linkorig=$_POST['link-orig'];
	$error=$_POST['error'];
?>
<html>
<body>
<h2>Logintest.php Test</h2>
Mac: <?php echo $mac ?><br>
IP: <?php echo $ip ?><br>
Username: <?php echo $username ?><br>
Link-login: <?php echo $linklogin ?><br>
Link-orig: <?php echo $linkorig ?><br>
Error: <?php echo $error ?><br>
</body>
</html>
