<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    use App\Models\Project;
use Illuminate\Http\Request;

public function index() {
    $projects = Project::all();
    return view('admin.projects.index', compact('projects'));
}

public function create() {
    return view('admin.projects.create');
}

public function store(Request $request) {
    $request->validate(['name' => 'required']);
    Project::create($request->all());
    return redirect()->route('projects.index')->with('success', 'Project created!');
}

public function edit(Project $project) {
    return view('admin.projects.edit', compact('project'));
}

public function update(Request $request, Project $project) {
    $project->update($request->all());
    return redirect()->route('projects.index')->with('success', 'Updated!');
}

public function destroy(Project $project) {
    $project->delete();
    return back()->with('success', 'Deleted!');
}

}
