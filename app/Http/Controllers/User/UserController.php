<?php

namespace App\Http\Controllers\User;

use App\Department;
use App\Designation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Profile;
use App\User;
use Storage;

class UserController extends Controller
{
    public function userList(){
        $users = User::all();
        return view('admin.user.user-list')->with('users', $users);
    }

    public function createUser(){
        $departments = Department::all();
        $designations = Designation::all();
        return view('admin.user.create-user')
            ->with('departments', $departments)
            ->with('designations', $designations);
    }

    public function storeUser(Request $r){
        $r->validate([
            'name' => ['required', 'string', 'max:255'],
            'username' => ['required', 'string', 'max:255', 'unique:users'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'emp_id' => ['required', 'string', 'max:10'],
            'department' => ['required', 'max:3', 'integer'],
            'designation' => ['required', 'max:3', 'integer'],
            'remark' => ['nullable', 'string', 'max:255'],
            'picture_path' => ['nullable', 'image'],
            'mobile' => ['nullable', 'digits_between:10,11'],
            'ext_num' => ['required', 'string', 'max:255']
        ]);

        $input = $r->all();
        $input['password'] = $r->username.$r->emp_id;

        // Creating user
        $user = User::create([
            'name' => $input['name'],
            'email' => $input['email'],
            'password' => $input['password'],
            'username' => $input['username']
        ]);

        // Storing image and renaming it.
        if ($r->hasFile('picture_path')) {
            $file = $r->file('picture_path');
            $extension = $file->getClientOriginalExtension();
            $newname = time().'-'.$input['username'].'.'.$extension;
            $path = Storage::putFileAs('public/user-images', $r->file('picture_path'), $newname);
        }else{
            $path = 'user-images/user-blank.png';
        }

        // Remove public path before store to db
        if (strpos($path, 'public/') !== false) {
            $path = substr($path, 7);
        }

        // Creating profile for the user
        Profile::create([
            'user_id' => $user->id,
            'department_id' => $input['department'],
            'designation_id' => $input['designation'],
            'emp_id' => $input['emp_id'],
            'remark' => $input['remark'],
            'picture_path' => $path,
            'mobile' => $input['mobile'],
            'ext_num' => $input['ext_num']
        ]);

        return redirect()->back()->with('status', 'User created');
    }

    public function destroy(User $user){
        $user->delete();
        return redirect()
            ->back()
            ->with('status','User removed');
    }

    // Resetting back user password
    public function changePassword(User $user){
        //username+emp id
        $password = $user->username.$user->profile->emp_id;
        $user->update(['password' => $password]);
        return redirect()
            ->back()
            ->with('status','Password reseted');
    }

    public function setRolePermissionForm(User $user){
        return view('admin.user.assign-role-perm')
            ->with('user', $user);
    }

    public function setRolePermission(Request $request, User $user){
        // dd($user->id);

        return 'do store';


    }
}
