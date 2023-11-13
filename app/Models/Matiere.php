<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Matiere extends Model
{
    protected $table="matiere";
    protected $fillable=['libelleMat','coefMat'];
    public function matieres(){

        return $this->hasMany(Epreuve::class);
    }}
