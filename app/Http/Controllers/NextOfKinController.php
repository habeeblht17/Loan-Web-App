<?php

namespace App\Http\Controllers;

use App\Models\NextOfKin;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NextOfKinController extends Controller
{

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'min:11', 'max:14', 'unique:next_of_kin'],
            'DOB' => ['required', 'date'],
            'gender' => ['required'],
            'relationship' => ['required', 'min:5', 'max:255'],
            'street' => ['required', 'string', 'max:255'],
            'city' => ['required', 'string', 'max:255'],
            'state' => ['required', 'string', 'max:255'],
            'country' => ['required', 'string', 'max:255'],
        ]);

        $userProfile = NextOfKin::where('user_id', Auth::user()->id)->first();

        if ($userProfile) {
            return redirect()->back()->with('message', 'Your Profile has already been updated');
        }

        NextOfKin::create([
            'user_id' => auth()->user()->id,
            'name' => $request->input('name'),
            'phone' => $request->input('phone'),
            'DOB' => $request->input('DOB'),
            'gender' => $request->input('gender'),
            'relationship' => $request->input('relationship'),
            'street' => $request->input('street'),
            'city' => $request->input('city'),
            'state' => $request->input('state'),
            'country' => $request->input('country'),
        ]);

        if (Auth::check()) {
            User::where('id', Auth::user()->id)->update(['complete' => true]);
        }

        return redirect()->route('userProfiles.index')
        ->with('success', 'Next of Kin Info Updated Successfully');

    }



    /**
     * Show the form for editing the specified resource.
     *
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(NextOfKin $nextOfKin)
    {
        $user = User::findOrFail(Auth::user()->id);
        return view('nextOfKins.edit', compact('nextOfKin', 'user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, NextOfKin $nextOfKin)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'min:11', 'max:14', 'unique:next_of_kin'],
            'DOB' => ['required', 'date'],
            'gender' => ['required'],
            'relationship' => ['required', 'min:5', 'max:255'],
            'street' => ['required', 'string', 'max:255'],
            'city' => ['required', 'string', 'max:255'],
            'state' => ['required', 'string', 'max:255'],
            'country' => ['required', 'string', 'max:255'],
        ]);

        $nextOfKin->update([
            'user_id' => auth()->user()->id,
            'name' => $request->input('name'),
            'phone' => $request->input('phone'),
            'DOB' => $request->input('DOB'),
            'gender' => $request->input('gender'),
            'relationship' => $request->input('relationship'),
            'street' => $request->input('street'),
            'city' => $request->input('city'),
            'state' => $request->input('state'),
            'country' => $request->input('country'),

        ]);

        return redirect()->route('userProfiles.index')
            ->with('success', 'Next of Kin Info Save Successfully');

    }

}
