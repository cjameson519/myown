<?php
session_start ();
//open a file
$lines = file('../data/own.csv',FILE_IGNORE_NEW_LINES);

//replace line with new data
$lines[$_POST['linenum']] = "{$_POST['animal_name']},{$_POST['animal_found']},{$_POST['animal_end']},{$_POST['animal_des']}";

//make string to write file
$data_string = implode("\n",$lines);

//write string to the file in correct spot
$f = fopen('../data/own.csv','w');
fwrite($f,$data_string);
fclose($f);

$_SESSION['message'] = array(
		'text' => 'Nice Job, You should have done it right the first time!',
		'type' => 'info'
);
header('Location:../?p=list_animals');
?>