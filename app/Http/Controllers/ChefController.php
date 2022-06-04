<?php

namespace App\Http\Controllers;

use App\Models\Chef;
use Illuminate\Http\Request;

class ChefController extends Controller
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
        $Chef = new Chef;
        $Chef-> chef_id=$request->chef_id;
        $Chef-> chef_name=$request->chef_name;
        $Chef-> email=$request->email;
        $Chef-> dob=$request->dob;
        $Chef-> p_no=$request->p_no;
        $Chef-> gender=$request->gender;
        $Chef-> e_school =$request->e_school;
        $Chef-> e_college =$request->e_college;
        $Chef-> e_university =$request->e_university;
        $Chef-> experience =$request->experience;
        $Chef-> speciality =$request->speciality;
        $Chef-> password=$request->password;
        $Chef-> con_password=$request->con_password;
        $request=$Chef->save();
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
     * @param  \App\Models\Chef  $chef
     * @return \Illuminate\Http\Response
     */
    public function show(Chef $chef)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Chef  $chef
     * @return \Illuminate\Http\Response
     */
    public function edit(Chef $chef)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Chef  $chef
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Chef $chef)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Chef  $chef
     * @return \Illuminate\Http\Response
     */
    public function destroy(Chef $chef)
    {
        //
    }
}
