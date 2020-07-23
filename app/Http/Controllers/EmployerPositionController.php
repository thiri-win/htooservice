<?php

namespace App\Http\Controllers;

use App\Employer;
use App\Position;
use Illuminate\Http\Request;

class EmployerPositionController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Employer $employer)
    {
        return response()->json([
            'data' => view('employer.partials.employer-position-form',[
                'employer' => $employer,
                'positions' => Position::all(),
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
        $validatedData = $request->validate([ 'position_id' => 'required']);
        $employer->positions()->attach($validatedData);
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
    public function destroy(Employer $employer, Position $position)
    {
        $employer->positions()->detach($position);
        return redirect(route('employers.show', $employer));
    }
}
