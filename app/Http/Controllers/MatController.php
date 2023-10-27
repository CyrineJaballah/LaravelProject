<?php

namespace App\Http\Controllers;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Matiere;
use Illuminate\Support\Facades\Schema;

class MatController extends Controller
{

    public function index()
    {

        $tab=Matiere::all();
        return view('matiere')->with('matieres',$tab);
    }

    public function epreuve():BelongsTo
    {
        return $this->belongsTo(Epreuve::class);
    }

}
