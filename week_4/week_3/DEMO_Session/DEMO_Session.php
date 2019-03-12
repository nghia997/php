<?php session_start(); 
	$_SESSION['name'] = "Name sesion";
	if(isset($_GET['btDelete'])){
		session_unset();
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Session</title>
</head>
<body>
<form action="DEMO_Session.php" method="get">
	<!--Check Session 'counter' are exist or not-->
	<?= (isset($_SESSION['name'])) ? 'Session <b>' . $_SESSION['name'] .
	'<br/><button name="btDelete">Xóa Session</button>' : 'Session đã bị xóa..'?>
</form>
</body>
</html>	