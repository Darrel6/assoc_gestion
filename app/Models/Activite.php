<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activite extends Model
{
    use HasFactory;
    protected $fillable = [
        'date_event',
        'lieu',
        'visuel',
        'structure_id',
        'description',
       
    ];
}
