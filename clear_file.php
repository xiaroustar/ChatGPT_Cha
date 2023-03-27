<?php
if (isset($_POST['file_path'])) {
	$file = $_POST['file_path'];
	if (file_exists($file)) {
		unlink($file);
	}
}
?>
