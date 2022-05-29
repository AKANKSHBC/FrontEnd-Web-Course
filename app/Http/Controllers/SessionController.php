<?php

namespace App\Http\Controllers;

use App\Models\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class SessionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sessions = Session::orderBy('created_at','asc')->get();
        return view('session.index')->with('sessions',$sessions);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('session.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'body' => 'required',
            'coverImage' => 'required|image|mimes:png,jpg|max:2048',
            'date' => 'required',
        ]);

        $filenameCover = $request->file('coverImage')->getClientOriginalName();
        $justFilenameCover = pathinfo($filenameCover, PATHINFO_FILENAME);
        $extension = $request->file('coverImage')->getClientOriginalExtension();
        $newCoverImage = $justFilenameCover.'_'.time().'.'.$extension;
        $path = $request->file('coverImage')->storeAs('public/coverImages', $newCoverImage);

        $carDate = Carbon::createFromFormat('Y-m-d', $request->date);

        $sessionPost = Session::create([
            'name' => $request->name,
            'body' => $request->body,
            'coverImage' => $newCoverImage,
            'date' => $carDate->toFormattedDateString(),
        ]);

        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
}
