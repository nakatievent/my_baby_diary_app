<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Authenticatable
{
    use HasFactory;

    protected $guarded = ['id'];

    // ポストモデルと１対多の関係なので、下記の記述を追加する
    public function posts() {
        return $this->hasMany(Post::class);
    }

    public function favorite_posts()
    {
        return $this->belongsToMany('App\Models\Post', 'favorites', 'user_id', 'post_id');
    }

}
