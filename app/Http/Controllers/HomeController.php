<?php
/* namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;

use Illuminate\Routing\Controller;
use App\Models\User;
use Session; */
namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;
use App\Models\Post;
use App\Models\User;
use App\Models\Like;
use Session;

class HomeController extends BaseController {

    public function index(){
    
        $session_id = session('id_user');
        $user = User::where('id',$session_id)->first();

        return view('home')->with('user',$user);        
    }

    public static function load(){
        $array = array();
        
        $posts = Post::all()->sortByDesc('time');

        $user = User::find(session('id_user'));
        if($user != null){
            $l1 = $user->likes()->get();
            foreach($posts as $post){
                $verify = false;
                foreach($l1 as $l){
                    if($l['id'] == $post['id']){
                        $verify = true;
                        break;
                    }
                }
                $array[]=array(
                    'owner' => User::find($post['id_user']),// passiamo i dati del proprietario del post
                    'post' => $post,
                    'like' => $verify
                );
            }
        }
        else{
            foreach($posts as $post){
                $array[]=array(
                    'owner' => User::find($post['id_user']),
                    'post' => $post,
                    'like' => false
                );
            }
        }

        return $array;
        
    }
       
}
?> 