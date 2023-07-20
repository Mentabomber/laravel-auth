<?php

namespace App\Http\Controllers\Project;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;

class PrjController extends Controller
{
    public function index(){

        $projects = Project:: all();

        return view("index", compact('projects'));
       }
}
