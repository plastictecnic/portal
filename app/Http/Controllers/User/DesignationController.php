<?php

namespace App\Http\Controllers\User;

use App\Designation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DesignationController extends Controller
{
    public function store(Request $r){
        $r->validate([
            'name' => 'required|unique:designations',
            'description' => 'required'
        ]);

        Designation::create([
            'name' => $r->name,
            'description' => $r->description
        ]);

        return redirect()->back()->with('status', 'Designation created');
    }
}
