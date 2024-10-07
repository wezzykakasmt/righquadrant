<?php
session_start();

session_destroy();


echo "<script>alert('Signing Out..');
			setTimeout(function() {
				window.location.href='login.php';
				}, 1000);
	  </script>";
	  exit;

?>