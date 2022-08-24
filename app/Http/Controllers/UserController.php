<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Auth\User;

class UserController extends Controller
{
    // public function __construct()
    // {
    //     $this->authorize('accessAdmin');
    // }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $this->authorize('accessAdmin');
        //returns a database builder
        // dd((new User())->newQuery());
        $users = (new User())
            ->newQuery()
            ->paginate(5);

        return view('admin.users.index', ['users' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.users.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return view('admin.users.show');
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
    public function edit(User $user)
    {
        return view('admin.users.form', ['user' => $user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $request->validate([
            "name" => "required|string|max:255",
            "email" => "required|string|email|max:255|unique:users,email," . $user->id,
            "password" => "nullable|string|min:6|confirmed",
            "password_confirmation" => "nullable|string|min:6",
            "first_name" => "required|string|max:255",
            "last_name" => "required|string|max:255",
            "phone" => "required|string|max:12",
            "address" => "required|string|max:255",
            "nic" => "required|string|max:12",
            "country" => "required|string|max:255",
            "city" => "required|string|max:255",
            "state" => "required|string|max:255",
            "zip" => "required|string|max:255",
            "role" => "required",
        ]);
        // dd($request, $user);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(auth()->user()->id == $id) {
            return redirect()->route('users.index')->with('error', 'You cannot delete yourself');
        }
        (new User())->newQuery()->find($id)->delete();

        return redirect()->route('users.index');
    }
}
