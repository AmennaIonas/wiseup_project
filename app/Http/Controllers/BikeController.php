<?php

namespace App\Http\Controllers;

use App\Bike;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

//use Illuminate\Support\Facades\Auth;

class BikeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        $bikes = Bike::all();
        $bikes = DB::table('bikes')->paginate(9);
        return view('homepage', ['bikes' => $bikes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

        return view('create_bike');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $v = Validator::make($request->all(), [
            'title' => 'required',
            'image' => 'required|image',
        ]);
        if ($v->fails())
        {
            return redirect()->back()->withErrors($v->errors());
        }

        $bike = new Bike();
        $bike->title = request('title');
        if ($request->file('image')->isValid()) {

            $photoName = $request->image->getClientOriginalName();
            $request->image->move(public_path('images'), $photoName);
            $bike->image = $photoName;
        }
        $bike->save();

        return view('create_bike');
    }


}
