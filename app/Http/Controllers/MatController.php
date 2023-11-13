<?php

namespace App\Http\Controllers;

use App\Models\Epreuve;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Matiere;
use Illuminate\Support\Facades\Validator;

class MatController extends Controller
{

    public function index()
    {

        $tab = Matiere::all();
        return view('matiere')->with('matieres', $tab);
    }

    public function create()
    {
        return view('ajouterMatieres');
    }
    public function insertMatiere(Request $request)
    {
        $validatedData = Validator::make($request->all(), [
            'codemat' => 'bail|required|max:5',
            'libelle' => 'bail|required',
            'coef' => 'bail|required|numeric|min:1|max:5',
        ]);
        if ($validatedData->fails()) {
            return back()->withErrors($validatedData);
        } else {
            Matiere::create(
                [
                    'codemat' => $request->input('codemat'),
                    'libelleMat' => $request->input('libelle'),
                    'coefMat' => $request->input('coef'),
                ]
            );
            return redirect()->route('matiere');
        }


    }


}
