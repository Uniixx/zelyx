<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Auth;

use Illuminate\Routing\Controller as BaseController;

class ProjectController extends BaseController
{
    function index2(){
        return view('project.index2');
    }
    function list(){
        return view('project.list', ['projects' => Project::all()]);
    }
    function taskboard(){
        return view('project.taskboard');
    }
    function ticket(){
        return view('project.ticket');
    }
    function ticketdetails(){
        return view('project.ticketdetails');
    }
    function clients(){
        return view('project.clients');
    }
    function todo(){
        return view('project.todo');
    }

    function create(Request $request) {
        Project::create(
            [
                'title' => $request->title,
                'description' => $request->description,
                'budget' => $request->budget,
                'user_id' => Auth::user()->id,
                'status' => '0'
            ]);

       return redirect('project/list');
    }
}
