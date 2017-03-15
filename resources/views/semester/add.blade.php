@extends('layouts.app')
	<script type='text/javascript' src='/js/vendor/plugins/bootstrap-datepicker.js'></script>
	<script type='text/javascript' src='/js/semesterAdd.js'></script>


<nav id ="searchStudent">
	<div id="container"> 
	<div class="navbar">
		<div class="navbar-inner">
			<a class="brand" href="#">Add Semester</a>
		
			<form class="navbar-form pull-right">
				<a type="button" class="btn" href="/settings">return</a>
			</form>
		</div>
	</div>
	<form id="add-student-form" method ="POST">
		<h1>Add Semester</h1>
		<?php if (!empty($this->semester['error'])): ?>
			<div>
				<?php echo $this->semester['error']; ?>
			
			</div>
		<?php endif; ?> 

		<h3 id="input"></h3>
		<input id="date_start" data-date-format="yyyy-mm-dd" type="text" name="date_start" onchange="checkInput();" value="" /> Date Start<br/>
		<input id="date_end" data-date-format="yyyy-mm-dd" type="text" name="date_end" onchange="checkInput();" value="" /> Date End<br/>
		
		<input class="btn" id="button_save" type="submit" name="save" value="save" disabled />		

	</div>
</nav>	
</form>
<script type='text/javascript'>
	$('#date_start').datepicker();
	$('#date_end').datepicker();
</script>	

