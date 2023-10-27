<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Epreuve;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
class EpreuveController extends Controller
{
    public function index()
    {
        $tab= Epreuve::all();
        return view('epreuve')->with('epreuves',$tab);
    }

    public function store(){

    }
    }
