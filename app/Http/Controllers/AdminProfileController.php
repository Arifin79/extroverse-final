<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;

class AdminProfileController extends Controller
{
    //
    public function index()
    {
        return view ('admin/profile/index', []);
    }

    public function update(User $user, Request $request)
    {
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'updated_at' => now()
        ]);

        return $this->success('profile','Profile updated successfully!');
    }
}
