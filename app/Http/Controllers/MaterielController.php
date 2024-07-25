<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Materiel;

class MaterielController extends Controller
{
    //

    public function index(){
        $materiels = Materiel::all();
        return view('GMateriel.index', ['materiels' => $materiels]);
    }

    public function create(){
        return view('GMateriel.create');
    }

    public function enregistrer(Request $request){
        $data = $request->validate([
            'numero_ordre' => 'required|unique:materiels,numero_ordre',
            'departement' => 'required|string',
            'designation' => 'required|string',
            'categorie' => 'required|string',
            'fournisseur' => 'required|string',
            'prix_ht' => 'required|numeric',
            'date_acquisition' => 'required|date',
        ]);

        Materiel::create($data);
    
        return redirect()->route('materiel.index')->with('success', 'Matériel ajouté avec succès.');
    }

    public function edit(Materiel $materiel){
        return view('GMateriel.edit', ['materiel' => $materiel]);
    }

    public function update(Materiel $materiel, request $request){
        $data = $request->validate([
            'numero_ordre' => 'required|unique:materiels,numero_ordre',
            'departement' => 'required|string',
            'designation' => 'required|string',
            'categorie' => 'required|string',
            'fournisseur' => 'required|string',
            'prix_ht' => 'required|numeric',
            'date_acquisition' => 'required|date',
        ]);

        $materiel->update($data);
    
        return redirect()->route('materiel.index')->with('success', 'Matériel modifié avec succès.');
    }

    public function destroy(Materiel $materiel){
        $materiel->delete();
        return redirect(route('materiel.index'))->with('success', 'Matériel supprimé avec succès');
    }
}
