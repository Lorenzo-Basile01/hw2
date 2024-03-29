<?php
namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    protected $fillable = ['id_user, id_post'];
    public $timestamps = false;

    public function user() {
        return $this->belongsTo("User");
    }

    public function post() {
        return $this->belongsTo('Post');
    }

}
?>