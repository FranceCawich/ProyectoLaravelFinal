<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class institutionTypes extends Model
{
    use HasFactory;

    protected $fillable = ['tipo',];
    public function participants(){
        ///return $this->belongsToMany(Participant::class);
    }
}