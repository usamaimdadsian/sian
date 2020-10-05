<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $active_users = User::where(['status'=>'active','type' => 'blogger'])->get();
        $blocked_users = User::where(['status'=>'blocked','type' => 'blogger'])->get();
        $suspended_users = User::where(['status'=>'suspended','type' => 'blogger'])->get();
        $deleted_users = User::where(['status'=>'deleted','type' => 'blogger'])->get();
        $pending_users = User::where(['status'=>'pending','type' => 'blogger'])->get();
        return view('dashboard.user.index',compact('active_users','blocked_users','suspended_users','deleted_users','pending_users'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
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
    public function update(Request $request,User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('admin.user.index');
    }

    public function softDestroy(User $user)
    {
        $user->status = 'deleted';
        $user->update();
        return redirect()->route('admin.user.index');
    }
    public function restore(User $user)
    {
        $user->status = 'active';
        $user->update();
        return redirect()->route('admin.user.index');
    }
    public function block(User $user)
    {
        $user->status = 'blocked';
        $user->update();
        return redirect()->route('admin.user.index');
    }
    public function suspend(User $user)
    {
        $user->status = 'suspended';
        $user->update();
        return redirect()->route('admin.user.index');
    }
}
