<?php
session_start ();
//open a file
$lines = file('../data/bands.csv',FILE_IGNORE_NEW_LINES);

//replace line with new data
unset($lines[$_GET['linenum']]);

//make string to write file
$data_string = implode("\n",$lines);

//write string to the file in correct spot
$f = fopen('../data/bands.csv','w');
fwrite($f,$data_string);
fclose($f);

$_SESSION['message'] = array(
		'text' => 'The band no longer exists, nice going noob, ruined it for everyone you jerk.',
		'type' => 'error'
);
header('Location:../?p=list_bands');
//
?>