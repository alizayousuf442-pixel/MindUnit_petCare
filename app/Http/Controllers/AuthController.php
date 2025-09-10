<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use DB;
class AuthController extends Controller
{
    function register(Request $request){
      $valid_data=$request->validate([
'name'=>'required|regex:/^[a-zA-Z ]+$/',
'email'=>'required|email|unique:users,email',
'password'=>'required|max:15|min:6',
'password_confirmation'=>'required|same:password',

    ]);
    if($valid_data){
$user=new User;
$user->name=$request->input('name');
$user->email=$request->input('email');
$user->password=Hash::make($request->input('password'));
if($user->save()){
        return redirect('login')->with('success','Congratulations, Your Account Has Been Created. Login to accesss your account.');
}
    }
    }



    function loginUser(Request $request){
$valid_data=$request->validate([
'email'=>'required|email',
'password'=>'required'

    ]);
    $user=User::where('email',$request->input('email'))->first();
if($user){
    $user_password= $user->password;

if(Hash::check($request->input('password'),$user_password)){

session()->put('user_id',$user->id);
session()->put('user_name',$user->name);
session()->put('user_email',$user->email);
if( $user->role==null){
return redirect('/role');
}
elseif( $user->role=='Pet Owner'){
return redirect('/');
}
elseif( $user->role=='Animals Shelter'){
return redirect('/');
}
elseif( $user->role=='veterinarian'){
return redirect('/');
}
}
else{
        return back()->with('danger','You have entered an invalid password');
}




}
else{
      return back()->with('danger',"We couldn't find an account with that email");
}
   



}

function animalshelter(){
$user=User::where('id',session()->get('user_id'))->first();
$user->role='Animals Shelter';
if($user->save()){
    return redirect('/');
}

}
function petowner(){
$user=User::where('id',session()->get('user_id'))->first();
$user->role='Pet Owner';
if($user->save()){
    return redirect('/');
}

}
function veterinarian(){
$user=User::where('id',session()->get('user_id'))->first();
$user->role='veterinarian';
if($user->save()){
    return redirect('/');
}

}
function logout(){
    session()->forget('user_id');
session()->forget('user_name');
session()->forget('user_email');
return back();
}
}
