<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AdminRegisterController extends Controller
{
    public function index(Request $request)
    {
        $user = User::orderby('created_at')->get();
        $keyword = $request->get('search');
        $perPage = 5;

        if(!empty($keyword)){
            $user = User::where('name', 'LIKE', "%$keyword%")
                        ->orWhere('job_desc', 'LIKE', "%$keyword%")
                        ->latest()->paginate($perPage);
        } else {
            $user = User::latest()->paginate($perPage);
        }

        return view ('admin/register/index', ['user' => $user])->with('i', (request()->input('page', 1)-1) *5);
    }

    public function store(Request $request){

        $product = new User;

        $request->validate([
            'project_name' => 'required',
            'image' => 'required|mimes:png,jpg,jpeg,gif,svg|max:2028'
        ]);

        $file_name = time() . '.' . request()->image->getClientOriginalExtension();
        request()->image->move(public_path('images'), $file_name);

        $product->id = $request->id;
        $product->image = $image;
        $product->name = $request->name;
        $product->job_desc = $request->job_desc;
        $product->email = $request->email;
        $product->phone = $request->phone;

        $product->save();
        return redirect()->route('admin/register/index')->with('success', 'Assignment Added successfully');

    }
}
