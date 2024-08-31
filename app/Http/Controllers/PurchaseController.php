<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class PurchaseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        if(!Auth::check()) {
            return redirect('login');
        }
        $posts =DB::table('pembelian')
        ->select('id','name','status','created_at')
        ->get();
$view_data = [
'posts' => $posts
];
return view('App.Admin.home.purchase' , $view_data);
    }


    /**
     * Show the form for creating a new resource.
     */
    public function edit(string $id)
    {
        // if(!Auth::check()) {
        //     return redirect('login');
        // }
        $post = DB::table('pembelian')
        ->select('id','name','no_hp','email','alamat','car','color','status')
        ->where('id', '=', $id)
        ->first();

        $view_data = [
            'post' => $post
        ];
        return view('App/Admin/home/purchaseEdit' , $view_data);
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
        $no_hp = $request->input('no_hp');
        $email = $request->input('email');
        $alamat = $request->input('alamat');
        $car = $request->input('car');
        $color = $request->input('color');
        $status = $request->input('status');
        DB::table('pembelian') 
        ->where('id', '=' , $id)
        ->update([
            'name' => $name, 
            'no_hp' => $no_hp,
            'email' => $email, 
            'alamat' => $alamat,
            'car' => $car,
            'color' => $color,
            'status' => $status
        ]);
        return redirect("/purchase");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        if(!Auth::check()) {
            return redirect('login');
        }
        DB::table('pembelian')
        ->where('id', $id)
        ->delete();

    return redirect("purchase");
    }


}