<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = [
            ['title' => 'Laravel Monitoring', 'desc' => 'Sistem bimbel online'],
            ['title' => 'Website Profil', 'desc' => 'Desain dengan Bootstrap']
        ];

        return view('home', compact('projects'));
    }
}
