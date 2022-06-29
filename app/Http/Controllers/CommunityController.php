<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Validation\Rule;
use Illuminate\Routing\Controller;
use App\Models\User;
use Session;

class CommunityController extends Controller{
    public function index(){
 
         return view('community')->with('csrf_token',csrf_token());
     }
     public function getCommunity($nome = null, $cognome = null){
        
        if(isset($nome) && isset($cognome))
        $users = User::where('nome', $nome)->where('cognome',$cognome)->get();
        else if(isset($nome) && !isset($cognome))
        $users = User::where('nome', $nome)->get();
        else if(!isset($nome) && isset($cognome))
        $users = User::where('cognome', $cognome)->get();
        else
        $users = User::all();

        foreach($users as $user){
            $array[] = array(
                'user' => $user,
                'nlikes' => count($user->likes()->get())
            );
        }
        
        return $array;

     }
}
?>