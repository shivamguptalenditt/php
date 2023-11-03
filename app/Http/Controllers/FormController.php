<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Form;

class FormController extends Controller
{
    //create
    function addUser(Request $request){
        $data = new Form;
        $data->name =$request->input('name');
        $data->email =$request->input('email');
        $data->password =$request->input('password');
        $data->save();
        return back();
    }

    //read
    function showUser(Request $request){
        $data = Form::all();
       return view('FormData',compact('data'));
    }

    //delete
    function deleteUser($id){
        Form::destroy($id);
        return back();
    }

    //show form to edit user data
    function editUser($id){
       $data = Form::find($id);
        return view('formEdit',compact("data"));
    }

    //update
    function updateUser(Request $request,$id){
        $data = Form::find($id);
        $data->name =$request->input('name');   
        $data->email =$request->input('email');
        $data->password =$request->input('password');
        $data->save();
        return redirect("showUser");
    }
}
