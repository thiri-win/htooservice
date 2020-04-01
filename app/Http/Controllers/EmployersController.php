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
        	'employers' => Employer::paginate(10),
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

    public function createPosition(Employer $employer)
    {
        return response()->json([
            'data' => view('employer.partials.employer-position-form',[
                'employer' => $employer,
                'positions' => Position::all(),
            ])->render()
        ]);
    }

    public function storePosition(Employer $employer, Request $request)
    {
        $validatedData = $request->validate([ 'position_id' => 'required']);
        $employer->positions()->attach($validatedData);
        return redirect(route('employers.show', $employer));
    }

    public function detachPosition(Employer $employer, Position $position)
    {
        $employer->positions()->detach($position);
        return redirect(route('employers.show', $employer));
    }

    public function storeImage(Employer $employer, Request $request)
    {
        $img = $request->profile_avatar->store('public');
        $employer->image ?
        $employer->image()->update(['url' =>$img]):
        $employer->image()->create(['url' =>$img]);
        return redirect(route('employers.show', $employer));
    }

    public function createExperience(Employer $employer)
    {
        return response()->json([
            'data' => view('employer.partials.employer-experience-form',[
              'employer' => $employer,
              'experiences' => Experience::all(),
            ])->render()
        ]);
    }

    public function storeExperience(Employer $employer, Request $request)
    {
        $validatedExpId = $request->validate([ 'experience_id' => 'required']);
        $validatedContent = $request->validate([ 'content' => 'required']);
        $employer->experiences()->attach($validatedExpId , $validatedContent);
        return redirect(route('employers.show', $employer));
    }

    public function detachExperience(Employer $employer, Experience $experience)
    {
        $employer->experiences()->detach($experience);
        return redirect(route('employers.show', $employer));
    }

}
