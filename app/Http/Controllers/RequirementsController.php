<?php
	
	namespace App\Http\Controllers;
	
	use Illuminate\Http\Request;
	
	use App\Http\Requests;
	use App\Http\Controllers\Controller;
	
	
	use App\MASTER_PROJECT;
	use App\MASTER_REQUIREMENTS;
	use App\PROJECT_MODULES;
	use App\REQUIREMENT_HEADER;
	use App\REQUIREMENT_DETAILS_COMMON;
	use App\REQUIREMENT_DETAILS_SCREEN;
	use App\Project_req_xref;
	use App\Repositories\ProjectRepository;
	Use Log;
	
	class RequirementsController extends Controller
	{
		
		protected $PROJECTS;
		protected $REQUIREMENTS;
		protected $MODULES;
		protected $xref_project;
		
		
		
		public function __construct(MASTER_PROJECT $PROJECTS,  MASTER_REQUIREMENTS $REQUIREMENTS, PROJECT_MODULES $MODULES)
		{     
			$PROJECTS = MASTER_PROJECT::lists('PROJECT_NAME', 'PROJECT_NAME');
			$PROJECTS = $PROJECTS->toArray();
			$REQUIREMENTS = MASTER_REQUIREMENTS::select('REQUIREMENTS')->get();		
			$REQUIREMENTS = MASTER_REQUIREMENTS::lists('REQUIREMENTS', 'REQUIREMENTS');
			$REQUIREMENTS = $REQUIREMENTS->toArray();
			$MODULES =  PROJECT_MODULES::select('MODULES')->get();		
			$MODULES = PROJECT_MODULES::lists('MODULES', 'MODULES');
			$MODULES = $MODULES->toArray();
			$this->PROJECTS = $PROJECTS;
			$this->REQUIREMENTS = $REQUIREMENTS;
			$this->MODULES = $MODULES;
			
		}
		
		
		public function display(Request $request)
		{
			
			
			return view('projectAssignment',[
			'PROJECTS' =>  $this->PROJECTS,
			'REQUIREMENTS' => $this->REQUIREMENTS,
			'MODULES'=> $this->MODULES,
			'xref_project' => $this->xref_project
			]);
			
			
		}
		
		public function xref(Request $request)
		{
		
		
		 $xref_project = Project_req_xref::select('*')
		  ->join('PROJECT_MODULES', 'xref_project_module_req.project_modules_id', '=', 'PROJECT_MODULES.id')
            ->join('MASTER_REQUIREMENTS', 'xref_project_module_req.REQ_ID', '=', 'MASTER_REQUIREMENTS.id')
              ->select('xref_project_module_req.*', 'PROJECT_MODULES.MODULES', 'MASTER_REQUIREMENTS.REQUIREMENTS')
			 -> orderBy('PROJECT_MODULES.MODULES', 'asc')
            ->get(array(

                                    'PROJECT_MODULES.MODULES',
                                    'MASTER_REQUIREMENTS.REQUIREMENTS'                                 


                        ));
			Log ::info("return " .$xref_project);
			return view('projectAssignment', [
			'PROJECTS' =>  $this->PROJECTS,
			'REQUIREMENTS' => $this->REQUIREMENTS,
			'MODULES'=> $this->MODULES,
				'xref_project' => $xref_project
			]);
		}
		
		public function setupRequirements(Request $req, $id)
		{
			Log::info ("in the controller ".$id);
			$details = REQUIREMENT_HEADER::select('NAME','REQ_XREF_ID')->where ('REQ_XREF_ID','=','1')->lists('NAME', 'NAME');
			Log::info("in setup".$details);
			
			$details = $details->toArray();
			
			$DBDetails = REQUIREMENT_HEADER::select('NAME','REQ_XREF_ID')->where ('REQ_XREF_ID','=','2')->lists('NAME', 'NAME');
			
			Log::info("in setup 2 ".$DBDetails);
			$DBDetails = $DBDetails->toArray();
			
			return view('requirements',[
			'id' =>  $id, 'details' =>$details,'DBDetails' =>$DBDetails]);
		
		}
		
		public function addTestCase(Request $req,$id)
		{
			
			$details = REQUIREMENT_HEADER::select('NAME','REQ_XREF_ID')->where ('REQ_XREF_ID','=','1')->lists('NAME', 'NAME');
			
			
			$details = $details->toArray();
			
			$DBDetails = REQUIREMENT_HEADER::select('NAME','REQ_XREF_ID')->where ('REQ_XREF_ID','=','2')->lists('NAME', 'NAME');			
			
			$DBDetails = $DBDetails->toArray();
			$testCaseHeader = REQUIREMENT_DETAILS_COMMON::select('*')->where ('REQ_HEADER_ID','<','3')->get();
			
			return view('requirements',[
			'id' =>  $id, 'details' =>$details, 'DBDetails' =>$DBDetails,'testCaseHeader' =>$testCaseHeader]);
			
		}
		public function addTestCaseScreen(Request $req,$id)
		{
			$details = REQUIREMENT_HEADER::select('NAME','REQ_XREF_ID')->where ('REQ_XREF_ID','=','1')->lists('NAME', 'NAME');
			
			
			$details = $details->toArray();
			
			$DBDetails = REQUIREMENT_HEADER::select('NAME','REQ_XREF_ID')->where ('REQ_XREF_ID','=','2')->lists('NAME', 'NAME');			
			
			$DBDetails = $DBDetails->toArray();
			$testCaseScreen = REQUIREMENT_DETAILS_SCREEN::select('*') -> get();		
			$testCaseHeader = REQUIREMENT_DETAILS_COMMON::select('*')->where ('REQ_HEADER_ID','>','100')->get();
			return view('requirements',[
			'id' =>  $id, 'details' =>$details, 'DBDetails' =>$DBDetails,'testCaseHeader' =>$testCaseHeader,'testCaseScreen' =>$testCaseScreen ]);
			
		}
		public function executeTesting(Request $req,$id)
		{
		return view('testing',['id'=>$id]);
		
		}
	}
