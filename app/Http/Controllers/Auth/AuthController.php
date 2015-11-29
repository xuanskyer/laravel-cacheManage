<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Illuminate\Http\Request;
use DB;
use Hash;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Create a new authentication controller instance.
     *
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'getLogout']);
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
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|confirmed|min:6',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }

    public function index(){
        return view('auth/login');
    }

    public function postLogin(Request $request){
        $this->validate($request,  User::rules());
        $checked = $this->checkValidUser($request);
        if($checked){
            $request->session()->put('user_id', $checked->id);
            var_dump($request->session()->get('user_id'));
        }else{
            return redirect('/auth/login')
                ->withInput()
                ->withErrors('用户名或密码错误！');
        }

    }


    protected  function checkValidUser(Request $request){
        $checked = false;
        $user_info = DB::table(User::TABLE_NAME)
            ->where('name' , $request->input('name'))
            ->first();

        if(isset($user_info->password)
        && Hash::check($request->input('password'), $user_info->password)){
            unset($user_info->password);
            $checked = $user_info;
        }

        return $checked;
    }
}
