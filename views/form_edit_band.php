<?php
//read all lines into an array 
$lines = file('data/bands.csv',FILE_IGNORE_NEW_LINES);
//get it into he query string
$band = explode(',',$lines[$_GET['band']]);

?>

<h2>Edit a Band</h2>
<form class="form-horizontal" action="actions/edit_band.php" method="post">
	<input type="hidden" name="linenum" value="<?php echo $_GET['band']?>" />
	<div class="control-group">
		<label class="control-label" for="band_name">Band Name</label>
		<div class="controls">
			<?php echo input('band_name','required', $band[0])?>
		</div>
	</div>
	<div class="control-group">
		<label class="control-label" for="band_genre">Genre</label>
		<div class="controls">
			<?php echo input('band_genre','required', $band[1])?>
		</div>
	</div>
	<div class="control-group">
		<label class="control-label" for="band_numalbums"># Albums</label>
		<div class="controls">
			<?php echo input('band_numalbums','required', $band[2])?>
		</div>
	</div>
<?php //form submission methods, use $_GET or $_POST, $_GET you use when submitting something wont change the server state, $_Post you use if you are changing the Server?>
	<div class="form-actions">
		<button type="submit" class="btn btn-success"><i class="icon-plus-sign icon-white"></i>Edit Band</button>
		<button type="button" class="btn">Cancel</button>
	</div>
</form>
