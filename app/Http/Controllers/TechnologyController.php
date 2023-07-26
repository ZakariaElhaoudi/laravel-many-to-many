<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Technology;
use App\Models\Project;

class TechnologyController extends Controller
{
    public function show($id) {

        $technology = Technology :: findOrFail($id);
        $project  = Project :: all();

        return view('technology.show', compact('technology', 'project'));
    }

    public function create() {

        $projects = Project :: all();

        return view('technology.create', compact('projects'));
    }
    public function store(Request $request) {

        $data = $request -> all();

        $technology = Technology :: create($data);
        $technology -> projects() -> attach($data['projects']);

        return redirect() -> route('technology.show', $technology -> id);
    }
}
