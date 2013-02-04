<?php
session_start ();
//open a file
$lines = file('../data/own.csv',FILE_IGNORE_NEW_LINES);

//replace line with new data
unset($lines[$_GET['linenum']]);

//make string to write file
$data_string = implode("\n",$lines);

//write string to the file in correct spot
$f = fopen('../data/own.csv','w');
fwrite($f,$data_string);
fclose($f);

$_SESSION['message'] = array(
		'text' => 'The animal no longer exists, nice going, you killed off an entire race.',
		'type' => 'warning'
);
header('Location:../?p=list_animals');
//
?>