<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;
use Hash;
use Str;

class UserController extends Controller
{
    public function user()
    {   
        $data['getRecord'] = User::getRecordUser();
        return view('backend.user.list', $data);
    }

    public function add_user(Request $request)
    {
        return view('backend.user.add');
    }

    public function insert_user(Request $request)
    {

        request()->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required'
        ]);

        $save = new User;
        $save->name     = trim($request->name);
        $save->email    = trim($request->email);
        $save->password = Hash::make($request->password);
        $save->status   = trim($request->status);
        $save->save();

        return redirect('panel/user/list')->with('success', "User successfully created");
    }

    public function edit_user($id)
    {
        $data['getRecord'] = User::getSingle($id);
        return view('backend.user.edit', $data);
    }

    public function update_user($id, Request $request)
    {

        request()->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email,'.$id
        ]);

        $save = User::getSingle($id);
        $save->name     = trim($request->name);
        $save->email    = trim($request->email);
        
        if(!empty($request->password))
        {
            $save->password = Hash::make($request->password);
        }

        $save->status   = trim($request->status);
        $save->save();

        return redirect('panel/user/list')->with('success', "User successfully updated");
    }

    public function delete_user($id)
    {
        $save = User::getSingle($id);
        $save->is_delete = 1;
        $save->save();

        return redirect()->back()->with('success', "User successfully deleted");
    } 

    public function ChangePassword()
    {
        return view('backend.user.change_password');
    }

    public function UpdatePassword(Request $request)
    {
        $user = User::getSingle(Auth::user()->id);

        if(Hash::check($request->old_password, $user->password))
        {
            if($request->new_password == $request->confirm_password)
            {
                $user->password = Hash::make($request->new_password);
                $user->save();

                return redirect()->back()->with('success', 'Your Password has successfully updated');
            }
            else
            {
                return redirect()->back()->with('error', 'Confirm Password does not match New Password');
            }
        }
        else
        {
            return redirect()->back()->with('error', 'Old password does not match');
        }
    }

    public function AccountSettings()
    {
        $data['getUser'] = User::getSingle(Auth::user()->id);
        return view('backend.profile.account_settings', $data);
    }

    public function UpdateAccountSettings(Request $request)
    {
        $getUser = User::getSingle(Auth::user()->id);
        $getUser->name = $request->name;

        if(!empty($request->file('profile_picture')))
        {
            if(!empty($getUser->profile_picture) && file_exists('upload/profile/'.$getUser->profile_picture))
            {
                unlink('upload/profile/'.$getUser->profile_picture);
            }

            $ext = $request->file('profile_picture')->getClientOriginalExtension();
            $file = $request->file('profile_picture');
            $filename = Str::random(20).'.'.$ext;
            $file->move('upload/profile/', $filename);
            $getUser->profile_picture = $filename;
        }

        $getUser->save();

        return redirect()->back()->with('success', "Profile successfully updated");
    }
}
