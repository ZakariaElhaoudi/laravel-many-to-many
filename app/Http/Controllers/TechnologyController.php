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
}
