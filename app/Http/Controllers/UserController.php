<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;
use Hash;
use Str;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function user()
    {   
        $data['getRecord'] = User::getRecordUser();
        return view('backend.user.list', $data);
    }

    public function add_user()
    {
        return view('backend.user.add');
    }

    public function insert_user(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users|max:255',
            'password' => 'required|min:8|regex:/[A-Za-z]/|regex:/[0-9]/', // Strong password rules
            'status' => 'required|boolean'
        ]);

        User::create([
            'name' => trim($request->name),
            'email' => trim($request->email),
            'password' => Hash::make($request->password),
            'status' => trim($request->status),
        ]);

        return redirect('panel/user/list')->with('success', "User successfully created");
    }

    public function edit_user($id)
    {
        $data['getRecord'] = User::getSingle($id);
        return view('backend.user.edit', $data);
    }

    public function update_user($id, Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $id,
            'password' => 'nullable|min:8|regex:/[A-Za-z]/|regex:/[0-9]/', // Optional strong password rules
            'status' => 'required|boolean'
        ]);

        $user = User::getSingle($id);
        $user->name = trim($request->name);
        $user->email = trim($request->email);

        if (!empty($request->password)) {
            $user->password = Hash::make($request->password);
        }

        $user->status = trim($request->status);
        $user->save();

        return redirect('panel/user/list')->with('success', "User successfully updated");
    }

    public function delete_user($id)
    {
        $user = User::getSingle($id);
        $user->delete();

        return redirect()->back()->with('success', "User successfully deleted");
    } 

    public function ChangePassword()
    {
        return view('backend.user.change_password');
    }

    public function UpdatePassword(Request $request)
    {
        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|min:8|regex:/[A-Za-z]/|regex:/[0-9]/|confirmed',
        ]);

        $user = Auth::user();

        if (Hash::check($request->old_password, $user->password)) {
            $user->password = Hash::make($request->new_password);
            $user->save();

            return redirect()->back()->with('success', 'Your Password has been successfully updated');
        } else {
            return redirect()->back()->with('error', 'Old password does not match');
        }
    }

    public function AccountSettings()
    {
        $data['getUser'] = Auth::user();
        return view('backend.profile.account_settings', $data);
    }

    public function UpdateAccountSettings(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'profile_picture' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $user = Auth::user();
        $user->name = $request->name;

        if ($request->hasFile('profile_picture')) {
            if ($user->profile_picture && Storage::disk('public')->exists($user->profile_picture)) {
                Storage::disk('public')->delete($user->profile_picture);
            }

            $path = $request->file('profile_picture')->store('profile_pictures', 'public');
            $user->profile_picture = $path;
        }

        $user->save();

        return redirect()->back()->with('success', "Profile successfully updated");
    }
}
