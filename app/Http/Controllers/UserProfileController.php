<?php

namespace App\Http\Controllers;

use App\Models\NextOfKin;
use App\Models\User;
use App\Models\UserProfile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userProfile = UserProfile::where('user_id', Auth::user()->id)->first();

        if (!$userProfile) {
            return redirect()->route('userProfiles.create')->with('message', 'Update your profile');
        }

        $nextOfKin = NextOfKin::where('user_id', Auth::user()->id)->first();

        if (!$nextOfKin) {
            return redirect()->route('userProfiles.create')->with('message', 'Update your profile');
        }

        $user = User::findOrFail(Auth::user()->id);
        return view('userProfiles.index',
            compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('userProfiles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'BVN' => ['required', 'string', 'min:11', 'max:11', 'unique:user_profiles'],
            'NIN' => ['required', 'string', 'min:11', 'max:11', 'unique:user_profiles'],
            'image' => ['required', 'mimes:png,jpg,jpeg', 'max:5048'],
        ]);

        $newImageName = time() . '-' . $request->name . '.' .
        $request->image->extension();

        $request->image->move(public_path('images'), $newImageName);

        $userProfile = UserProfile::where('user_id', Auth::user()->id)->first();

        if ($userProfile) {
            return redirect()->back()->with('message', 'Your Profile has already been updated');
        }

        UserProfile::create([
            'user_id' => auth()->user()->id,
            'BVN' => $request->BVN,
            'NIN' => $request->NIN,
            'image' => $newImageName
        ]);

        return back()->with('success', 'Personal Information Save Successfully. Scroll down to Next Of Kin info');
    }


    /**
     * Show the form for editing the specified resource.
     *
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, UserProfile $userProfile)
    {
        $user = User::findOrFail(Auth::user()->id);
        return view('userProfiles.edit',
            compact('userProfile', 'user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UserProfile $userProfile)
    {
        $request->validate([
            'BVN' => ['required', 'numeric', 'min:11', 'max:11',],
            'NIN' => ['required', 'numeric', 'min:11', 'max:11',],
            'image' => ['required', 'mimes:png,jpg,jpeg', 'max:5048'],
        ]);

        $newImageName = time() . '-' . $request->name . '.' .
        $request->image->extension();

        $request->image->move(public_path('images'), $newImageName);

        $userProfile->update([
            'user_id' => auth()->user()->id,
            'BVN' => $request->BVN,
            'NIN' => $request->NIN,
            'image' => $newImageName
        ]);

        return redirect()->back()
        ->with('success', 'Personal Information Updated Successfully. Click Next to Next Of Kin Info');
    }

    /**
     * Remove the specified resource from storage.
     *
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        //
    }
}
