<?php

use Illuminate\Support\Facades\Route;
use App\admin;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/fredirect', 'SocialAuthFacebookController@redirect');
Route::get('/fcallback', 'SocialAuthFacebookController@callback');
Route::get('/redirect', 'SocialAuthGoogleController@redirect');
Route::get('/callback', 'SocialAuthGoogleController@callback');
Route::get('/home', 'HomeController@indexo')->name('home');
Route::get('courseCategory', function () {
    return view('templates/courseCategory');
});
Route::get('Category', function () {
    return view('templates/courseCategory');
});
Route::get('/accounts', 'HomeController@index')->name('account');
Route::get('/',  function () {
    return view('templates.index');
});
Route::get('/SecondarystoreCategory', function () {
    return view('templates.SecondarystoreCategory');
});
Route::get('/courses', function () {
    return view('templates.courses');
});
Route::post('/sendtoken', function () {
    return view('include/sendtoken');
});
Route::post('/password/update', function () {
    return view('include/passwordupdate');
});
Route::get('/passwordreset/{id}',function ($id) {
    return view('auth/passwords/reset',compact('id','id'));
});
Route::get('/blog', function () {
    return view('templates.blog');
});
Route::get('/policy', function () {
    return view('templates.policy');
});
Route::get('/blogger_Registration','HomeController@index6')->name('blogger_Registration');
Route::get('/about', function () {
    return view('templates/about');
});
Route::get('/tertiaryGames/{id}', function ($id) {
    return view('templates/gamesTertiary');
});
Route::get('/basicGames/{id}', function ($id) {
    return view('templates/gamesBasic');
});
Route::get('/secondaryGames/{id}', function ($id) {
    return view('templates/gamesSecondary');
});

Route::get('/home', function () {
    return view('templates/index');
});
Route::get('/contact', function () {
    return view('templates/contact');
});
Route::get('/tertiarycategory', function () {
    return view('templates/category');
});
Route::get('/Secondarycategory', function () {
    return view('templates/Secondarycategory');
});
Route::get('/Basiccategory', function () {
    return view('templates/Basiccategory');
});
Route::get('/aboutCourse', function () {
    return view('templates/aboutCoruse');
});
Route::get('/feed', function () {
    return view('templates/blogger_news_feed');
});
Route::get('/name', function () {
    return view('templates/blog-name');
});
Route::get('/storeCategory', function () {
    return view('templates/storeCategory');
});
Route::get('/store', function () {
    return view('templates/storeCategory');
});
Route::get('/BasicstoreCategory', function () {
    return view('templates/BasicstoreCategory');
});
Route::get('/StorecurrentAffairs', function () {
    return view('templates/StorecurrentAffairs');
});
Route::get('/Storehymnals', function () {
    return view('templates/Storehymnals');
});

Route::get('/careerGuidance','HomeController@guidance')->name('CareerGuidance');
Route::get('/StartChat','HomeController@StartChat')->name('StartChat');

Route::get('/TertiarystoreCategory', function () {
    return view('templates/TertiarystoreCategory');
});
Route::get('/changevideo', function () {
    return view('templates/changeVideo');
});

