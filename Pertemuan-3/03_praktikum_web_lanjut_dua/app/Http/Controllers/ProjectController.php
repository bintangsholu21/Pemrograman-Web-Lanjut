<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    //make a function to return the view
    public function index()
    {
        return view('project-detail');
    }
}
