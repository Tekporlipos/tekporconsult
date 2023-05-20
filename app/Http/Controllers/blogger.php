<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\forum;

class blogger extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
          $na = random_int(1, 11);
    switch ($na) {
      case 1:
        # code...
      $name = "Agriculture";
        break;
      case 2:
        # code...
      $name = "Art";
        break;
        case 3:
        # code...
        $name = "Computing";
        break;
        case 4:
        # code...
        $name = "Courses";
        break;
        case 5:
        # code...
        $name = "Engineering";
        break;
        case 6:
        # code...
        $name = "Health";
        break;
        case 7:
        # code...
        $name = "Humanities";
        break;
        case 8:
        # code...
        $name = "Robotics";
        break;
         case 9:
        # code...
        $name = "Sciences";
        break;
         case 10:
        # code...
        $name = "Vocational";
        break;
          case 11:
        # code...
        $name = "Others";
        break;
    }
 $user = $_GET['actionBy'];
 $post_id =  $_GET['post'];
 $user_id = $_GET['code_id'];
if (isset($user)&& isset($post_id)&&isset($user_id)) {
$post = forum::where('id',$post_id)->where('user_id',$user_id)->get();
if (sizeof($post) > 0) {
    $post = forum::find($id);
    $post->delete();
return \redirect("/addQuestion/$name");

}else{
    return \redirect("/forum");
}
}else{
    return \redirect("/forum");
}
    }
}
