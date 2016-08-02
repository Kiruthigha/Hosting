
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
				<th> Edit </th>
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
					</td> 
					<td>
						<form action="{{ url('req/'.$xref_project->ID) }}" method="POST">
							{{ csrf_field() }}						
							
							<button type="submit" class="btn btn-danger">
								<i class="fa fa-edit"></i> Configure
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
		
		
		
		
	

@endsection