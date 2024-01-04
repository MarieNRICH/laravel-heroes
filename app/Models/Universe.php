<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Universe extends Model
{
    use HasFactory;

    // nom de la fonction au singulier car 1 seul message en relation 
    // cardianlité 1,1

    public function universe()
    {
        return $this->belongsTo(Universe::class);
    }

    // nom au pluriel car un user peut poster pls quacks
    // cardinalité 0,n
    public function heroes()
    {
        return $this->hasMany(Heroe::class);
    }

    // nom au pluriel car un user peut poster pls comments
    // cardinalité 0,n
    public function skills()
    {
        return $this->hasMany(Skill::class);
    }    

    // nom de la fonction au singulier car 1 seul rôle en relation
    // cardinalité 1,1
    public function role()
    {
        return $this->belongsTo(Role::class);
    }

    public function isAdmin()
    {
        // return $this->role == "admin";
        return $this->role_id == 2;
    }
}
