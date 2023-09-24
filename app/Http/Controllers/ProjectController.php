<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::all();
        return view('projects.view-projects', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('projects.create-projects');
    }

    /**
     * Store a newly created resource in storage.
     */
    // attributes: project_id, project_name, project_details, project_start_date,
    // project_exec_time (in days), project_finish_date, project_link, project_image
    public function store(Request $request)
    {
        // ddd($request->all()); // dump, die, debug
        $validatedProj = $request->validate([
            'project_name' => 'required|max:100',
            'project_details' => 'required|max:1000',
            'project_start_date' => 'required|date',
            'project_exec_time' => 'required|numeric|min:1',
            'project_finish_date' => 'required|date',
            'project_link' => 'required|max:250',
            'project_image' => 'required|image|file|mimes:jpg,jpeg,png|max:10000'
        ]);

        if($request->hasFile('project_image') && $request->file('project_image')->isValid()) {
            /*
            $exp_img_path = $request->file('job_image')->store('experience_image', 'public');
            $validatedExp['job_image'] = $exp_img_path;
            */
            $project_image = $request->file('project_image');
            $filename = time() . '.' . $project_image->getClientOriginalExtension();
            $project_image->move(public_path('project_image'), $filename);
            $validatedProj['project_image'] = 'project_image/' . $filename;
        }

        Project::create($validatedProj);

        return redirect()->route('projects.index')->with('success', 'Project created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        return view('projects.show-projects', ['project' => $project]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        return view('projects.update-projects', ['project' => $project]);
    }

    /**
     * Update the specified resource in storage.
     */
    // attributes: project_id, project_name, project_details, project_start_date,
    // project_exec_time (in days), project_finish_date, project_link, project_image
    public function update(Request $request, Project $project)
    {
        // ddd($request->all()); // die, dump, debug
        $validatedProj = $request->validate([
            'project_name' => 'required|max:100',
            'project_details' => 'required|max:1000',
            'project_start_date' => 'required|date',
            'project_exec_time' => 'required|numeric|min:1',
            'project_finish_date' => 'required|date',
            'project_link' => 'required|max:250',
            'project_image' => 'required|image|file|mimes:jpg,jpeg,png|max:10000'
        ]);

        if($request->hasFile('project_image') && $request->file('project_image')->isValid()) {
            /*
            $exp_img_path = $request->file('job_image')->store('experience_image', 'public');
            $validatedExp['job_image'] = $exp_img_path;
            */
            $project_image = $request->file('project_image');
            $filename = time() . '.' . $project_image->getClientOriginalExtension();
            $project_image->move(public_path('project_image'), $filename);
            $validatedProj['project_image'] = 'project_image/' . $filename;
        }

        Project::where('id', $project->id)->update($validatedProj);

        return redirect()->route('projects.index')->with('success', 'Project updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        $project->delete();
        return redirect()->route('projects.index')->with('success', 'Project deleted successfully!');
    }
}
