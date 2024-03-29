<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\User;
use Session;

class loginController extends BaseController
{
    public function index(){

        if(session('id_user')!=null){
            return redirect('home');
        }else{
            $error = Session::get('error');
            Session::forget('error');
            return view('login')->with('error',$error);
        }
    }

    public function checkLogin() {
        $user = User::where('email', request('email'))->where('password', request('password'))->first();

        if($user !== null) {
            Session::put('id_user', $user->id);
            return redirect('home');
        }
        else {
            Session::put('error','errore');
            return redirect('login');
        }
    }

    public function logout() {
        Session::flush();
        return redirect('login');
    }
}