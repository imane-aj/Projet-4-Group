<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class groupes_apprenant extends Model
{
    

    use HasFactory;
    protected $table = "groupes_apprenant";
    public $timestamps= false;
    protected $fillable = [

        "Groupe_id",
        "Apprenant_id"

    ];
}
