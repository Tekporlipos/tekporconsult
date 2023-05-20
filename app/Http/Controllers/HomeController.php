<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\quizingQuestion;
use App\quizing;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index0()
    {
        return view('templates/index');
    }
    public function index()
    {
        return view('templates/account');
    }
    public function index1()
    {
        return view('templates/account_playlist');
    }
    public function index2()
    {
        return view('templates/account_chanel');
    }
    public function index3()
    {
        return view('templates/account_about');
    }
    public function index4()
    {
        return view('templates/account_subscription');
    }
    public function index5()
    {
        return view('templates/account_discustion');
    }
     public function index6()
    {
        return view('templates/blogger_register');
    }
    public function index7($id)
    {
        return view('forum/addQuestion',compact('id','id'));
    }
    public function index8($id)
    {
        return view('forum/QuestionRevew',compact('id','id'));
    }
     public function index9($id)
    {
        return view('forum/QuestionEdit',compact('id','id'));
    }
    public function indexcourseUpload($id)
    {
        return view('templates/courseUpload',compact('id','id'));
    }
    public function verifyemail($id)
    {
        return view('auth/verify',compact('id','id'));
    }
    public function typingClass()
    {
        return view('templates/typingClass');
    }
    public function gamesClass()
    {
        return view('templates/puzzle');
    }
    public function typing()
    {
        return view('games/typing');
    }
    public function SBee()
    {
        return view('games/SBee');
    }
    public function guidance()
    {
        return view('templates/careerGuidance');
    }
    public function StartChat()
    {
        return view('templates/StartChat');
    }
    public function quze($id)
    {
        $quizName =  quizing::find($id);
        $i = $quizName->id;
        $questions =  quizingQuestion::where('quizing_id',$i)->simplePaginate(10);
        return view('templates.Quizstart',compact('quizName','questions'));
    }
    public function message()
    {
        echo "error";
    }
    public function flag()
    {
        return view('include/flagSoluton');
    }
    public function listflag()
    {
        return view('include/listFlag');
    }

    public function playsound($id)
    {
        return view('include/playsound',compact('id','id'));
    }
    public function playsound1()
    {
        return view('include/playsound');
    }
}
