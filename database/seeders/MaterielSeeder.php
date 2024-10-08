<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class MaterielSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('materiels')->insert([
            [
                'numero_ordre' => 'ORD001',
                'departement' => 'Informatique',
                'designation' => 'Ordinateur portable',
                'categorie' => 'Électronique',
                'fournisseur' => 'Fournisseur A',
                'prix_ht' => 1200.00,
                'date_acquisition' => Carbon::now()->subMonths(6), // Date d'acquisition il y a 6 mois
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'numero_ordre' => 'ORD002',
                'departement' => 'Informatique',
                'designation' => 'Imprimante',
                'categorie' => 'Électronique',
                'fournisseur' => 'Fournisseur B',
                'prix_ht' => 250.00,
                'date_acquisition' => Carbon::now()->subMonths(3), // Date d'acquisition il y a 3 mois
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'numero_ordre' => 'ORD003',
                'departement' => 'Électronique',
                'designation' => 'Projecteur',
                'categorie' => 'Équipement de présentation',
                'fournisseur' => 'Fournisseur C',
                'prix_ht' => 800.00,
                'date_acquisition' => Carbon::now()->subMonths(12), // Date d'acquisition il y a 1 an
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'numero_ordre' => 'ORD004',
                'departement' => 'Maintenance',
                'designation' => 'Clé à molette',
                'categorie' => 'Outils',
                'fournisseur' => 'Fournisseur D',
                'prix_ht' => 50.00,
                'date_acquisition' => Carbon::now()->subMonths(1), // Date d'acquisition il y a 1 mois
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'numero_ordre' => 'ORD005',
                'departement' => 'Électronique',
                'designation' => 'Écran LED',
                'categorie' => 'Équipement informatique',
                'fournisseur' => 'Fournisseur E',
                'prix_ht' => 300.00,
                'date_acquisition' => Carbon::now()->subWeeks(2), // Date d'acquisition il y a 2 semaines
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
