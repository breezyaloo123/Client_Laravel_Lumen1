<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Breezy extends Model

{

    protected $fillable =[
        'numEtudiant','nom','prenom','statut','montantBourse'
    ];



    protected $hidden=[];
}






?>