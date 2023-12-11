<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'name' => 'Huille Essentielle Cannelle',
                'price' => '100',
                'description' => 'huile essentielle de cannelle en vrac est réputée pour son parfum envoûtant et sa composition chimique exceptionnelle. Issue dun arbre originaire du Sri Lanka, cette huile précieuse regorge de propriétés stimulantes et réconfortantes.',
                'category' => 'huile',
                'gallery' => 'https://www.bioprogreen.com/wp-content/uploads/2023/07/2-1.png'
            ],
            [
                'name' => 'Huile Essentiel de Tanaisie Bleu',
                'price' => '100',
                'description' => 'La Tanaisie bleue, qui est le même que le nom de la Tanaisie bleue, est une plante aromatique originaire de la région méditerranéenne. Cette plante est célèbre pour ses magnifiques fleurs bleues et son parfum caractéristique.',
                'category' => 'huile',
                'gallery' => 'https://www.bioprogreen.com/wp-content/uploads/2023/07/33-1-980x980.png'
            ],
            [
                'name' => 'Huile de noix',
                'price' => '100',
                'description' => 'huile de noix de coco est appréciée pour sa saveur unique et ses bienfaits pour la santé. Pour les entreprises spécialisée dans la vente dhuile de noix de coco en vrac et en gros de qualité.',
                'category' => 'huile',
                'gallery' => 'https://www.bioprogreen.com/wp-content/uploads/2023/07/Design-11-980x551.png'
            ],

        ]);
    }
}
