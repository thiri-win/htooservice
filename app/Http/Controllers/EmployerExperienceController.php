<?php

namespace App\Http\Controllers;

use App\Experience;
use App\Employer;
use Illuminate\Http\Request;

class EmployerExperienceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Employer $employer)
    {
        return response()->json([
            'data' => view('employer.partials.employer-experience-form',[
              'employer' => $employer,
              'experiences' => Experience::all(),
            ])->render()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Employer $employer, Request $request)
    {
        $validatedExpId = $request->validate([ 'experience_id' => 'required']);
        $validated = $request->validate([
            'workshop' => 'required',
            'remark' => 'sometimes',
            ]);
        $employer->experiences()->attach($validatedExpId, $validated);
        return redirect(route('employers.show', $employer));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employer $employer, Experience $experience)
    {
        dd($employer->experiences()->first());
        // dd($employer->experiences()->wherePivot('workshop', '=', $experience->pivot->workshop));
        $employer->experiences()->detach($experience);
        return redirect(route('employers.show', $employer));
    }
}
