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

        $request->validate([
            'type' => ['required'],
            'computer_name' => ['required'],
            'brand' => ['required'],
            'model' => ['required'],
            'mac_1' => ['required', 'regex:/([A-F0-9]{2}[:|\-]?){6}/'],
            'mac_2' => ['nullable', 'regex:/([A-F0-9]{2}[:|\-]?){6}/'],
            'sn' => ['required'],
            'os_version' => ['required'],
            'os_key' => ['nullable'],
            'purchase_at' => ['required', 'date'],
            'warranty_status' => ['required'],
            'warranty_expiry' => ['required', 'date'],
            'remark' => ['required']
        ]);

        dd($request->all());
    }
}
