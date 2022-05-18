<?php

namespace App\Models;

use App\Models\Post;
use App\Models\Komentar_Post;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'role',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function post(){
        return $this->hasMany(Post::class);
    }

    public function post_user(){
        return $this->belongsTo(Post::class);
    }

    public function komentar(){
        return $this->hasMany(Komentar_Post::class);
    }
    public function forum(){
        return $this->hasMany(Forum::class);
    }
    public function volunteer(){
        return $this->hasMany(Volunteer::class);
    }
}
