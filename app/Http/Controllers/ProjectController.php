<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {

        $projects = [
            [
                'id'          => 1,
                'name'        => 'Project1',
                'description' => 'Description1',
                'bg_url'      => 'http://web1.sthgrafton-h.schools.nsw.edu.au/wp-content/uploads/2015/08/MusicWorkShop-Image.jpg',
            ],
            [
                'id'          => 2,
                'name'        => 'Project2',
                'description' => 'Description2',
                'bg_url'      => '',
            ],
        ];

        return view('projects.index', [
            'projects' => $projects,
        ]);
    }

    public function create()
    {
      return view('projects/create');
    }

    public function edit($id) {
        $project = [
            'id'          => $id,
            'name'        => 'Project' . $id,
            'description' => 'Description' . $id,
            'image_url'      => 'http://web1.sthgrafton-h.schools.nsw.edu.au/wp-content/uploads/2015/08/MusicWorkShop-Image.jpg',
        ];

        return view('projects/edit', [
            'project' => $project
        ]);
    }


    public function update($id, Request $request) {

        $request->validate([
            'name' => 'required',
            'description' => 'nullable',
            'image_url' => 'nullable|url'
        ]);

        dd($request);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'nullable',
            'image_url' => 'nullable|url'
        ]);

        dd($request);
    }

    public function detail($id, Request $request)
    {
        dd($id);
        return view('projects/detail');
    }

    public function create_tracks()
    {
      return view('projects/create_tracks');
    }
}
