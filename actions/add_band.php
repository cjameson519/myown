<?php  session_start() ?>
<?php 
//validate that each piece of info was provided
if($_POST['band_name'] != '' &&
	$_POST['band_genre'] != '' &&
	$_POST['band_numalbums'] != '') {
	// add this band to the csv file
	// 1.open the file
	$f = fopen('../data/bands.csv','a');
	// 2.write the bands info
	fwrite($f, "\n{$_POST['band_name']},{$_POST['band_genre']},{$_POST['band_numalbums']}");
	// 3. close the file
	fclose($f);
	//redirect
	header('Location:../?p=list_bands');
} else {
	//store data into session data
	$_SESSION['POST'] = $_POST;
	
	//store error message
	$_SESSION['message'] = 'Why did you not put in all the infomation, you got something to hide? Run now, for Chuck Norris has been notified and he is in pursuit!';
	//redirect the form
	header('Location:../?p=add_bands');
}
?>