<?php

namespace App\Http\Controllers;

use App\Models\User;
// use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        if (!isset($_GET['user']) || empty($_GET['user'])) {
            $users = User::orderBy('id', 'desc')->paginate(8);
            $pagination = 1;
        } else {
            $search_key = isset($_GET['user']) ? $_GET['user'] : "";
            $users = User::where('name', 'LIKE', '%' . $search_key . '%')->orWhere('email', 'LIKE', '%' . $search_key . '%')->get();
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
            'email' => 'required | email |unique:users,email',
            'password' => 'required | confirmed | min:8',
            'password_confirmation' => 'required',
            'profile_photo' => 'image|mimes:jpeg,png,jpg',
        ));

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        // $photo = $request->file('profile_photo');
        // if ($photo->isValid()) {
        //     $user->addMedia($photo)->toMediaCollection('profile_picture');
        // }
        $profile_picture = '';

        if ($request->hasFile('profile_photo')) {
            $request->validate([
                'profile_photo' => 'image',
            ]);

            $photo = $request->file('profile_photo');
            $path = $photo->store('profile_photo', 'public');

            // Resize the image if needed
            $image = Image::make(public_path("storage/{$path}"));
            // Perform any image manipulation here if needed
            $image->save();

            $profile_picture = $path;
        }

        $user->profile_picture = $profile_picture;
        $user->save();

        return $user;

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
            'profile_photo' => 'image|mimes:jpeg,png,jpg',
        ]);

        $user = User::findOrFail($id);
        $user->name = $request->name;
        $user->email = $request->email;
        if (!empty($request->password)) {
            $user->password = $request->password;
        }

        $photo = $request->file('profile_photo');

        if (isset($photo) && $photo->isValid()) {
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

    /**
     * User Logout
     *
     */
    public function logout(Request $request)
    {

        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        // Session::flush();
        return redirect(route('login'));
    }

    // My Profile
    public function my_profile()
    {
        $user = auth()->user();

        $profile_pictute = $user->getMedia('profile_pictute')->reverse()->first();
        dd($profile_pictute);
        return view('admin.users.my-profile', compact('user'));
    }

    // My Profile Update
    public function my_profile_update(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required | email',
            'profile_photo' => 'image|mimes:jpeg,png,jpg',
        ]);

        $user = auth()->user();
        $user->name = $request->name;
        $user->email = $request->email;
        if (!empty($request->password)) {
            $user->password = $request->password;
        }

        $photo = $request->file('profile_photo');

        if (isset($photo) && $photo->isValid()) {
            $user->addMedia($photo)->toMediaCollection('profile_picture');
        }



        $user->save();

        return back()->with('message', 'Profile Updated Successfully.');
    }
}