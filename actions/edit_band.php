<?php
session_start ();
//open a file
$lines = file('../data/bands.csv',FILE_IGNORE_NEW_LINES);

//replace line with new data
$lines[$_POST['linenum']] = "{$_POST['band_name']},{$_POST['band_genre']},{$_POST['band_numalbums']}";

//make string to write file
$data_string = implode("\n",$lines);

//write string to the file in correct spot
$f = fopen('../data/bands.csv','w');
fwrite($f,$data_string);
fclose($f);

$_SESSION['message'] = array(
		'text' => 'Nice Job, You should have done it right the first time!',
		'type' => 'info'
);
header('Location:../?p=list_bands');
?>