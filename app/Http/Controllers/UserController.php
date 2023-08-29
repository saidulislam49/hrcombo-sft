<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        if(!isset($_GET['user']) || empty($_GET['user'])){
            $users = User::orderBy('id', 'desc')->paginate(8);
            $pagination = 1;
        }else{
            $search_key = isset($_GET['user']) ? $_GET['user'] : "";
            $users = User::where('name', 'LIKE', '%'.$search_key.'%')->orWhere('email', 'LIKE', '%' . $search_key . '%')->get();
            $pagination = 0;
        }
        return view('admin.users.user-list', compact('users', 'pagination'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.users.user-create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(array(
            'name' => 'required',
            'email' => 'required | email',
            'password' => 'required | confirmed | min:8',
            'password_confirmation' => 'required',
            'profile_photo' => 'image|mimes:jpeg,png,jpg',
        ));

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password= $request->password;
        $photo = $request->file('profile_photo');
        if ($photo->isValid()) {
            $user->addMedia($photo)->toMediaCollection('profile_picture');
        }
        $user->save();

        return redirect()->route('admin.users.create')->with('message', 'User Created Successfully');
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
        $user = User::findOrFail($id);
        return view('admin.users.user-edit', compact('user'));
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
        $request->validate([
            'name' => 'required',
            'email' => 'required | email',
            'password' => 'required | confirmed | min:8',
            'password_confirmation' => 'required',
            'profile_photo' => 'image|mimes:jpeg,png,jpg',
        ]);

        $user = User::findOrFail($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;

        $photo = $request->file('profile_photo');
        if($photo->isValid()){
            $user->addMedia($photo)->toMediaCollection('profile_picture');
        }

        $user->save();

        return back()->with('message', 'User Updated Successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return back()->with('message', "User Deleted Successfully");
    }
}