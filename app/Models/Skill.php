<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    use HasFactory;

    // nom au pluriel car un skill peut regper pls users
    // cardinalité 1,n

    public function heroe()
    {
        return $this->hasMany(Heroe::class);
    }
}
