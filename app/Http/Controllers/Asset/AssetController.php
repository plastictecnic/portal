<?php

namespace App\Http\Controllers\Asset;

use App\Asset;
use App\Computer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Software;
use Carbon\Carbon;
use Storage;

class AssetController extends Controller
{
    public function index(){
        return view('admin.asset.index');
    }

    public function create(){
        return view('admin.asset.create');
    }

    public function store(Request $request){

        // $request->validate([
        //     'type' => ['required'],
        //     'computer_name' => ['required'],
        //     'brand' => ['required'],
        //     'model' => ['required'],
        //     'mac_1' => ['required', 'regex:/([A-F0-9]{2}[:|\-]?){6}/'],
        //     'mac_2' => ['nullable', 'regex:/([A-F0-9]{2}[:|\-]?){6}/'],
        //     'sn' => ['required'],
        //     'os_version' => ['required'],
        //     'os_key' => ['nullable'],
        //     'purchase_at' => ['required', 'date_format:d/m/Y'],
        //     'warranty_status' => ['required'],
        //     'warranty_expiry_at' => ['required', 'date_format:d/m/Y'],
        //     'remark' => ['required'],
        //     'pdf' => ['required', 'mimes:pdf', 'max:10000']
        // ]);

        if($request->hasFile('pdf')){

            // Creating new sn for asset
            // $assetNo = \App\Asset::whereDate('created_at', Carbon::today())->count() + 1;
            // $sn = 'A' . Carbon::now()->dayOfYear() . str_pad($assetNo, 3, 0, STR_PAD_LEFT);

            // Managing & uploading proof file for asset
            // $file = $request->file('pdf');
            // $extension = $file->getClientOriginalExtension();
            // $newname = $sn .'.'. $extension;
            // $path = Storage::putFileAs('public/assets/pdf', $request->file('pdf'), $newname);

            // Remove public path before store to db
            // if (strpos($path, 'public/') !== false) {
            //     $path = substr($path, 7);
            // }

            // Creating asset
            // $asset = Asset::create([
            //     'sn' => $sn,
            //     'remark' => $request->remark,
            //     'pdf' => $path
            // ]);

            // Creating computer
            // Computer::create([
            //     'asset_id' => $asset->id,
            //     'type' => $request->type,
            //     'computer_name' => $request->computer_name,
            //     'model' => $request->model,
            //     'brand' => $request->brand,
            //     'sn' => $request->sn,
            //     'mac_1' => $request->mac_1,
            //     'mac_2' => $request->mac_2,
            //     'os_version' => $request->os_version,
            //     'os_key' => $request->os_key,
            //     'purchase_at' => $request->purchase_at,
            //     'warranty_status' => $request->warranty_status,
            //     'warranty_expiry_at' => $request->warranty_expiry_at,
            //     'remark' => $request->remark
            // ]);

            // Creating Software
            // $software = Software::create([

            // ]);

            // foreach($request->software as $data){
            //     dd($data);
            // }


            $data = [];
            $c = 1;
            foreach($request->name as $name){
                foreach($request->version as $version){
                    foreach($request->licience as $licience){
                        foreach($request->expiry as $expiry){
                            foreach($request->supplier as $supplier){
                                foreach($request->software_remark as $remark){
                                    $data = [
                                        'name' => $name,
                                        'version' => $version,
                                        'licience' => $licience,
                                        'expiry' => $expiry,
                                        'supplier' => $supplier,
                                        'remark' => $remark
                                    ];

                                    
                                }
                            }
                        }
                    }
                }
            }

            dd($data);


        }else{
            // Return for fail no file of PDF
            return redirect()->back()->with('alert', 'Please provide PDF proof of assets');
        }
    }
}
