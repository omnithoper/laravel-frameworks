@extends('layouts.app')
<script src="/js/semester.js"></script>
<script type='text/javascript' src='js/vendor/plugins/bootstrap-datepicker.js'></script>

<nav id ="searchStudent">
	<div id="container">
	<div class="navbar">
			<div class="navbar-inner">
				<a class="brand" href="#">Settings</a>
		
				<form class="navbar-form pull-right">
				  	<a type="button" class="btn" href="/">return</a>
				</form>
			</div>
		</div>
	<form>
	
		<table class="table table-bordered table-condensed table-striped">
			<tr>
				<th>Number Of Allowed Units</th>
				<th>Price/Unit</th>
				<th>Price/labunit</th>
				<th>Price Of Misc</th>
			</tr>
			@foreach($setting as $details)
				<tr>
				<td align="center"><?php echo $details['number_of_allowed_units']; ?></td>
				<td align="center"><?php echo $details['price_per_unit']; ?></td>
				<td align="center"><?php echo $details['price_per_lab_unit']; ?></td>
				<td	align="center"><?php echo $details['price_of_misc']; ?></td>
				</tr>
		    @endforeach
		</table>	
	</form>
		<br/>
		<br/>
	<form>
			
		<table class="table table-bordered table-condensed table-striped">
			<a class="pull-right btn btn-success" 
				href="/semester/add">
				<i class="icon-plus"></i>
			</a>
			<tr>
				<th>Semester ID</th>
				<th>Date Start</th>
				<th>Date End</th>
				<th>Details</th>
				<th>Edit</th>
				<th>Delete</th>
			</tr>

			<tr>
			@foreach($semester as $details)				
				<td align="center"><?php echo $details['semester_id']; ?></td>
				<td align="center"><?php echo $details['date_start']; ?></td>
				<td align="center"><?php echo $details['date_end']; ?></td>
				
				</tr>	
		   @endforeach
		</table>
	</form>		
		</div>
</nav>


