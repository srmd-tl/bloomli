<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function update(Request $request, User $user)
    {
        $request->validate(['email' => 'required|email|unique:users,email,'.auth()->user()->id,]);
        if (auth()->user()->can('update', $user)) {
            $payload = [
                'first_name' => $request->first_name ?? $user->first_name,
                'last_name' => $request->last_name ?? $user->last_name,
                'email' => $request->email ?? $user->email,
                'contact' => $request->email ?? $user->email,
                'address' => $request->address ?? $user->address,
                'dob' => $request->dob ?? $user->dob,
                'gender' => $request->gender ?? $user->gender,
            ];
            if ($request->password) {
                $payload['password'] = $request->password;
            }
            if ($request->position) {
                $payload['position'] = $request->position;
            }
            if($request->profile)
            {
               $path= $request->file('profile')->store('profile');
                $payload['profile_img'] = $path;
            }

            $user->update($payload);
            return back();
        }
        else
        {
            abort(403);
        }



    }

    public function profile()
    {
        return view('user.profile');
    }

}
