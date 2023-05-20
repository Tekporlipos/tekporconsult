<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\quizing;
use App\admin;
use App\quizingQuestion;
use App\books;
use App\Adviser;
class QuzingQuestionsController extends Controller
{
    //
    public function show($id){
$quizing =  quizing::where('course','LIKE',"%$id%")->orWhere('course','All')->get();

return view('templates.Quizcourses',compact('quizing','id'));

}
public function start($id){
    $quizName =  quizing::find($id);
    $i = $quizName->id;
    $questions =  quizingQuestion::where('quizing_id',$i)->simplePaginate(10);
    return view('templates.Quizstart',compact('quizName','questions'));
  
}
public function aquestion(){
    $id = $_GET['id'];
    $quizName =  quizing::find($id);
    $i = $quizName->id;
    $questions =  quizingQuestion::where('quizing_id',$i)->simplePaginate(10);
    return view('templates.aquestion',compact('quizName','questions'));
  
}

public function register(Request $request){
    $blogname = $request->blogName;
    $blognames =  admin::where('name',$blogname)->get();
    foreach($blognames as $value){
        $blognamees = $value->name;
    }
    $mail = $request->email;
    $blogmails =  admin::where('email',$mail)->get();
    foreach($blogmails as $value){
        $blogmail = $value->email;
    }

    if(empty($blognamees)){
        if(empty($blogmail)){
            if (filter_var($mail,FILTER_VALIDATE_EMAIL)) {
        $admin = new admin;

            $admin->name = $request->blogName;
            $admin->field  = $request->blogField;
            $admin->school = $request->Institution;
            $admin->email = $request->email;
            $admin->type = $request->type;
            $admin->info = $request->info;
            $admin->user_id = $request->user_id;
            $admin->profile = "profile/staff-4.jpg";
             $admin->save();
         $id = $request->user_id;
             return \redirect('/accounts');
    
    }else{
        return \redirect('/blogger_Registration/Invalid email');
    }
            
        }else{
            return \redirect('/blogger_Registration/something went wrong blog email might be taken');
        
    }

    }else{
        return \redirect('/blogger_Registration/something went wrong blog name might be taken');
    }
   

}


public function Adviser(Request $request){
     $admin = new Adviser;
            $admin->FName = $request->FName;
            $admin->Use_id = $request->user_id;
            $admin->LName  = $request->LName;
            $admin->category = $request->category;
            $admin->phone = $request->phone;
            $admin->message = $request->message;
             $admin->save();

             return \redirect('../../?message=Your request had been sent successfully. You will recieve an email, keep on using the platform.#Career-Guidance');
}

};
