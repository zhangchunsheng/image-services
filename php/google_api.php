<?php
	$url = "https://chart.googleapis.com/chart?cht=qr&chs=200x200";
	$chlurl = "http://www.luomor.com";
	$url .= "&chl=" . urlencode($chlurl);
	
	echo "<img src='$url'></img>";
?>