Route::get('/courseUpload/{id}', function ($id) {
    return view('templates/courseUpload');
});
Route::get('/start/{id}',function ($id) {
    return view('templates/start',compact('id','id'));
});
Route::get('/upload1', function () {
    return view('templates/upload1');
});
Route::get('/accounts_repository', 'HomeController@index1')->name('accounts_playlist');
Route::get('/courseUpload/{id}', 'HomeController@indexcourseUpload')->name('courseUpload/{id}');
Route::get('/accounts_channels', 'HomeController@index2')->name('accounts_channels');
Route::get('/accounts_about', 'HomeController@index3')->name('accounts_about');
Route::get('/accounts_subscription', 'HomeController@index4')->name('accounts_subscription');
Route::get('/accounts_discustion', 'HomeController@index5')->name('accounts_discustion');
//quiizStart
Route::get('/AQuizStart/{id}', 'HomeController@quze')->name('AQuizStart/{id}');
Route::get('/flagQuestion', 'HomeController@flag')->name('/flagQuestion');
Route::get('/listflag', 'HomeController@listflag')->name('/listflag');
Route::get('/message', 'HomeController@message')->name('message');
Route::get('Games/typingClass', function () {
    return view('templates/typingClass');
});
Route::get('/algorithmChallenge', function () {
    return view('templates/algorithmChallenge');
});
Route::get('/hymnals', function () {
    return view('templates/hymnals');
});
Route::get('/quoteOnQuote', function () {
    return view('templates/quoteOnQuote');
});
Route::get('/quizWorld/{id}', function () {
    return view('templates/quiz');
});
Route::get('/quizCourses/{id}', 'QuzingQuestionsController@show');
Route::get('/Quizname/{id}',function ($id) {
    return view('templates.quiz-name',compact('id','id'));
});
Route::get('/QuizStart/{id}','QuzingQuestionsController@start');
Route::get('/aquestion','QuzingQuestionsController@aquestion');
Route::get('/Games', function () {
    return view('templates/gamesGroup');
});
Route::get('/quiz/{id}', 'QuzingQuestionsController@show');
Route::get('/admin/{id}', function ($id) {
    return view('templates/account_aboutuser',compact('id','id'));
});
Route::get('/accountsuser/{id}', function ($id) {
    return view('/templates/accountuser',compact('id','id'));
});
Route::get('/accounts_channelsuser/{id}', function ($id) {
    return view('templates/account_chaneluser',compact('id','id'));
});
Route::get('/accounts_discustionuser/{id}', function ($id) {
    return view('templates/account_discustionuser',compact('id','id'));
});
Route::get('/QuizScience_Department', function () {
    return view('templates/quizScienceDepartment');
});
Route::get('/StoreCourses/{id}', function ($id) {
    return view('templates/Storecourses',compact('id','id'));
});
Route::post('/blog_register','QuzingQuestionsController@register');
Route::post('/Adviser','QuzingQuestionsController@Adviser');
Route::get('/StoreHealthFaculty', function () {
    return view('templates/StoreHealthFaculty');
});
//store
Route::get('/StoreScience_Department', function () {
    return view('templates/StoreScienceDepartment');
});
Route::get('/StoreAgric_Department', function () {
    return view('templates/StoreAgricDepartment');
});
Route::get('/StoreBuiltDepartment', function () {
    return view('templates/StoreBuiltDepartment');
});
Route::get('/StoreHumanitiesFaculty', function () {
    return view('templates/StoreHumanitiesFaculty');
});
Route::get('/StoreEngineeringDepartment', function () {
    return view('templates/StoreEngineeringDepartment');
});
Route::get('/StoreCourses/{id}', function ($id) {
    return view('templates/Storecourses',compact('id','id'));
});
Route::get('/Bookname/{id}', function ($id) {
    return view('templates/store-name',compact('id','id'));
});
Route::get('/read_book/{id}', function ($id) {
    return view('templates.read',compact('id','id'));
});

Route::get('../search', function () {
    return view('templates/search');
});

Route::get('message', function () {

    return view('templates/message');

});

Route::get('messageudate', function () {

    return view('templates/messageudate');

});

Route::get('adviser', function () {
    return view('include/adviser');
});
Route::get('/Games/puzzle', function () {
    return view('templates/puzzle');
});
Route::get('comment', function () {
    return view('templates/comment');
});
Route::get('/follow', function () {
    return view('forum/follow');
});
Route::get('/like', function () {
    return view('forum/like');
});
Route::get('/rate', function () {
    return view('forum/rate');
});
Route::get('/invitelink', function () {
    return view('forum/send');
});
Route::get('/list', function () {
    return view('forum/list');
});
Route::get('categorycomment', function () {
    return view('templates/categorycomment');
});
Route::get('reply', function () {
    return view('templates/reply');
});
Route::get('Categoryreply', function () {
    return view('templates/Categoryreply');
});
Route::get('blogger_Registration/{id}', function ($erro) {
    return view('templates/blogger_register',compact('erro','erro'));
});
Route::post('/uploaded/{id}','uploader@uploaded');
Route::get('/forum', function () {
    return view('forum/forum');
});
//forum route
Route::get('questionSearch', function () {
    return view('forum/questionSearch');
});
Route::get('/forum/questions/{id}', function ($id) {
    return view('forum/forumQuestion',compact('id','id'));
});
Route::get('/QuestionRevew/{id}', function ($id) {
    return view('forum/QuestionRevew',compact('id','id'));
});
Route::post('answerQuestion', function () {
    return view('forum/comment');
});
Route::get('replyanswer', function () {
    return view('forum/reply');
});
Route::get('addQuestion/{id}', 'HomeController@index7')->name('addQuestion/{id}');
Route::get('Games/puzzle/Spelling_Bee', 'HomeController@SBee')->name('/Games/puzzle/Spelling_Bee');
Route::post('addQuestion','forumController@addQuestion');
Route::post('EditaddQuestion','forumController@EditaddQuestion');
Route::get('QuestionRevew/{id}', 'HomeController@index8')->name('QuestionRevew/{id}');
Route::get('QuestionEdit/{id}', 'HomeController@index9')->name('QuestionEdit/{id}');
//courses
Route::get('/Science_Department', function () {
    return view('templates/ScienceDepartment');
});
Route::get('/Agric_Department', function () {
    return view('templates/AgricDepartment');
});
Route::get('/Built_Department', function () {
    return view('templates/BuiltDepartment');
});
Route::get('/how_to_download', function () {
    return view('templates/how_to_download');
});
Route::get('/HumanitiesFaculty', function () {
    return view('templates/HumanitiesFaculty');
});
Route::get('/EngineeringDepartment', function () {
    return view('templates/EngineeringDepartment');
});
Route::get('/Courses/{id}', function ($id) {
    return view('templates/courses',compact('id','id'));
});

