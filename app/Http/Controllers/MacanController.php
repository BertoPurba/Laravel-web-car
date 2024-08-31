<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MacanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if(!Auth::check()) {
            return redirect('login');
        }
        $posts =DB::table('macan')
        ->select('id','image','name_car','harga','created_at','updated_at')
        ->get();
$view_data = [
'posts' => $posts
];
return view('App.Admin.pagemodel.macan.index' , $view_data);
    
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if(!Auth::check()) {
            return redirect('login');
        }
        return view('App.Admin.pagemodel.macan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if(!Auth::check()) {
            return redirect('login');
        }
        $image = $request->input('image');
        $image_samping = $request->input('image_samping');
        $name_car = $request->input('name_car');
        $harga = $request->input('harga');

        DB::table('macan')->insert([
            'image' => $image,
            'image_samping' => $image_samping,
            'name_car' => $name_car,
            'harga' => $harga,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        return redirect('/postsMacan');
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        if(!Auth::check()) {
            return redirect('login');
        }
        $posts =DB::table('macan')
        ->select('id','image','name_car','harga')
        ->get();
$view_data = [
'posts' => $posts
];
return view('App.User.page_model.showmacan' , $view_data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        if(!Auth::check()) {
            return redirect('login');
        }
        $post = DB::table('macan')
        ->select('id','image','image_samping','name_car','harga')
        ->where('id', '=', $id)
        ->first();

        $view_data = [
            'post' => $post
        ];
        return view('App/Admin/pagemodel/macan/edit' , $view_data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        if(!Auth::check()) {
            return redirect('login');
        }
        $image = $request->input('image');
        $image_samping = $request->input('image_samping');
        $name_car = $request->input('name_car');
        $harga = $request->input('harga');
        DB::table('macan') 
        ->where('id', $id)
        ->update([
            'image' => $image, 
            'image_samping' => $image_samping, 
            'name_car' => $name_car,
            'harga' => $harga
        ]);
        return redirect("/postsMacan");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        if(!Auth::check()) {
            return redirect('login');
        }
        DB::table('macan')
        ->where('id', $id)
        ->delete();

    return redirect("postsMacan");
    }
}
