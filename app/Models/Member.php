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
        'fonction',
        'structure_id',

    ];
public function structure(){
    
    return $this->belongsTo(Structure::class);
}

}
