<?php

namespace App\Http\Controllers;

use App\Employer;
use App\Position;
use App\Experience;
use Illuminate\Http\Request;
use App\Http\Requests\StoreEmployer;

class EmployersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('employer.index', [
        	'employers' => Employer::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('employer.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreEmployer $request)
    {
        $employer = Employer::create($request->all());
        return redirect(route('employers.show', $employer->id));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Employer $employer)
    {
        return view('employer.show', [
            'employer' => $employer,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Employer $employer)
    {
        return view('employer.form', [
            'employer' => $employer
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreEmployer $request, Employer $employer)
    {
        if($request->hasFile('avatar'))
        {
            $avatar = $request->avatar->store('avatars');
            $employer->update([
                'name' => $request->name,
                'dob' => $request->dob,
                'nrc' => $request->nrc,
                'email' => $request->email,
                'phone' => $request->phone,
                'address' => $request->address,
                'avatar' => $avatar,
                'experience' => $request->experience,
            ]);
        }
        $employer->update($request->all());
        return redirect(route('employers.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
