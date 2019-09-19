<?php

namespace App\Http\Controllers\Asset;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AssetController extends Controller
{
    public function index(){
        return view('admin.asset.index');
    }

    public function create(){
        return view('admin.asset.create');
    }

    public function store(Request $request){
        dd($request->all());
    }
}
