<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;
use Image;

class UsersController extends Controller
{
    function user_list(){
        $users = User::where('id','!=', Auth::id())->get();
        $total_user = User::count();
        return view('admin.users.user_list',compact('users','total_user'));
    }
    function user_delete($user_id){
        User::find($user_id)->delete();
        return back()->with('delete','Users Deleted successfully !!');
    }
    function profile(){
        return view('admin.users.profile');
    }
    function profile_name(Request $request){ 
        User::find(Auth::id())->update([
             'name'=>$request->name,
        ]);
         return back()->with('success','Name Changed Successfully!!');
    }
    function password_change(Request $request){
        $request->validate([
            'old_password'=>'required',
            'password'=>['required',Password::min(8)->letters()->mixedCase()->numbers()->symbols()->uncompromised()],
            'password_confirmation'=>'required',
        ]);
        if(Hash::check($request->old_password, Auth::user()->password)){
            User::find(Auth::id())->update([
                'password'=>bcrypt($request->password),
            ]);
            return back()->with('successed','Password Changed Successfully!!');
        }
        else{
            return back()->with('wrong','Password Does not Match!!');
        }
    }
    function profile_photo(Request $request){
        $profile_photo = $request->profile_photo;
        if(Auth::user()->profile_photo != null){
            $extension = $profile_photo->getClientOriginalExtension();
            $file_name = Auth::id().'.'.$extension;
            $img = Image::make($profile_photo)->save(public_path('/uploads/user/'.$file_name));
            User::find(Auth::id())->update([
                'profile_photo'=>$file_name,
            ]);
            return back()->with('success_p','Profile Photo Updated!');
        }
        else{
            $extension = $profile_photo->getClientOriginalExtension();
            $file_name = Auth::id().'.'.$extension;
            $img = Image::make($profile_photo)->save(public_path('/uploads/user/'.$file_name));
            User::find(Auth::id())->update([
                'profile_photo'=>$file_name,
            ]);
            return back()->with('success_p','Profile Photo Updated!');
        }
    }
}
