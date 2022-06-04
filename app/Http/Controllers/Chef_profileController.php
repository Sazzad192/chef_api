<?php

namespace App\Http\Controllers;

use App\Models\Chef_profile;
use Illuminate\Http\Request;

class Chef_profileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Chef_profile = new Chef_profile;
        $Chef_profile-> education =$request->education;
        $Chef_profile-> experience =$request->experience;
        $Chef_profile-> speciality =$request->speciality;
        $Chef_profile-> ratting =$request->ratting;
        $request=$Chef_profile->save();
        if($request){
            return ["Request"=>'Store'];
        }
        else{
            return ["Request"=>'Not store'];
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Chef_profile  $chef_profile
     * @return \Illuminate\Http\Response
     */
    public function show(Chef_profile $chef_profile)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Chef_profile  $chef_profile
     * @return \Illuminate\Http\Response
     */
    public function edit(Chef_profile $chef_profile)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Chef_profile  $chef_profile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Chef_profile $chef_profile)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Chef_profile  $chef_profile
     * @return \Illuminate\Http\Response
     */
    public function destroy(Chef_profile $chef_profile)
    {
        //
    }
}
