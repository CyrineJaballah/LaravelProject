<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Epreuve extends Model
{
    protected $fillable=['nom','date','matiere_id'];

    public function matieres(){
        return $this->belongsTo(Matiere::class);
    }
}
