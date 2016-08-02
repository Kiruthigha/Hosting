<?php
	
	/*
		|--------------------------------------------------------------------------
		| Application Routes
		|--------------------------------------------------------------------------
		|
		| Here is where you can register all of the routes for an application.
		| It's a breeze. Simply tell Laravel the URIs it should respond to
		| and give it the controller to call when that URI is requested.
		|
	*/
	use App\MASTER_PROJECT;
	use App\MASTER_REQUIREMENTS;
	use App\PROJECT_MODULES;
	
	use App\Project_req_xref;
	Route::get('/', 'RequirementsController@display'); 	
	Route::post('/xrefAdd', 'RequirementsController@xref');
	Route::post('/req/{id}', 'RequirementsController@setupRequirements');
	Route::post('/addTestCase/{id}', 'RequirementsController@addTestCase');
	Route::post('/addTestCaseScreen/{id}', 'RequirementsController@addTestCaseScreen');
	Route::post('/executeTesting/{id}', 'RequirementsController@executeTesting');
