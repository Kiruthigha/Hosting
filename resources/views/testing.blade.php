
@extends('layouts.app')

@section('content')


<Style>
	th, td { white-space: nowrap; }
    div.dataTables_wrapper {
       
        margin: 0 auto;
    }
	

	</style>
<script>
$(document).ready(function() {
    var table = $('#example').DataTable( {
	"bInfo" : false,
        scrollY:        "300px",
        scrollX:        true,
        scrollCollapse: true,
        paging:         false,
		   fixedColumns:   {
            leftColumns: 3,
            rightColumns: 3
        }
        
    } );
	
} );
	
</script>
<div class="panel-body">
	<!-- Display Validation Errors -->
	@include('common.errors')
	@if ($id ==1)
	<div class ="panel panel-default">
<div class="panel-heading">
		<p><h4>Test Execution</h4></p>
	
		<p><h4>Project Name : R4S</h4>
		<h4>Module Name : Common</h4>
		<h4>Header</h4>
		
	</div>
	
	{!! Form::open(array('url' => '/', 'method' => 'post')) !!}
	<div class="form-group">			
			<div class="col-sm-3">
			{!! Form::label('Checks', 'Checks', array('class' => ' control-label')); !!}
				{!! Form::text('Checks', 'Logo' ,array('class'=> 'form-control' , 'disabled')); !!}
			</div>
		</div>
	<div class="form-group">			
			<div class="col-sm-3">
			{!! Form::label('Description', 'Description', array('class' => ' control-label')); !!}
				{!! Form::text('Description', 'Logo should be visible in all pages.' ,array('class'=> 'form-control' , 'disabled')); !!}
			</div>
		</div>
		<div class="form-group">			
			<div class="col-sm-3">
			{!! Form::label('Expected Result', 'Expected Result', array('class' => ' control-label')); !!}
				{!! Form::text('Expected Result', '	
Logo size should be 10px by 10 px in the left corner' ,array('class'=> 'form-control' , 'disabled')); !!}
			</div>
		</div>
		<button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo">+</button>
  <div id="demo" class="collapse">
		<table class="display" id="example">
			
			<!-- Table Headings -->
			<thead>
				<th>Status</th>
				<th>Test Result</th>
				<th>Open Issue</th>
				<th>Issue Fixed on </th>
				<th>UAT Status</th>
				<th>UAT Executed Date </th>
				<th>Remarks</th>
				<th>Save </th>
			</thead>
			
			<!-- Table Body -->
			<tbody>
				{!! Form::open(array('url' => '/', 'method' => 'get')) !!}
				<td>
	<div class="form-group">			
			
			
				{!! Form::text('Staus', 'Status' ,array('class'=> 'form-control' )); !!}
			
		</div>
		</td>
		<td>
	<div class="form-group">			
			
			
				{!! Form::text('Test Result', 'Test Result' ,array('class'=> 'form-control' )); !!}
			
		</div></td><td><div class="form-group">			
			
			
				{!! Form::text('Open Issue', 'Open Issue' ,array('class'=> 'form-control' )); !!}
			
		</div></td>
<td><div class="form-group">			
			
			
				{!! Form::text('Issue Fixed On', 'Issue Fixed On' ,array('class'=> 'form-control' )); !!}
			
		</div></td>	<td>
		<div class="form-group">			
			
			
				{!! Form::text('UAT Status', 'UAT Status' ,array('class'=> 'form-control' )); !!}
			
		</div></td><td>
		<div class="form-group">			
			
			
				{!! Form::text('UAT Executed Date', 'UAT Executed Date' ,array('class'=> 'form-control' )); !!}
			
		</div></td><td>
		<div class="form-group">			
			
			
				{!! Form::text('Remarks', 'Remarks' ,array('class'=> 'form-control' )); !!}
			
		</div></td><td>
		<div class="form-group">			
			
			
				<button type="submit" class="btn btn-danger">
								<i class="fa fa-edit"></i> Save
							</button>
			
		</div></td>
			</tbody>
		</table>
  </div>
	
		{!!Form::close() !!}
		@endif
			@if ($id ==2)
	<div class ="panel panel-default">
<div class="panel-heading">
		<p><h4>Test Execution</h4></p>
	
		<p><h4>Project Name : R4S</h4>
		<h4>Module Name : Job Posting</h4>
		<h4>Screen</h4>
		
	</div>
	
	<p> <br><h3>Screen Details</h3></p>
		
		{!! Form::open(array('url' => '/', 'method' => 'get')) !!}
		<div class="form-group">			
			<div class="col-sm-3">
			{!! Form::label('Field Name', 'Field Name', array('class' => ' control-label')); !!}
			{!! Form::text('Field Name', 'Field Name',array('class'=> 'form-control','disabled')); !!}
			</div>
		</div>
		<div class="form-group">			
			<div class="col-sm-3">
			{!! Form::label('Field Type', 'Field Type', array('class' => ' control-label')); !!}
			{!! Form::text('Field Type', 'Field Type',array('class'=> 'form-control','disabled')); !!}
			</div>
		</div>
		<div class="form-group">			
			<div class="col-sm-3">
			{!! Form::label('Width', 'Width', array('class' => ' control-label')); !!}
			{!! Form::text('Width','Width',array('class'=> 'form-control','disabled')); !!}
			</div>
		</div><div class="form-group">			
			<div class="col-sm-3">
			{!! Form::label('Width', 'Required?', array('class' => 'control-label')); !!}
			{!! Form::text('Width','',array('class'=> 'form-control','disabled')); !!}
			</div>
		</div><div class="form-group">			
			<div class="col-sm-3">
			{!! Form::label('Width', 'Placeholder', array('class' => 'control-label')); !!}
			{!! Form::text('Width','',array('class'=> 'form-control','disabled') ); !!}
			</div>
		</div>
		
		<button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo">+</button>
  <div id="demo" class="collapse">
		<table id ="example" class="stripe row-border order-column" width="100%">
		
				
			<!-- Table Headings -->
			<thead>
				<th>Status</th>
				<th>Test Result</th>				
				<th>UAT Status</th>
				<th>UAT Executed Date </th>
				<th>Cruds Mode </th>
				<th>Action By </th>
				<th>Activity </th>
				<th>Condition </th>
				<th>Validation </th>
				<th>Message </th>
				<th>Expected Result </th>				
				<th>Open Issue</th>
				<th>Potential Fix</th>				
				<th>Issue Fixed on </th>
				<th>Remarks</th>
				<th>Save </th>
			</thead>
			
			<!-- Table Body -->
			<tbody>
				{!! Form::open(array('url' => '/', 'method' => 'post')) !!}
				<td>
	<div class="form-group">			
			
			
				{!! Form::text('Staus', 'Status' ,array('class'=> 'form-control' )); !!}
			
		</div>
		</td>
		<td>
	<div class="form-group">			
			
			
				{!! Form::text('Test Result', 'Test Result' ,array('class'=> 'form-control' )); !!}
			
		</div></td>
		<td>
		<div class="form-group">			
			
			
				{!! Form::text('UAT Status', 'UAT Status' ,array('class'=> 'form-control' )); !!}
			
		</div></td><td>
		<div class="form-group">			
			
			
				{!! Form::text('UAT Executed Date', 'UAT Executed Date' ,array('class'=> 'form-control' )); !!}
			
		</div></td>
		<td><div class="form-group">			
			
			
				{!! Form::text('Cruds', 'Cruds Mode' ,array('class'=> 'form-control' )); !!}
			
		</div></td><td><div class="form-group">			
			
			
				{!! Form::text('Action By', 'Action By' ,array('class'=> 'form-control' )); !!}
			
		</div></td><td><div class="form-group">			
			
			
				{!! Form::text('Activity', 'Activity' ,array('class'=> 'form-control' )); !!}
			
		</div></td><td><div class="form-group">			
			
			
				{!! Form::text('Condition', 'Condition' ,array('class'=> 'form-control' )); !!}
			
		</div></td><td><div class="form-group">			
			
			
				{!! Form::text('Validation', 'Validation' ,array('class'=> 'form-control' )); !!}
			
		</div></td><td><div class="form-group">			
			
			
				{!! Form::text('Message', 'Message' ,array('class'=> 'form-control' )); !!}
			<td><div class="form-group">			
			
			
				{!! Form::text('Expected Result', 'Expected Result' ,array('class'=> 'form-control' )); !!}
			
		</div></td>
		
		
		
		
		
		
		<td><div class="form-group">			
			
			
				{!! Form::text('Open Issue', 'Open Issue' ,array('class'=> 'form-control' )); !!}
			
		</div></td><td><div class="form-group">			
			
			
				{!! Form::text('Potential Fix', 'Potential Fix' ,array('class'=> 'form-control' )); !!}
			
		</div></td>
<td><div class="form-group">			
			
			
				{!! Form::text('Issue Fixed On', 'Issue Fixed On' ,array('class'=> 'form-control' )); !!}
			
		</div></td>	<td><div class="form-group">			
			
			
				{!! Form::text('Remarks', 'Remarks' ,array('class'=> 'form-control' )); !!}
			
		</div></td>	<td>
		<div class="form-group">			
			
			
				<button type="submit" class="btn btn-danger">
								<i class="fa fa-edit"></i> Save
							</button>
			
		</div></td>
			</tbody>
		</table>
  </div>
	
		{!!Form::close() !!}
		
</div>
@endif
</div>


@endsection
