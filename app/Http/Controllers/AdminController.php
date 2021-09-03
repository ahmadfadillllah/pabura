<?php

namespace App\Http\Controllers;

use App\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function home()
    {
        return view('Admin.home');
    }

    public function seller()
    {
        $listProduk = Produk::where('user_id',auth()->user()->id)->get();
        return view('Admin.seller', ['listProduk' => $listProduk]);
    }

    public function inputproduk(Request $request)
    {
        $produk = new Produk();
        $produk->user_id = Auth::user()->id;
        $produk->name = $request->name;
        $produk->price = $request->price;
        $produk->description = $request->description;
        $produk->image = $request->image;
        if($request->hasFile('image')){
            $request->file('image')->move('images/uploads/', $request->file('image')->getClientOriginalName());
            $produk->image = $request->file('image')->getClientOriginalName();

        }
        $produk->save();

        return redirect()->route('seller');
    }
}
