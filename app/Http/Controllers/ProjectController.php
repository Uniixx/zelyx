<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use Auth;

class ProjectController extends Controller
{
    public function delete($id) {
        $user = Auth::user();
        $project = Project::find($id);
        if ($user->role === 1 || $project->user_id === $user->id) {
            $project->delete();
        }
    }

    public function create(Request $request) {
        $project = Project::create([
            "status" => 0,
            "name" => htmlspecialchars($request->name),
            "description" => htmlspecialchars($request->description),
            "budget" => $request->budget,
            "type" => $request->type,
            "user_id" => Auth::user()->id
        ]);

        $nProject = Project::find($project->id);

        return $nProject;
    }
}
