<?php

namespace App\Http\Controllers;

use App\Models\Chef_login;
use Illuminate\Http\Request;

class Chef_loginController extends Controller
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
        $Chef_login = new Chef_login;
        $Chef_login-> chef_name=$request->chef_name;
        $Chef_login-> password=$request->password;
        $request=$Chef_login->save();
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
     * @param  \App\Models\Chef_login  $chef_login
     * @return \Illuminate\Http\Response
     */
    public function show(Chef_login $chef_login)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Chef_login  $chef_login
     * @return \Illuminate\Http\Response
     */
    public function edit(Chef_login $chef_login)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Chef_login  $chef_login
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Chef_login $chef_login)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Chef_login  $chef_login
     * @return \Illuminate\Http\Response
     */
    public function destroy(Chef_login $chef_login)
    {
        //
    }
}