Route::get('/adminsideonly', function () {
    return view('include/sss');
});
Route::get('/subscribe', function () {
    return view('include/subscribe');
});
Route::get('/emailverify', function () {
    return view('include/emailvery');
});

Route::get('/cookies', function () {
    return view('include/cookies');
});

Route::get('/Games/puzzle/playsound', 'HomeController@playsound1')->name('/Games/puzzle/playsound');

Route::get('/Games/puzzle/changelevel', function () {
    return view('include/changelevel');
});

Route::get('/Games/puzzle/{id}', 'HomeController@playsound')->name('/Games/puzzle/{id}');


Route::get('/emailverifyAgain', function () {
    return view('include/requesttoken');
});
Route::get('/verifyemail/{id}', 'HomeController@verifyemail')->name('verifyemail/{id}');


Route::get('postDelete/{id}', 'blogger@destroy');
//Clear Cache facade value:
Route::get('/clear-cache', function() {
    $exitCode = Artisan::call('cache:clear');
    return '<h1>Cache facade value cleared</h1>';
});

//Reoptimized class loader:
Route::get('/optimize', function() {
    $exitCode = Artisan::call('optimize');
    return '<h1>Reoptimized class loader</h1>';
});

//Route cache:
Route::get('/route-cache', function() {
    $exitCode = Artisan::call('route:cache');
    return '<h1>Routes cached</h1>';
});

//Clear Route cache:
Route::get('/route-clear', function() {
    $exitCode = Artisan::call('route:clear');
    return '<h1>Route cache cleared</h1>';
});

//Clear View cache:
Route::get('/view-clear', function() {
    $exitCode = Artisan::call('view:clear');
    return '<h1>View cache cleared</h1>';
});

//Clear Config cache:
Route::get('/config-cache', function() {
    $exitCode = Artisan::call('config:cache');
    return '<h1>Clear Config cached</h1>';
});
Route::get('reader/{id}', function ($id) {
    return view('templates/reader',compact('id','id'));
});
//typing
Route::get('/typingSignin','HomeController@typingClass')->name('typingSignin');
Route::get('/Games/puzzles','HomeController@gamesClass')->name('sGames/puzzle');
Route::get('/typing','HomeController@typing')->name('typing');

Route::get('/typingstill', function () {
    return view('games/typingClass');
});

//uplaod
Route::get('/uploadfile', function () {
    return view('templates/upload');
});


Route::Post('/uploadfiles', 'forumController@uploadfile');


//tempera
Route::get('/textjson', function () {
    return view('games/textjson');
});




Route::get('/typingStatistics', function () {
    return view('games/text');
});
Route::get('/typingIntroduction', function () {
    return view('games/typingClass');
});
Route::post('/ajax_upload/action', 'AjaxUploadController@action')->name('ajaxupload.action');


//forget this trash
Route::get('/searchimage', function () {
    $id = $_GET['imafid'];
    $admins = admin::where('user_id',$id)->get();
    foreach ($admins as $key => $value) {
        echo "<img src='../".$value->profile."' id='imadim' class='thumbnail' style='border-radius: 50%; cursor:pointer' title='change profile'
        width='100px' height='100px' alt='Admin' srcset='the admin own the image'><br/>";
    }
});
// move on

Route::get('/Jangle', function () {
    return view('/games/Jangle/Jangle');
});

Route::get('/WBHouse', function () {
    return view('WBHouse.WBHouse');
});

Route::get('/basicLevel', function () {
    return view('/templates/basicLevel');
});

Route::get('/basicCreating', function () {
    return view('/templates/basicCreating');
});
Route::get('/testing', function () {
    return view('/templates/testing');
});
