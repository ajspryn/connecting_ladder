<?php

namespace App\Models;

use App\Models\Volunteer;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Universitas extends Model
{
    use HasFactory;

    protected $guarded = [
        'id'
    ];
    public function volunteer(){
        return $this->hasMany(Volunteer::class);
    }
}
