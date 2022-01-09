<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class participants extends Model
{
    use HasFactory;
    protected $fillable = ['apellidoPaterno', 'apellidoMaterno', 'nombre', 'email','telefono','genero'];
    public function participants(){
        return $this->belongsToMany(Participant::class);
    }
}