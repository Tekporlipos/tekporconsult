<?php

namespace App\Http\Controllers;
use Session;
use Illuminate\Http\Request;
use Validator;
use App\admin;
class AjaxUploadController extends Controller
{
    function index()
    {
     return view('ajax_upload');
    }

    function action(Request $request)
    {
      $idm =  $_REQUEST['imageid'];
    

     $validation = Validator::make($request->all(), [
      'select_file' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
     ]);
     if($validation->passes())
     {
      $image = $request->file('select_file');
      $new_name = rand() . '.' . $image->getClientOriginalExtension();
      $image->move(public_path('profile'), $new_name);
      admin::where('user_id',$idm)->update(['profile'=>'profile/'.$new_name]);
      return response()->json([
       'message'   => '',
       'uploaded_image' =>'
       ',
       'class_name'  => 'alert-success'
      ]);
     }
     else
     {
      return response()->json([
       'message'   => $validation->errors()->all(),
       'uploaded_image' => '',
       'class_name'  => 'alert-danger'
      ]);
     }
    }
}
?>