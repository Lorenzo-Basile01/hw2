<?php
namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\User;
use App\Models\Post;
use Session;

class CustomerController extends BaseController{

    public function index(){
        return view('customer')->with('csrf_token',csrf_token());
    }
    public function caricamento($descrizione, $link){

        $content = array(
            'link'=>$link,
            'descrizione'=>$descrizione
        );
        
        $newPost = new Post;
        $newPost->id_user = session('id_user');
        $newPost->nlikes = 0;
        $newPost->content = json_encode($content);
        $newPost->save();
    }


}
?>