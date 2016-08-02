<?php

namespace App\Repositories;

use App\MASTER_PROJECT;
	use App\MASTER_REQUIREMENTS;
	use App\PROJECT_MODULES;
	use App\Project_req_xref;
	
class ProjectRepository
{
   protected $PROJECTS;
    public function project(MASTER_PROJECT $project)
    {
        $PROJECTS = MASTER_PROJECT::lists('PROJECT_NAME', 'PROJECT_NAME');
		$PROJECTS = $PROJECTS->toArray();
		return $PROJECTS;
    }
}
