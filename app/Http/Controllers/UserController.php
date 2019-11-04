<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Models\User;
class UserController extends Controller{


    public function showAction($id){
$user = User::find($id) ;
return view("update",['user'=>$user]);
    }



    public function insertAction(Request $request){
        $firstname = $request->input('firstname');
        $lastname = $request->input('lastname');
        $email = $request->input('email');
        $password = $request->input('password');
        $age = $request->input('age');




        $user= new User();
        $user->meno = $firstname ;
        $user->priezvisko = $lastname  ;
        $user->email = $email;
        $user->heslo = $password;
        $user->vek = $age  ;
        $user->save();
        //return response()->view('users');
        $users = User::all();
        return view("users",['users'=>$users]);

}
public function updateAction($id, Request $request){
        $user = User::where("id","=",$id)->first();
        $user->update(["meno"=>$request->input('firstname'),
        "priezvisko"=>$request->input('lastname')   ,
        "email" =>$request->input('email'),
        "heslo"=>$request->input('password'),
        "vek"=>$request->input('age')
        ]);
        return redirect()->action('UserController@showAllAction');
}
public function deleteAction($id){
        $user = User::find($id) ;
        $user->delete();
        $users = User::all();
        return view("users",['users'=>$users]);
}
public function showAllAction(){
    $users = User::all();
    return view("users",['users'=>$users]);
    }

public function getAddUserForm(){
    return view("adduser");
}
}