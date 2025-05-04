<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    protected $projects = [
        ['id' => 1, 'title' => 'Laravel Monitoring', 'desc' => 'Sistem bimbel online'],
        ['id' => 2, 'title' => 'Website Profil', 'desc' => 'Desain dengan Bootstrap']
    ];

    public function index()
    {
        return view('home', ['projects' => $this->projects]);
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $newProject = [
            'id' => count($this->projects) + 1,
            'title' => $request->title,
            'desc' => $request->desc
        ];
        $this->projects[] = $newProject;

        return redirect()->route('projects.index');
    }

    public function edit($id)
    {
        $project = $this->findProjectById($id);
        return view('edit', compact('project'));
    }

    public function update(Request $request, $id)
    {
        $project = $this->findProjectById($id);
        $project['title'] = $request->title;
        $project['desc'] = $request->desc;

        return redirect()->route('projects.index');
    }

    public function destroy($id)
    {
        $this->projects = array_filter($this->projects, function ($project) use ($id) {
            return $project['id'] !== $id;
        });

        return redirect()->route('projects.index');
    }

    private function findProjectById($id)
    {
        return collect($this->projects)->firstWhere('id', $id);
    }
}
