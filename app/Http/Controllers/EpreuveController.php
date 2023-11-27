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
        $tab = Matiere::all();
        return view('ajouterEpreuve')->with('matieres', $tab);
    }
    public function index()
    {
        $tab = Epreuve::all();
        return view('epreuve')->with('epreuves', $tab);
    }
    public function show($id)
    {
        $epreuves = Epreuve::find($id);
        $matieres = Matiere::all();
        return view("editEpreuve", compact('epreuves'), compact('matieres'));

    }
    public function store(Request $request)
    {
        $validatedData = Validator::make($request->all(), [
            'numepreuve' => 'bail|required',
            'datepreuve' => 'bail|required|date',
            'matiere_id' => 'bail|required',
        ]);
        if ($validatedData->fails()) {
            return back()->withErrors($validatedData);
        } else {
            Epreuve::Create(
                [
                    'nom' => $request->numepreuve,
                    'date' => $request->datepreuve,
                    'matiere_id' => $request->matiere_id,
                ]

            );
            return redirect()->route('epreuve.index');
        }
    }

    public function destroy(Epreuve $epreuve)
    {
        $epreuve->delete();
        return redirect()->route('epreuve.index');
    }

    public function edit($id)
    {
        $epreuves = Epreuve::find($id);
        $matieres = Matiere::all();
        return view("editEpreuve", compact('epreuves'), compact('matieres'));

    }
    public function update(Request $request, $id)
    {
        $validatedData = Validator::make($request->all(), [
            'nom' => 'bail|required',
            'date' => 'bail|required|date',
            'matiere_id' => 'bail|required|numeric'
        ]);
        $epreuve = Epreuve::findOrFail($id);
        $epreuve->update($request->all());
        return redirect()->route('epreuve.index');
    }


}
