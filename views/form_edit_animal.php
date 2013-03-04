<?php
//read all lines into an array 
$lines = file('data/own.csv',FILE_IGNORE_NEW_LINES);
//get it into he query string
$parts = explode(',',$lines[$_GET['animal']]);

?>

<h2>Edit an Animal</h2>
<form class="form-horizontal" action="actions/edit_animal.php" method="post">
	<input type="hidden" name="linenum" value="<?php echo $_GET['animal']?>" />
	<div class="control-group">
		<label class="control-label" for="animal_name">Animal Name</label>
		<div class="controls">
			<?php echo input('animal_name','required', $parts[0])?>
		</div>
	</div>
	<div class="control-group">
		<label class="control-label" for="animal_found">Where the animal is found</label>
		<div class="controls">
			<?php echo input('animal_found','required', $parts[1])?>
		</div>
	</div>
	<div class="control-group">
		<label class="control-label" for="animal_end">Endangered?</label>
		<div class="controls">
			<?php echo input('animal_end','required', $parts[2])?>
		</div>
	</div>
	<div class="control-group">
		<label class="control-label" for="animal_des">Animal description</label>
		<div class="controls">
			<?php echo input('animal_des','required', $parts[3])?>
		</div>
	</div>
<?php //form submission methods, use $_GET or $_POST, $_GET you use when submitting something wont change the server state, $_Post you use if you are changing the Server?>
	<div id="sub" class="form-actions">
		<button type="submit" class="btn btn-success"><i class="icon-plus-sign icon-white"></i>Edit Animal</button>
		<a href="./?p=list_animals"><button type="button" class="btn">Cancel</button></a>
	</div>
</form>
