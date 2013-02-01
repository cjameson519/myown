<h2>Add an Animal</h2>
<form class="form-horizontal" action="actions/action_add_animal.php" method="post">
	<div class="control-group">
		<label class="control-label" for="animal_name">Animal Name</label>
		<div class="controls">
			<?php echo input('animal_name','required')?>
		</div>
	</div>
	<div class="control-group">
		<label class="control-label" for="animal_found">Where the animal is found.</label>
		<div class="controls">
			<?php echo input('animal_found','required')?>
		</div>
	</div>
	<div class="control-group">
		<label class="control-label" for="animal_end">Endangered?</label>
		<div class="controls">
			<?php echo input('animal_end','required')?>
		</div>
	</div>
	<div class="control-group">
		<label class="control-label" for="animal_des">Description</label>
		<div class="controls">
			<?php echo input('animal_des','required')?>
		</div>
	</div>
<?php //form submission methods, use $_GET or $_POST, $_GET you use when submitting something wont change the server state, $_Post you use if you are changing the Server?>
	<div class="form-actions">
		<button type="submit" class="btn btn-success"><i class="icon-plus-sign icon-white"></i>Submit</button>
		<a href="./?p=list_animals"><button type="button" class="btn">Cancel</button></a>
	</div>
</form>
