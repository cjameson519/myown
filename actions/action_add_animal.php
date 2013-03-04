<?php  session_start() ?>
<?php 
//validate that each piece of info was provided
if($_POST['animal_name'] != '' &&
	$_POST['animal_found'] != '' &&
	$_POST['animal_end'] != '' &&
	$_POST['animal_des'] != '') {
	// add this band to the csv file
	// 1.open the file
	$f = fopen('../data/own.csv','a');
	// 2.write the bands info
	fwrite($f, "\n{$_POST['animal_name']},{$_POST['animal_found']},{$_POST['animal_end']},{$_POST['animal_des']}");
	// 3. close the file
	fclose($f);
	//redirect
	header('Location:../?p=list_animals');
} else {
	//store data into session data
	$_SESSION['POST'] = $_POST;
	
	//store error message
	$_SESSION['message'] = array(
			'text' => 'Why did you not put in all the infomation, you got something to hide? Run now, for Chuck Norris has been notified and he is in pursuit!',
			'type' => 'danger'
	);
	//redirect the form
	header('Location:../?p=add_animal');
}
?>