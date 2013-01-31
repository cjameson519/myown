<h2>Add a Band</h2>
<form class="form-horizontal" action="actions/add_band.php" method="post">
	<div class="control-group">
		<label class="control-label" for="band_name">Band Name</label>
		<div class="controls">
			<?php echo input('band_name','required')?>
		</div>
	</div>
	<div class="control-group">
		<label class="control-label" for="band_genre">Genre</label>
		<div class="controls">
			<?php echo input('band_genre','required')?>
		</div>
	</div>
	<div class="control-group">
		<label class="control-label" for="band_numalbums"># Albums</label>
		<div class="controls">
			<?php echo input('band_numalbums','required')?>
		</div>
	</div>
<?php //form submission methods, use $_GET or $_POST, $_GET you use when submitting something wont change the server state, $_Post you use if you are changing the Server?>
	<div class="form-actions">
		<button type="submit" class="btn btn-success"><i class="icon-plus-sign icon-white"></i>Submit</button>
		<button type="button" class="btn">Cancel</button>
	</div>
</form>
