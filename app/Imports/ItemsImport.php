<?php

namespace App\Imports;

use App\Models\Materiel;
use Maatwebsite\Excel\Concerns\ToModel;

class ItemsImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Materiel([
            //
            'numero_ordre' => $row[0],
            'departement' => $row[1],
            'categorie' => $row[2],
            'designation' => $row[3],
            'fournisseur' => $row[4],
            'prix_ht' => $row[5],
            'date_acquisition' => $row[6],
        ]);
    }
}
