<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class TaycanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if(!Auth::check()) {
            return redirect('login');
        }
        $posts =DB::table('taycan')
        ->select('id','image','name_car','harga','created_at','updated_at')
        ->get();
$view_data = [
'posts' => $posts
];
return view('App.Admin.pagemodel.taycan.indexTaycan' , $view_data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if(!Auth::check()) {
            return redirect('login');
        }
        return view('App.Admin.pagemodel.taycan.createTaycan');
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

        DB::table('taycan')->insert([
            'image' => $image,
            'image_samping' => $image_samping,
            'name_car' => $name_car,
            'harga' => $harga,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        return redirect('/postsTaycan');
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        if(!Auth::check()) {
            return redirect('login');
        }
        $posts =DB::table('taycan')
        ->select('id','image','name_car','harga')
        ->get();
$view_data = [
'posts' => $posts
];
return view('App.User.page_model.showtaycan' , $view_data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        if(!Auth::check()) {
            return redirect('login');
        }
        $post = DB::table('taycan')
        ->select('id','image','image_samping','name_car','harga')
        ->where('id', '=', $id)
        ->first();

        $view_data = [
            'post' => $post
        ];
        return view('App/Admin/pagemodel/taycan/editTaycan' , $view_data);
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
        DB::table('taycan') 
        ->where('id', $id)
        ->update([
            'image' => $image, 
            'image_samping' => $image_samping, 
            'name_car' => $name_car,
            'harga' => $harga
        ]);
        return redirect("/postsTaycan");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        if(!Auth::check()) {
            return redirect('login');
        }
        DB::table('taycan')
        ->where('id', $id)
        ->delete();

    return redirect("postsTaycan");
    }
}
