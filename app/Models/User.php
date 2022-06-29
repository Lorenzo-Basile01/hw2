<?php
namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class User extends Authenticatable
{
    public $timestamps = false;
    protected $hidden = [
        'password'
    ];

    public function posts()
    {
        return $this->hasMany('Post');
    }

    public function likes() {
        return $this->belongsToMany('App\Models\Post', 'likes', 'id_user','id_post');
    }
}
?>