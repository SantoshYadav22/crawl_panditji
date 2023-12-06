<?php

namespace App\Http\Controllers\Register;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Facade;
use Validator;
use DB;

class UserController extends Controller
{
    public function index(Request $request){

        return view('Register.register_page');
    }

    public function Register(Request $request)
    {
        // dd($request->all());
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'mobile' => 'required|string|min:10|max:10',
            // 'email' => 'required|string|email|unique:users|max:255',
            'password' => 'required|string|min:6',
            'confirm_password' => 'required|string|min:6|same:password',
        ]);
      

        if ($validator->fails())
        {
            return response(['errors'=>$validator->errors()->all()], 422);
        }
        $user = User::where('users.mobile', $request->mobile)->first();
        // print_r($user);
        if ($user) {
            $response = ["message" => "Email Already Exist"];
            return response($response, 422); 
        } else {
            // $data = $request->input();
			try{
				$user = new User;
                $user->name = $request->name;
				$user->mobile = $request->mobile;
                $user->is_active = 1;
				$user->email = $request->email;
                $user->password = Hash::make($request->password);  
                // print_r($user);              
				$user->save();

                $response = ["message" => "Insert successfully",'user'=>$user];
                Auth::loginUsingId($user->id);
				return response($response,"200");
			}
			catch(Exception $e){
				return response('insert')->with('failed',"operation failed");
			}
        }
    }
    
    public function login_page(Request $request)
    {
        return view('Register.login');
    }

    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            // 'email' => 'required|string|email|max:255',
            'mobile' => 'required|string|min:10|max:10',
            'password' => 'required|string|min:6',
        ]);
        if ($validator->fails())
        {
            return response(['errors'=>$validator->errors()->all()], 422);
        }
        $user = User::where('users.mobile', $request->mobile)->first();
        if ($user) {
            if (Hash::check($request->password, $user->password)) {
                $response = ['User' => 'You are Logged in','user'=>$user];
                Auth::loginUsingId($user->id);
                return response($response, 200);    
            } else {
                $response = ["message" => "Password not match"];
                return response($response, 422);
            }
        } else {
            $response = ["message" =>'User not exist'];
            return response($response, 422);
        }
    }
    public function welcome(Request $request){

        return view('Register.home');
    }
    public function reset(Request $request){
        $user = User::where('users.mobile', $request->mobile)->first();
        if($user){
            $update_pass = User::where('mobile', '=', $request->mobile)->update( ['password' => Hash::make($request->password)]);           
            $response = ["message" => "Password updated"];
            return response($response, 200);
        }
        else{
            $response = ["message" =>'User not exist'];
            return response($response, 422);           

        }

    }


}

