<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Assignment;
use App\Models\Information;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index(Request $request)
    {

        $information = Information::orderby('created_at')->get();
        $keyword = $request->get('search');
        $perPage = 5;

        if(!empty($keyword)){
            $information = Information::where('title', 'LIKE', "%$keyword%")
                        ->orWhere('description', 'LIKE', "%$keyword%")
                        ->latest()->paginate($perPage);
        } else {
            $information = Information::latest()->paginate($perPage);
        }

        $assignment = Assignment::orderby('created_at')->get();
        $keyword = $request->get('search');
        $perPage = 5;

        if(!empty($keyword)){
            $assignment = Assignment::where('project_name', 'LIKE', "%$keyword%")
                        ->orWhere('customer_name', 'LIKE', "%$keyword%")
                        ->latest()->paginate($perPage);
        } else {
            $assignment = Assignment::latest()->paginate($perPage);
        }

        return view ('home', ['assignment' => $assignment, 'information' => $information])->with('i', (request()->input('page', 1)-1) *5);
    }

    public static function store(Request $request){

        $product = new Assignment;

        $request->validate([
            'project_name' => 'required',
            'image' => 'required|mimes:png,jpg,jpeg,gif,svg|max:2028'
        ]);

        $file_name = time() . '.' . request()->image->getClientOriginalExtension();
        request()->image->move(public_path('images'), $file_name);

        $product->id = $request->id;
        $product->project_name = $request->project_name;
        $product->project_type = $request->project_type;
        $product->customer_name = $request->customer_name;
        $product->customer_type = $request->customer_type;
        $product->deadline = $request->deadline;
        $product->image = $file_name;

        $product->save();
        return redirect()->route('assignment/index')->with('success', 'Assignment Added successfully');

    }

    public function storeInfo(Request $request){

        $product = new Information;

        $product->id = $request->id;
        $product->title = $request->title;
        $product->date = $request->date;
        $product->description = $request->description;

        $product->save();
        return redirect()->route('dashboard/index')->with('success', 'Assignment Added successfully');

    }

}
