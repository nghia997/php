<?php
	$to = "nghiaph1997@gmail.com";
	$subject = "My subject";
	$txt = "あなたの成功を祈ります";
	$headers = "From: nghiaph1997@gmail.com";
	if (mb_send_mail($to,$subject,$txt,$headers)) {
		echo "Submitted successfully!";
	}
	else {
		echo "Send failed!";
	}
?>
