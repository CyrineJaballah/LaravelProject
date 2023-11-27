<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Epreuve;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Epreuve::all();
        return view('posts.index', compact('posts'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nom' => 'required',
            'date' => 'required',
            'matiere_id' => 'required',
        ]);
        $post = Epreuve::create($request->all());
        return redirect()->route('');
    }

    public function show(string $id)
    {
    }

    public function update(Request $request, string $id)
    {
    }

    public function destroy(string $id)
    {
    }
}
