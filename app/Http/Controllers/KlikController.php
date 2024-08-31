<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class KlikController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function show911admin(string $id)
    {
        if(!Auth::check()) {
            return redirect('login');
        }
        $post = DB::table('911model')
        ->select('image','image_samping','name_car','harga')
        ->where('id', '=', $id)
        ->first();

        $view_data = [
            'post' => $post
        ];
        return view('App/Admin/pagemodel/911/show911' , $view_data);
    }
    public function show911(string $id)
    {
        if(!Auth::check()) {
            return redirect('login');
        }
        $post = DB::table('911model')
        ->select('image','image_samping','name_car','harga')
        ->where('id', '=', $id)
        ->first();

        $view_data = [
            'post' => $post
        ];
        return view('App/User/page_model/All/911' , $view_data);
    }
    public function show718admin(string $id)
    {
        if(!Auth::check()) {
            return redirect('login');
        }
        $post = DB::table('718model')
        ->select('image','image_samping','name_car','harga')
        ->where('id', '=', $id)
        ->first();

        $view_data = [
            'post' => $post
        ];
        return view('App/Admin/pagemodel/911/show911' , $view_data);
    }
    public function show718(string $id)
    {
        if(!Auth::check()) {
            return redirect('login');
        }
        $post = DB::table('718model')
        ->select('image','image_samping','name_car','harga')
        ->where('id', '=', $id)
        ->first();

        $view_data = [
            'post' => $post
        ];
        return view('App/User/page_model/All/911' , $view_data);
    }
    public function showmacanadmin(string $id)
    {
        if(!Auth::check()) {
            return redirect('login');
        }
        $post = DB::table('macan')
        ->select('image','image_samping','name_car','harga')
        ->where('id', '=', $id)
        ->first();

        $view_data = [
            'post' => $post
        ];
        return view('App/Admin/pagemodel/macan/showmacan' , $view_data);
    }
    public function showmacan(string $id)
    {
        if(!Auth::check()) {
            return redirect('login');
        }
        $post = DB::table('macan')
        ->select('image','image_samping','name_car','harga')
        ->where('id', '=', $id)
        ->first();

        $view_data = [
            'post' => $post
        ];
        return view('App/User/page_model/All/macan' , $view_data);
    }
    public function showtaycanadmin(string $id)
    {
        if(!Auth::check()) {
            return redirect('login');
        }
        $post = DB::table('taycan')
        ->select('image','image_samping','name_car','harga')
        ->where('id', '=', $id)
        ->first();

        $view_data = [
            'post' => $post
        ];
        return view('App/Admin/pagemodel/taycan/showtaycan' , $view_data);
    }
    public function showtaycan(string $id)
    {
        if(!Auth::check()) {
            return redirect('login');
        }
        $post = DB::table('taycan')
        ->select('image','image_samping','name_car','harga')
        ->where('id', '=', $id)
        ->first();

        $view_data = [
            'post' => $post
        ];
        return view('App/User/page_model/All/taycan' , $view_data);
    }



    public function create()
    {
        if(!Auth::check()) {
            return redirect('login');
        }
        return view('App.Admin.buying');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if(!Auth::check()) {
            return redirect('login');
        }
        $name = $request->input('name');
        $contact = $request->input('contact');
        $email = $request->input('email');
        $car = $request->input('car');
        $color = $request->input('color');
        $alamat = $request->input('alamat');
        $message = $request->input('message');

        DB::table('pembelian')->insert([
            'name' => $name,
            'no_hp' => $contact,
            'email' => $email,
            'alamat' => $alamat,
            'car' => $car,
            'color' => $color,
            'message' => $message,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        return redirect('/model/911');
    }

}
