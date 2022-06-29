<?php
namespace App\Http\Controllers;
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use App\Models\Like;
use Session;

class LikeController extends Controller
{
   
    public function add($id_post){
        $newLike = new Like;

        $newLike->id_user = session('id_user');
        $newLike->id_post = $id_post;

        $newLike->save();
    }

    public function remove($id_post){

        Like::where('id_user',session('id_user'))->where('id_post',$id_post)->delete();

    }


}
