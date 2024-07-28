<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Materiel;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\ItemsExport;


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
            'prix_ht' => 'required|numeric|max:9999999999.99',
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
            'prix_ht' => 'required|numeric|max:9999999999.99',
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

    public function showSearchForm2()
    {
        return view('GMateriel.VchercherParDate');
    }

    public function chercherParDate(Request $request)
    {
        // Récupérer la date de recherche
        $date = $request->input('date_acquisition');

        // Rechercher les matériels par date d'acquisition
        $materiels = Materiel::where('date_acquisition', $date)->get();

        // Retourner la vue avec les résultats
        return view('GMateriel.MaterielsParDate', compact('materiels', 'date'));
    }

    public function showSearchForm3()
    {
        return view('GMateriel.VchercherParDesignation');
    }

    public function chercherParDesignation(Request $request)
    {
        $designation = $request->input('designation');

        $materiels = Materiel::where('designation', 'LIKE', '%' . $designation . '%')->get();

        // Retourner la vue avec les résultats
        return view('GMateriel.MaterielsParDesignation', compact('materiels', 'designation'));
    }


    public function showSearchForm4()
    {
        return view('GMateriel.VchercherParCategorie');
    }

    public function chercherParCategorie(Request $request)
    {
        $categorie = $request->input('categorie');

        $materiels = Materiel::where('categorie', 'LIKE', '%' . $categorie . '%')->get();

        // Retourner la vue avec les résultats
        return view('GMateriel.MaterielsParCategorie', compact('materiels', 'categorie'));
    }

    public function afficheParCat(){
        $materiels = Materiel::all()->groupBy('categorie');
        return view('GMateriel.afficheParCategorie', compact('materiels'));
    }

    public function coutsParAnnee()
    {
        $coutsParAnnee = Materiel::select(
            DB::raw('YEAR(date_acquisition) as annee'),
            DB::raw('SUM(prix_ht) as cout_total')
        )
        ->groupBy('annee')
        ->orderBy('annee')
        ->get();

        return view('GMateriel.couts_par_annee', compact('coutsParAnnee'));
    }

    public function exportToTxt()
    {
        // Récupérer les données de votre modèle
        $items = Materiel::all();

        // Créer une chaîne de caractères pour le fichier texte
        $txtContent = "";
        foreach ($items as $item) {
            $txtContent .= implode("\t", $item->toArray()) . "\n"; // Utiliser une tabulation pour séparer les colonnes
        }

        // Définir le nom du fichier
        $fileName = 'export.txt';

        // Retourner le fichier texte en réponse
        return Response::make($txtContent, 200, [
            'Content-Type' => 'text/plain',
            'Content-Disposition' => "attachment; filename=$fileName"
        ]);
    }
    public function exportToExcel()
    {
        return Excel::download(new ItemsExport, 'export.xlsx');
    }

}
