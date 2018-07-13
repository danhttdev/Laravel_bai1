<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Http\Request;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\Http\Requests;
use MessageBag;



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
    protected $redirectTo = '/home';

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
    // protected function validator(array $data)
    // {
    //     return Validator::make($data, [
    //         'email' => 'required|string|email|max:255|unique:users',
    //         'password' => 'required|string|min:6|confirmed',
    //     ]);
    // }

    // /**
    //  * Create a new user instance after a valid registration.
    //  *
    //  * @param  array  $data
    //  * @return \App\User
    //  */
    // protected function create(array $data)
    // {
    //     return User::create([
    //         'email' => $data['email'],
    //         'password' => Hash::make($data['password']),
    //     ]);
    // }

    public function postRegister(Request $request){
        $rules = [
    		'name' =>'required|min:2',
    		'email' =>'required|email|unique:users,email',
    		'password'=>'required|min:4|confirmed',
            'password_confirmation'=>'sometimes|required_with:password',
    	];
    	// $messages = [
    	// 	'name.required' => 'Name là trường bắt buộc',
    	// 	'email.required' => 'Email là trường bắt buộc',
    	// 	'name.min' => 'Name phải chứa ít nhất 2 ký tự',
    	// 	'email.email' => 'Email không đúng định dạng',
    	// 	'password.required' => 'Mật khẩu là trường bắt buộc',
    	// 	'password2.required' => 'Mật khẩu là trường bắt buộc',
    	// 	'password.min' => 'Mật khẩu phải chứa ít nhất 4 ký tự',
    	// 	'password2.min' => 'Mật khẩu phải chứa ít nhất 4 ký tự',
    	// ];
    	$validator = Validator::make($request->all(), $rules);

    	if ($validator->fails()) {
            // return redirect()->back()->withErrors($validator)->withInput();
            return response()->json(
                [
                    'status' => 'error',
                    'msg' => $validator->messages()
                ]);
    	} else {
            $name = $request->input('name');
            $email = $request->input('email');
    		$password = $request->input('password');

            User::create([
                'name' => $name,
                'email' => $email,
                'password' => bcrypt($password)
            ]);

            return response()->json(
                [
                    'status' => 'success',
                    'msg' => 'Register success'
                ]);
                
    	}
    }
}
