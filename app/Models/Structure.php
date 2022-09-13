<?php

namespace App\Models;

use App\Models\Dirigeant;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Structure extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'email',
        'tel',
        'domaine_activite',
        'localisation',
        'positionnement'
    ];
    public function dirigeant()
    {
        return $this->hasOne(Dirigeant::class,);
    }
}
