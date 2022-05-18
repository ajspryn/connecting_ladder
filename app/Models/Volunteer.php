<?php

namespace App\Models;

use App\Models\User;
use App\Models\Universitas;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Volunteer extends Model
{
    use HasFactory;

    protected $guarded = [
        'id'
    ];
    public function universitas(){
        return $this->belongsTo(Universitas::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
}
