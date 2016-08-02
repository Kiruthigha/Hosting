
@extends('layouts.app')

@section('content')
<div class ="panel panel-default">
<div class="panel-heading">
		<p><h4> Project Assignment</h4></p>
	</div>
<div class="panel-body">
	<!-- Display Validation Errors -->
	@include('common.errors')
	
	
	{!! Form::open(array('url' => 'xrefAdd', 'method' => 'post'), array('class'=> 'form-horizontal')) !!}
		{!!  Form::token()!!}
		<div class="form-group">			
			<div class="col-sm-2">
			{!! Form::label('Project Name', 'Project Name', array('class' => ' control-label')); !!}
			
			{!! Form::select('Project Name',  $PROJECTS, '', array('class'=> 'form-control'));
			 !!}
			</div>
		</div>
		<div class="form-group">			
			<div class="col-sm-3">
			{!! Form::label('Modules', 'Modules', array('class' => ' control-label')); !!}
			{!! Form::select('Modules', $MODULES, '', array('class'=> 'form-control'));
			 !!}
			</div>
		</div>
		<div class="form-group">			
			<div class="col-sm-3">
			{!! Form::label('Requirements', 'Requirements', array('class' => ' control-label')); !!}
			{!! Form::select('Requirements', $REQUIREMENTS, '', array('class'=> 'form-control'));
			 !!}
			</div>
		</div>	
		<div class="form-group">			
			<div class="col-sm-2">
			{!! Form::label('Assigned To', 'Assigned To', array('class' => ' control-label')); !!}
			{!! Form::select('Assigned To', array('RK' => 'RK', 'Arun' => 'Arun', 'Victor' => 'Victor', 'Hema' => 'Hema'), 'Header', array('class'=> 'form-control'));
			 !!}
			</div>
		</div>
		
		<div class="form-group">
			
			<div class=" col-sm-2">
			{!! Form::label('Requirements', '', array('class' => ' control-label')); !!}
				<button type="submit" class="btn btn-default">
					<i class="fa fa-plus"></i> Add Requirements
				</button>
			</div>
		</div>
		{!! Form::close ()!!}
</div>
</div>
		@if (count($xref_project) > 0)
	<div class="panel panel-default">
	<div class="panel-heading">
		<p><h4>Current Project Assignment</h4></p>
	</div>
	
	<div class="panel-body">
		<table class="table table-striped contact-table">
			
			<!-- Table Headings -->
			<thead>
				<th>Project Name</th>
				<th>Module Name</th>
				<th>Requirements</th>
				<th>Assigned To</th>
				<th>Status</th>
			</thead>
			
			<!-- Table Body -->
			<tbody>
				@foreach ($xref_project as $xref_project)
				<tr>
					
					<td class="table-text">
						<div>R4S</div>
					</td> 
					<td class="table-text">
						<div>{{ $xref_project->MODULES }}</div>
					</td>
					<td class="table-text">
						<div>{{ $xref_project->REQUIREMENTS }}</div>
					</td>	
					<td class="table-text">
						<div>RK</div>
					</td>
					<td class="table-text">
						<div>{{ $xref_project->STATUS }}</div>
					</td>
					
					
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</div>
@endif
		
		
		
		
		
		
		
		
		{!! Form::open(array('url' => '', 'method' => 'post')) !!}
		<div> <br/></div>
		<p> <br><h3>Project Module Common</h3></p>
		
		<div class="form-group">			
			<div class="col-sm-4">
			{!! Form::label('Modules', 'Modules', array('class' => ' control-label')); !!}
			{!! Form::select('Modules', array('Common' => 'Common', 'Job Search' => 'Job Search'), 'Job Posting', array('class'=> 'form-control'));
			 !!}
			</div>
		</div>
		<div class="form-group">			
			<div class="col-sm-4">
			{!! Form::label('Requirements', 'Requirements', array('class' => ' control-label')); !!}
			{!! Form::select('Requirements', array('Header' => 'Header', 'Footer' => 'Footer', 'UX/UI Experience' => 'UX/UI Experience', 'DB Checks' => 'DB Checks'), 'Header', array('class'=> 'form-control'));
			 !!}
			</div>
		</div>
			<div class="form-group">			
			<div class="col-sm-4">
			{!! Form::label('Requirements Division', 'Requirements Division', array('class' => ' control-label')); !!}
			{!! Form::select('Requirements Division', array('Logo' => 'Logo', 'Title' => 'Title', ), 'Header', array('class'=> 'form-control'));
			 !!}
			</div>
		</div>
		<div class="form-group">			
			<div class="col-sm-12">
			{!! Form::label('Description', 'Description', array('class' => ' control-label')); !!}
				{!! Form::textarea('Description', 'Description' ,array('class'=> 'form-control')); !!}
			</div>
		</div>
		
		<p> <br><h3>Project Module Common Ex. DB Checks</h3></p>
		
		
		<div class="form-group">			
			<div class="col-sm-6">
			{!! Form::label('File Name', 'File Name', array('class' => ' control-label')); !!}
			{!! Form::text('File Name', 'File Name',array('class'=> 'form-control')); !!}
			</div>
		</div>
		<div class="form-group">			
			<div class="col-sm-6">
			{!! Form::label('Expected Checks', 'Expected Checks', array('class' => ' control-label')); !!}
			{!! Form::text('Expected Checks', 'Expected Checks',array('class'=> 'form-control')); !!}
			</div>
		</div>
		
		<p> <br><h3>Project Module Screen</h3></p>
		
		
		<div class="form-group">			
			<div class="col-sm-3">
			{!! Form::label('Field Name', 'Field Name', array('class' => ' control-label')); !!}
			{!! Form::text('Field Name', 'Field Name',array('class'=> 'form-control')); !!}
			</div>
		</div>
		<div class="form-group">			
			<div class="col-sm-3">
			{!! Form::label('Field Type', 'Field Type', array('class' => ' control-label')); !!}
			{!! Form::text('Field Type', 'Field Type',array('class'=> 'form-control')); !!}
			</div>
		</div>
		<div class="form-group">			
			<div class="col-sm-3">
			{!! Form::label('Width', 'Width', array('class' => ' control-label')); !!}
			{!! Form::text('Width','Width',array('class'=> 'form-control')); !!}
			</div>
		</div><div class="form-group">			
			<div class="col-sm-3">
			{!! Form::label('Width', 'Required?', array('class' => 'control-label')); !!}
			{!! Form::text('Width','',array('class'=> 'form-control')); !!}
			</div>
		</div><div class="form-group">			
			<div class="col-sm-3">
			{!! Form::label('Width', 'Placeholder', array('class' => 'control-label')); !!}
			{!! Form::text('Width','',array('class'=> 'form-control')); !!}
			</div>
		</div>
	
		{!!Form::close() !!}
		
</div>

@endsection