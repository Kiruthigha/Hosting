
@extends('layouts.app')

@section('content')
<div class ="panel panel-default">
<div class="panel-heading">
		<p><h4>Enter Requirements</h4></p>
	
		<p><h4>Project Name : R4S</h4>
		<h4>Module Name : Job Posting</h4>
		
	</div>
<div class="panel-body">
	<!-- Display Validation Errors -->
	@include('common.errors')

			@if ($id == 1 || $id ==2)
		
		{!! Form::open(array('url' => 'addTestCase/1', 'method' => 'post')) !!}
		<div> <br/></div>
		
		<p> <br><h3>Header Details</h3></p>
		<div class="form-group">			
			<div class="col-sm-6">
			{!! Form::label('Checks', 'Checks', array('class' => ' control-label')); !!}
			@if ($id == 1)
			{!! Form::select('Details', $details, '', array('class'=> 'form-control'));
			 !!}
			 @endif
			</div>
		</div>
		
		@if ($id == 2)
		<p> <br><h3>DB Checks</h3></p>
		<div class="form-group">			
			<div class="col-sm-6">
			{!! Form::label('Checks', 'Checks', array('class' => ' control-label')); !!}
			{!! Form::select('DB Details', $DBDetails, '', array('class'=> 'form-control'));
			 !!}
			</div>
		</div>
		@endif
		
		
		
		<div class="form-group">			
			<div class="col-sm-6">
			{!! Form::label('Description', 'Description', array('class' => ' control-label')); !!}
				{!! Form::text('Description', 'Description' ,array('class'=> 'form-control')); !!}
			</div>
		</div>
		
		
		@if ( $id == 2)
			<div class="form-group">			
			<div class="col-sm-12">
			{!! Form::label('Expected Checks', 'Expected Checks', array('class' => ' control-label')); !!}
			{!! Form::text('Expected Checks', 'Expected Checks',array('class'=> 'form-control')); !!}
			</div>
			</div>
		@endif
		<div class="form-group">
		<div class=" col-sm-12">
			{!! Form::label('Test Case ', '', array('class' => ' control-label')); !!}
				<button type="submit" class="btn btn-default">
					<i class="fa fa-plus"></i> Add Test Case
				</button>
				{!!Form::close() !!}
			</div>
		</div>
		@endif
		
		
		@if ($id == 6 ||$id == 3)
		<p> <br><h3>Screen Details</h3></p>
		
		{!! Form::open(array('url' => 'addTestCaseScreen/1', 'method' => 'post')) !!}
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
		<div class=" col-sm-2">
			{!! Form::label('Test Case', '', array('class' => ' control-label')); !!}
				<button type="submit" class="btn btn-default">
					<i class="fa fa-plus"></i> Add Test Case
				</button>
				{!!Form::close() !!}
			</div>
	@endif
	@if (isset($testCaseHeader) )
			@if (count($testCaseHeader) > 0)
	<div class="panel panel-default">
	<div class="panel-heading">
		<p><h4>Test Case For Header</h4></p>
		</div>
	
	<div class="panel-body">
		<table class="table table-striped contact-table">
			
			<!-- Table Headings -->
			<thead>
				<th>Checks</th>
				<th>Description</th>
				<th>Expected Result</th>
				
			</thead>
			
			<!-- Table Body -->
			<tbody>
			
			
							@foreach ($testCaseHeader as $testCaseHeader)
				<tr>
					
					
					<td class="table-text">
						<div>Logo</div>
					</td>
					<td class="table-text">
						<div>Logo should be visible in all pages.</div>
					</td>
					<td class="table-text">
						<div>{{ $testCaseHeader->EXPECTED_ACTION }}</div>
					</td>	
					
					<td>
						<form action="{{ url('executeTesting/1') }}" method="POST">
							{{ csrf_field() }}						
							
							<button type="submit" class="btn btn-danger">
								<i class="fa fa-edit"></i> Execute Testing
							</button>
						</form>
					</td>
					
				</tr>
				@endforeach
				
			
			</tbody>
		</table>
	</div>
</div>
@endif
	@endif
	
	
	@if (isset($testCaseScreen) )
			@if (count($testCaseScreen) > 0)
	<div class="panel panel-default">
	<div class="panel-heading">
		<p><h4>Test Case For Screen</h4></p>
		</div>
	
	<div class="panel-body">
		<table class="table table-striped contact-table">
			
			<!-- Table Headings -->
			<thead>
				<th>Field</th>
				<th>Field Type</th>
				<th>Width</th>
				<th>Required ?</th>
				<th>Placeholder</th>
				<th>Validations</th>
				<th>Expected Result</th>
				
			</thead>
			
			<!-- Table Body -->
			<tbody>
			
			
							@foreach ($testCaseScreen as $testCaseScreen)
				<tr>
					
					
					<td class="table-text">
						<div>{{ $testCaseScreen->FIELD }}</div>
					</td>
					<td class="table-text">
						<div>{{ $testCaseScreen->FIELD_TYPE}}</div>
					</td>
					<td class="table-text">
						<div>{{ $testCaseScreen->WIDTH}}</div>
					</td>	<td class="table-text">
						<div>{{ $testCaseScreen->REQUIRED}}</div>
					</td>	<td class="table-text">
						<div>{{ $testCaseScreen->PLACEHOLDER}}</div>
					</td>	<td class="table-text">
						<div>{{ $testCaseScreen->VALIDATIONS}}</div>
					</td>	<td class="table-text">
						<div>{{ $testCaseScreen->EXPECTED_RESULT}}</div>
					</td>	
					
					<td>
						<form action="{{ url('executeTesting/2') }}" method="POST">
							{{ csrf_field() }}						
							
							<button type="submit" class="btn btn-danger">
								<i class="fa fa-edit"></i> Execute Testing
							</button>
						</form>
					</td>
					
				</tr>
				@endforeach
				
			
			</tbody>
		</table>
	</div>
</div>
@endif
	@endif
		
</div>



@endsection