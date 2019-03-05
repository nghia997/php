<?php
	require('session.php');
	$session = new session();
	// Set to true if using https
	$session->start_session('_s', false);

	$_SESSION['something'] = 'Pham Huu Nghia';
	echo 'Kết quả Session : '. $_SESSION['something'];
?>		