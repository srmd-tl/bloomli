<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function update(Request $request, User $user)
    {
        $request->validate(['email' => 'required|email|unique:users,email']);
        if (auth()->user()->can('update', $user->id)) {
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

            $user->update($payload);
        }


    }

    public function profile()
    {
        return view('user.profile');
    }

}
