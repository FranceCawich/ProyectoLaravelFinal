<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class events extends Model
{
    use HasFactory;
    use HasFactory;
    protected $fillable = ['nombre', 'descripcion','fechaInicio','fechaFin'];
    public function participants(){
        return $this->belongsToMany(Participant::class);
    }
}