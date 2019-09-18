<?php

namespace App\Http\Controllers\User;

use App\Department;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DepartmentController extends Controller
{
    public function createDepartment(){
        return view('admin.user.department');
    }

    public function store(Request $r){
        $r->validate([
            'name' => 'required|unique:departments',
            'description' => 'required'
        ]);

        Department::create([
            'name' => $r->name,
            'description' => $r->description
        ]);

        return redirect()->back()->with('status', 'Department created');
    }
}
