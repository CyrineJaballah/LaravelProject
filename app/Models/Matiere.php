<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Matiere extends Model
{
    protected $table="matiere";
    protected $fillable=['libelleMat','coefMat'];
    public function epreuves(){

        return $this->hasMany(Epreuve::class);
    }}
