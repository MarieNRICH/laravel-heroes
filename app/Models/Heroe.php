<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Heroe extends Model
{
    use HasFactory;

    // nom de la fonction au singulier car 1 seul message en relation 
    // cardianlité 1,1

    public function skills()
    {
        return $this->hasMany(Skill::class);
    }

    // idem
    public function universe()
    {
        return $this->belongsTo(Universe::class);
    }

    // idem
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
