<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\User;
use Session;

class signupController extends BaseController
{

   /*  public function test($var){
        return $var;
    } */

    public function index(){
        return view('signup')->with('csrf_token',csrf_token());
    }

    public function checkEmail($email){
        $exist = User::where('email', $email)->exists();
        return ['exists' => $exist];
    }

    public function createUser(){
        $request = request();
        $error=array();

/*         Session::put(key,$request['email']);
 */
        # PASSWORD
        if (strlen($request["password"]) < 8) {
            $error[] = "Caratteri password insufficienti";
        } 
        # CONFERMA PASSWORD
        if (strcmp($request["password"], $request["confirm_password"]) != 0) {
            $error[] = "Le password non coincidono";
        }
        # EMAIL
        if (!filter_var($request['email'], FILTER_VALIDATE_EMAIL)) {
            $error[] = "Email non valida";
        }else {
            $email = User::where('email', $request['email'])->first();
            if ($email !== null) {
                $error[] = "Email già utilizzata";
            }
        }

        if(count($error) == 0){
            $newUser = new User;

            $newUser->nome = $request["name"];
            $newUser->cognome = $request["surname"];
            $newUser->data_nascita = $request["birthdate"];
            $newUser->email = $request["email"];
            $newUser->password = $request["password"];
            
            $newUser->save();
            if ($newUser) {

                Session::put('id_user', $newUser->id);

                return redirect('home');

            }
            return redirect('login');
        }
    }
   
}
