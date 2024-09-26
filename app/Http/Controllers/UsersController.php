<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        if(!Auth::check()) {
            return redirect('login');
        }
        $posts =DB::table('users')
        ->select('id','name','email','email_verified','created_at')
        ->get();
$view_data = [
'posts' => $posts
];
return view('App.Admin.home.users' , $view_data);
    }

    // public function create()
    // {
    //     if(!Auth::check()) {
    //         return redirect('login');
    //     }
    //     return view('App.Admin.home.tambah');

    // }

    // /**
    //  * Store a newly created resource in storage.
    //  */
    // public function store(Request $request)
    // {
    //     if(!Auth::check()) {
    //         return redirect('login');
    //     }
    //     $name = $request->input('name');
    //     $email = $request->input('email');
    //     $role = $request->input('role');
    //     $password = $request->input('password');

    //     DB::table('users')->insert([
    //         'name' => $name,
    //         'email' => $email,
    //         'email_verified' => $role,
    //         'password' => Hash::make($password)
    //     ]);

    //     return redirect('/dataUsers');
    // }


    /**
     * Show the form for creating a new resource.
     */
    public function edit(string $id)
    {
        // if(!Auth::check()) {
        //     return redirect('login');
        // }
        $post = DB::table('users')
        ->select('id','name','email','email_verified')
        ->where('id', '=', $id)
        ->first();

        $view_data = [
            'post' => $post
        ];
        return view('App/Admin/home/userEdit' , $view_data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // if(!Auth::check()) {
        //     return redirect('login');
        // }
        $name = $request->input('name');
        $email = $request->input('email');
        $email_verified = $request->input('email_verified');
        DB::table('users') 
        ->where('id', $id)
        ->update([
            'name' => $name, 
            'email' => $email, 
            'email_verified' => $email_verified
        ]);
        return redirect("/dataUsers");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        if(!Auth::check()) {
            return redirect('login');
        }
        DB::table('users')
        ->where('id', $id)
        ->delete();

    return redirect("dataUsers");
    }


}