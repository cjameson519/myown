<?php
//display message
if(isset($_SESSION['message'])) {
	echo "<div class=\"alert alert-{$_SESSION['message']['type']}\">{$_SESSION['message']['text']}</div>";
	
	unset($_SESSION['message']);
}
//store the p parameter from the query string into a variable
//CWD = current working directory is the file directory of the file being served
//file paths are not relitive to the current work directory
if(isset($_GET['p'])) {
	$p = $_GET['p'];
} else {
	$p = 'list_bands';
}

include("views/$p.php");