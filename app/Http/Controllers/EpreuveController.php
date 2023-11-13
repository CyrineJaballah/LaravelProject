<?php

namespace App\Http\Controllers;

use App\Models\Matiere;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Epreuve;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Validator;
class EpreuveController extends Controller
{
    public function create()
    {
        $tab= Matiere::all();
        return view('ajouterEpreuve')->with('matieres',$tab);
    }
    public function index()
    {
        $tab= Epreuve::all();
        return view('epreuve')->with('epreuves',$tab);
    }
    public function insertEpreuve(Request $request)
    {
        $validatedData = Validator::make($request->all(),[
            'numepreuve' => 'bail|required',
            'datepreuve' => 'bail|required|date',
            'matiere_id' => 'bail|required',
        ]);
        if($validatedData->fails()){
            return back()->withErrors($validatedData);
        }else{
            Epreuve::Create(
                [
                    'nom'=>$request->numepreuve,
                    'date'=>$request->datepreuve,
                    'matiere_id'=>$request->matiere_id,
                ]

            );
            return redirect()->route('epreuve');
        }


}


}
