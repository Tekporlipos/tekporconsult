<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
       
        return User::create([
            'name' => $data['name'],
            'Lname' => $data['Lname'],
            'Username' => $data['Username'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'School' => $data['School'],
            'Course' => $data['Course'],
            'remember_token' => $data['_token'], 
        ]);

$to = $email;// note the comma

// Subject
$subject = 'Email verification';
$token = $data['_token'];
// Message
$message = "<html><body><h2>TEKPOR ACADEMY</h2><p>Follow this link to verify your email.<a href='https://www.tekporaca.tk/verifyemail/".$token."> <br/> If you have not done this then disregard this message someone may have mistakenly use your email</p></body></html>";

// To send HTML mail, the Content-type header must be set
$headers[] = 'MIME-Version: 1.0';
$headers[] = 'Content-type: text/html; charset=iso-8859-1';

// Additional headers
$headers[] = 'To: '.$name.' <'.$email.'>';
$headers[] = 'Email verification Team <emailVerify@tekporaca.tk>';


// Mail it
if(mail($to, $subject, $message, implode("\r\n", $headers))){
echo "Code Sent";
}else{
echo "Code Not Sent";
};
}
};
