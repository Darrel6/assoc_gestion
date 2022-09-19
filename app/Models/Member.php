<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom',
        'email',
        'telephone',
        'fonction_id',
        'structure_id',

    ];
public function structure(){
    
    return $this->belongsTo(Structure::class);
}
public function fonction(){
    
    return $this->belongsTo(Fonction::class);
}
}
