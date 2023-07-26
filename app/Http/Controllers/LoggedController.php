<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Project;
use App\Models\Type;
use App\Models\Technology;


class LoggedController extends Controller
{

    public function show($id) {

        $project = Project :: findOrFail($id);

        return view('project.show', compact('project'));
    }

    public function create() {

        $types = Type :: all();

        $technologies = Technology :: all();

        return view('project.create', compact('types', 'technologies'));
    }
    public function store(Request $request) {

        $data = $request -> all();

        $project = Project :: create($data);
        $project -> technologies() -> attach($data['technologies']);

        return redirect() -> route('project.show', $project -> id);
    }

    public function edit($id) {

        $project = Project :: findOrFail($id);
        $technologies = Technology :: all();
        $types = Type :: all();


        return view('project.edit', compact('technologies', 'project','types'));
    }
    public function update(Request $request, $id) {

        $project = Project :: findOrFail($id);
        $data = $request -> all();

        $project -> update($data);
        $project -> technologies() -> sync($data['technologies']);

        return redirect() -> route('project.show', $project -> id);
    }
}