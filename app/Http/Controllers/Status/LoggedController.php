<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;

class LoggedController extends Controller
{

    public function indexPlus(){

        $projects = Project:: all();

        return view("logged.index", compact('projects'));
    }
    public function show($id){

        $project = Project :: findOrFail($id);

        return view("logged.show", compact('project'));
    }
}
