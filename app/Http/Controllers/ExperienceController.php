<?php

namespace App\Http\Controllers;

use App\Models\Experience;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\File;

class ExperienceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $experiences = Experience::all();
        return view('experiences.view-experiences', compact('experiences'));
    }

    /**
     * Show the form for creating a new resource.
     */
    // attributes: job_id, job_pos, workplace, job_start_date, job_desc, job_image
    public function create()
    {
        return view('experiences.create-experiences');
    }

    /**
     * Store a newly created resource in storage.
     */
    // attributes: job_id, job_pos, workplace, job_start_date, job_finish_date, job_desc, job_image
    /*
    public function store(Request $request)
    {
        dd($request->all); // debug
        $validatedJob = $request->validate([
            'job_pos' => 'required|max:255',
            'workplace' => 'required|max:255',
            'job_start_date' => 'required|max:7',
            'job_finish_date' => 'optional|max:7',
            'job_desc' => 'required|max:255',
            'job_image' => 'required|image|mimes:jpg,jpeg,png'
        ]);
        $exp = new Experience();
        $exp->job_pos = $request->job_pos;
        $exp->workplace = $request->workplace;
        $exp->job_start_date = $request->job_start_date;
        $exp->job_finish_date = $request->job_finish_date;
        $exp->job_desc = $request->job_desc;
        if($request->hasFile('job_image')) {
            $job_img = $request->file('job_image');
            $filename = time() . '.' . $job_img->getClientOriginalExtension();
            $job_img->move(public_path('experience_image'), $filename);
            $exp->job_image = 'experience_image/' . $filename;
        }
        $exp->save();
        return redirect()->route('experiences.index')->with('success', 'Product created successfully!');
    }
    */

    public function store(Request $request) {
        // ddd($request->all()); // dump, die, debug
        $validatedExp = $request->validate([
            'job_pos' => 'required|max:100',
            'workplace' => 'required',
            'job_category' => 'required|max:20',
            'job_start_date' => 'required|max:10',
            'job_finish_date' => 'required|max:10',
            'job_desc' => 'nullable|max:250',
            'job_image' => 'required|image|file|mimes:jpg,jpeg,png|max:10000'
        ]);

        if($request->hasFile('job_image') && $request->file('job_image')->isValid()) {
            /*
            $exp_img_path = $request->file('job_image')->store('experience_image', 'public');
            $validatedExp['job_image'] = $exp_img_path;
            */
            $job_image = $request->file('job_image');
            $filename = time() . '.' . $job_image->getClientOriginalExtension();
            $job_image->move(public_path('experience_image'), $filename);
            $validatedExp['job_image'] = 'experience_image/' . $filename;
        }

        Experience::create($validatedExp);

        return redirect()->route('experiences.index')->with('success', 'Work experience created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Experience $experience)
    {
        return view('experiences.show-experiences', compact('experience'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Experience $experience)
    {
        return view('experiences.update-experiences', compact('experience'));
    }

    /**
     * Update the specified resource in storage.
     */
    // attributes: job_id, job_pos, workplace, job_start_date, job_finish_date, job_desc, job_image
    // with the debug dd($request->all()) in update and store functions, the problem is most likely the controller and the validation
    /*
    public function update(Request $request, Experience $experience)
    {
        dd($request->all); // debug
        $validatedJob = $request->validate([
            'job_pos' => 'required|max:255',
            'workplace' => 'required|max:255',
            'job_start_date' => 'required|max:7',
            'job_finish_date' => 'nullable',
            'job_desc' => 'required|max:255',
            'job_image' => 'required|image|mimes:jpeg,jpg,png'
        ]);
        $experience->job_pos = $request->job_pos;
        $experience->workplace = $request->workplace;
        $experience->job_start_date = $request->job_start_date;
        $experience->job_finish_date = $request->job_finish_date;
        $experience->job_desc = $request->job_desc;
        if($request->hasFile('job_image')) {
            $job_img = $request->file('job_image');
            $filename = time() . '.' . $job_img->getClientOriginalExtension();
            $job_img->move(public_path('experience_image'), $filename);
            $experience->job_image = 'experience_image/' . $filename;
        }
        $experience->update();
        return redirect()->route('experiences.index')->with('success', 'Work experience updated successfully!');
    }
    */

    public function update(Request $request, Experience $experience) {
        // ddd($request->all()); // die, dump, debug
        $validatedExp = $request->validate([
            'job_pos' => 'required|max:100',
            'workplace' => 'required',
            'job_category' => 'required|max:20',
            'job_start_date' => 'required|max:10',
            'job_finish_date' => 'nullable|max:10',
            'job_desc' => 'nullable|max:250',
            'job_image' => 'required|file|mimes:jpg,jpeg,png|max:10000'
        ]);

        if($request->hasFile('job_image') && $request->file('job_image')->isValid()) {
            /*
            $exp_img_path = $request->file('job_image')->store('experience_image', 'public');
            $validatedExp['job_image'] = $exp_img_path;
            */
            $job_image = $request->file('job_image');
            $filename = time() . '.' . $job_image->getClientOriginalExtension();
            $job_image->move(public_path('experience_image'), $filename);
            $validatedExp['job_image'] = 'experience_image/' . $filename;
        }

        Experience::where('id', $experience->id)->update($validatedExp);

        return redirect()->route('experiences.index')->with('success', 'Work experience updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Experience $experience)
    {
        $experience->delete();
        // Experience::destroy($experience->id); // can't delete

        return redirect()->route('experiences.index')->with('success', 'Work experience deleted successfully!');
    }
}
