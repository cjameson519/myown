<h2>All Animals</h2>
<table class='table table-striped'>
	<tr>
		<th>Name</th>
		<th>Found In</th>
		<th>Endangered</th>
		<th>Description</th>
		<th>Edit / Delete</th>
	</tr>
<?php 
// read all line of csv file into an array
// the file function in php makes an array
$lines = file('data/own.csv',FILE_IGNORE_NEW_LINES);
// iterate over the array of lines
//counter variable for line number
$i = 0;

foreach($lines as $line) {
	$parts = explode(',',$line);
	$name = $parts[0];	
	$genre = $parts[1];
	$end = $parts[2];
	$des = $parts[3];
	echo '<tr>';
	echo "<td>$name</td>";
	echo "<td>$genre</td>";
	echo "<td>$end</td>";
	echo "<td>$des</td>";
	echo "<td><a class='btn btn-warning' href=\"./?p=form_edit_animal&animal=$i\"> <i class='icon-wrench icon-white'></i> </a> <a class='btn btn-danger' href=\"actions/delete_animal.php?linenum=$i\"><i class='icon-trash icon-white'></i></a></td>";
	echo '</tr>';
	
	$i++; // increment line number
}
?>
</table>