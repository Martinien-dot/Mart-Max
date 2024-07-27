<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Materiel;
use Illuminate\Validation\Rule;

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
    
        return redirect()->route('materiel.welcome')->with('success', 'Matériel ajouté avec succès.');
    }

    public function edit(Materiel $materiel){
        return view('GMateriel.edit', ['materiel' => $materiel]);
    }

    public function update(Materiel $materiel, request $request){
        $data = $request->validate([
            'numero_ordre' => [
                'required',
                'string',
                // Exclure l'ID du matériel en cours de validation
                Rule::unique('materiels')->ignore($materiel),
            ],
            'departement' => 'required|string',
            'designation' => 'required|string',
            'categorie' => 'required|string',
            'fournisseur' => 'required|string',
            'prix_ht' => 'required|numeric',
            'date_acquisition' => 'required|date',
        ]);
        $materiel->update($data);
    
        return redirect()->route('materiel.welcome')->with('success', 'Matériel modifié avec succès.');
    }

    public function destroy(Materiel $materiel){
        $materiel->delete();
        return redirect(route('materiel.welcome'))->with('success', 'Matériel supprimé avec succès');
    }


    public function showSearchForm()
    {
        return view('GMateriel.searchToDelete');
    }

    // Rechercher le matériel et afficher les résultats
    public function searchToDelete(Request $request)
    {
        $request->validate([
            'numero_ordre' => 'required|string'
        ]);

        $materiel = Materiel::where('numero_ordre', $request->numero_ordre)->first();

        if ($materiel) {
            return view('GMateriel.delete', ['materiel' => $materiel]);
        } else {
            return redirect()->route('materiel.searchToDelete')->with('error', 'Produit non trouvé.');
        }
    }


    //Rechercher pour la modification

    public function showSearchForm1()
    {
        return view('GMateriel.searchToUpdate');
    }

    // Rechercher le matériel et afficher les résultats
    public function searchToUpdate(Request $request)
    {
        $request->validate([
            'numero_ordre' => 'required|string'
        ]);

        $materiel = Materiel::where('numero_ordre', $request->numero_ordre)->first();

        if ($materiel) {
            return redirect()->route('materiel.edit', ['materiel' => $materiel->id]);
        } else {
            return redirect()->route('materiel.searchToUpdate')->with('error', 'Matériel non trouvé.');
        }
    }

}
