<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::all();
        return view('projects.index', [
            'projects' => $projects,
        ]);
    }

    public function show(Project $project)
    {
        return view('projects/detail', [
            'project' => $project
        ]);
    }

    public function create()
    {
      return view('projects/create');
    }

    public function store(Request $request)
    {
        $validate_data = $request->validate([
            'name' => 'required',
            'description' => 'nullable',
            'image_url' => 'nullable|url'
        ]);

        $id = Project::create($validate_data);
        return redirect()->route('projects.show', $id);
    }

    public function edit(Project $project) {
        return view('projects/edit', [
            'project' => $project
        ]);
    }

    public function update(Project $project, Request $request) {
        $validate_data = $request->validate([
            'name' => 'required',
            'description' => 'nullable',
            'image_url' => 'nullable|url'
        ]);

        $project->update($validate_data);
        return redirect()->route('projects.show', $project->id);
    }

    public function create_tracks()
    {
      return view('projects/create_tracks');
    }
}
