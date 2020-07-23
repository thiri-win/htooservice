<?php

namespace App\Http\Controllers;

use App\Employer;
use Illuminate\Http\Request;

class EmployerAvatarController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Employer  $employer
     * @return \Illuminate\Http\Response
     */
    public function store(Employer $employer, Request $request)
    {
        $img = $request->profile_avatar->store('public');
        $employer->image ?
        $employer->image()->update(['url' =>$img]):
        $employer->image()->create(['url' =>$img]);
        return redirect(route('employers.show', $employer));
    }
}
