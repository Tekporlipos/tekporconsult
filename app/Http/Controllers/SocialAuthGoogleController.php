<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Socialite;
use Auth;
use Exception;



class SocialAuthGoogleController extends Controller
{
    public function redirect()
    {
        return Socialite::driver('google')->redirect();
    }


    public function callback()
    {
        try {


            $googleUser = Socialite::driver('google')->user();
            $existUser = User::where('email',$googleUser->email)->first();


            if($existUser) {
                Auth::loginUsingId($existUser->id);
            }
            else {
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

                $user = new User;
                $user->name = $googleUser->name;
                $user->email = $googleUser->email;
                $user->google_id = $googleUser->id;
                $user->Lname = $googleUser->name;
                $user->Username = $googleUser->name;
                $user->email_verified_at = $googleUser->email;
                $user->School  = 'NOT AVILABLE';
                $user->Course = $name;
                $user->remember_token  = md5($googleUser->name);;
                $user->password = md5($googleUser->email);
                $user->save();
                Auth::loginUsingId($user->id);
            }
            return redirect()->to('/home');
        }
        catch (Exception $e) {
            return '$e';
        }
    }
}
