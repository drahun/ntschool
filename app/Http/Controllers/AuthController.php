<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller{
    public function register(){
        $title = 'регистрация на сайте';
        return view('widgets.registerform',compact('title'));
    }
    public function registerPost(){
        $this->validate($this->request, [
            'name' => 'required|max:255',
            'email' => 'required|email|unique:users|max:255',
            'password' => 'required|max:255|min:6',
            'password2' => 'required|same:password',
            'phone' => 'required|regex:/\+?\d{3}\(?\d{2}\)?\d{3}\-?\d{2}\-?\d{2}/',
            'is_confirmed' => 'accepted'
        ]);
        DB::table('users')->insert([
            'name' => $this->request->input('name'),
            'email' => $this->request->input('email'),
            'password' => bcrypt($this->request->input('password')),
            'phone' => $this->request->input('phone'),
            'created_at' => \Carbon\Carbon::createFromTimestamp(time())->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::createFromTimestamp(time())->format('Y-m-d H:i:s'),
        ]);
        return 'OK';
    }
    public function login(){
        $title = 'форма входа';
        return view('widgets.login',compact('title'));
    }
    public function loginPost(){
        /*var_dump($this->request->all());
        dump($this->request->all());
        debug($this->request->all());*/
        $remember = $this->request->input('remember') ? true : false;

        $authResult = Auth::attempt([
            'email' => $this->request->input('email'),
            'password' => $this->request->input('password'),
        ], $remember);

        if ($authResult) { //
            return redirect()->route('post.index');
        } else {
            return redirect()->route('login')->with('authError', trans('custom.wrong_password'));
        }
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('loginPost');
    }
}
