<?php
;


namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Validator;
use Auth;
use Illuminate\Support\MessageBag;

class LoginController extends Controller
{
	
	// public function __construct() {
    // 	$this->middleware('auth');
	// }
	
    public function getLogin() {
		// use Illuminate\Support\Facades\Auth;
		
		session_start();
		if(isset($_SESSION['email'])){
			return redirect()->intended('/');
		}

		Auth::logout();
    	return view('auth.login');
    }
    public function postLogin(Request $request) {
		
    	$rules = [
    		'email' =>'required|email',
    		'password' => 'required|min:8'
    	];
    	$messages = [
    		'email.required' => 'Email là trường bắt buộc',
    		'email.email' => 'Email không đúng định dạng',
    		'password.required' => 'Mật khẩu là trường bắt buộc',
    		'password.min' => 'Mật khẩu phải chứa ít nhất 8 ký tự, ahihi',
    	];
    	$validator = Validator::make($request->all(), $rules, $messages);

    	if ($validator->fails()) {
    		return redirect()->back()->withErrors($validator)->withInput();
    	} else {
    		$email = $request->input('email');
    		$password = $request->input('password');

    		if( Auth::attempt(['email' => $email, 'password' =>$password])) {	
				
				session_start();
				$_SESSION["email"] = $email;
				$_SESSION["password"] = $password;
    			return redirect()->intended('/');
    		} else {
    			$errors = new MessageBag(['errorlogin' => 'Email hoặc mật khẩu không đúng']);
    			return redirect()->back()->withInput()->withErrors($errors);
    		}
    	}
    }
}