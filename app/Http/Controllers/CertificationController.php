<?php

namespace App\Http\Controllers;

use App\Models\Certification;
use Illuminate\Http\Request;

class CertificationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $certifications = Certification::all();
        return view('certifications.view-certifications', compact('certifications'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('certifications.create-certifications');
    }

    /**
     * Store a newly created resource in storage.
     */
    // attributes: certif_id, certif_name, certif_organization, certif_category, certif_desc, certif_date, certif_image
    public function store(Request $request)
    {
        // ddd($request->all()); // dump, die, debug
        $validatedCertif = $request->validate([
            'certif_name' => 'required|max:200',
            'certif_organization' => 'required|max:200',
            'certif_category' => 'required|max:100',
            'certif_desc' => 'nullable|max:200',
            'certif_date' => 'required|max:7',
            'certif_image' => 'required|image|file|mimes:jpg,jpeg,png|max:10000'
        ]);

        if($request->hasFile('certif_image') && $request->file('certif_image')->isValid()) {
            /*
            $exp_img_path = $request->file('job_image')->store('experience_image', 'public');
            $validatedExp['job_image'] = $exp_img_path;
            */
            $certif_image = $request->file('certif_image');
            $filename = time() . '.' . $certif_image->getClientOriginalExtension();
            $certif_image->move(public_path('certification_image'), $filename);
            $validatedCertif['certif_image'] = 'certification_image/' . $filename;
        }

        Certification::create($validatedCertif);

        return redirect()->route('certifications.index')->with('success', 'Certification created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Certification $certification)
    {
        return view('certifications.show-certifications', compact('certification'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Certification $certification)
    {
        return view('certifications.update-certifications', compact('certification'));
    }

    /**
     * Update the specified resource in storage.
     */
    // attributes: certif_id, certif_name, certif_organization, certif_category, certif_desc, certif_date, certif_image
    public function update(Request $request, Certification $certification)
    {
        // ddd($request->all()); // die, dump, debug
        $validatedCertif = $request->validate([
            'certif_name' => 'required|max:200',
            'certif_organization' => 'required|max:200',
            'certif_category' => 'required|max:100',
            'certif_desc' => 'nullable|max:200',
            'certif_date' => 'required|max:7',
            'certif_image' => 'required|image|file|mimes:jpg,jpeg,png|max:10000'
        ]);

        if($request->hasFile('certif_image') && $request->file('certif_image')->isValid()) {
            /*
            $exp_img_path = $request->file('job_image')->store('experience_image', 'public');
            $validatedExp['job_image'] = $exp_img_path;
            */
            $certif_image = $request->file('certif_image');
            $filename = time() . '.' . $certif_image->getClientOriginalExtension();
            $certif_image->move(public_path('certification_image'), $filename);
            $validatedCertif['certif_image'] = 'certification_image/' . $filename;
        }

        Certification::where('id', $certification->id)->update($validatedCertif);

        return redirect()->route('certifications.index')->with('success', 'Certification updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Certification $certification)
    {
        $certification->delete();
        return redirect()->route('certifications.index')->with('success', 'Certification deleted successfully!');
    }
}
