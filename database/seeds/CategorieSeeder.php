<?php

use Illuminate\Database\Seeder;

class CategorieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([  
            'categorie' => 'Animaux',  
        ]);
        DB::table('categories')->insert([  
            'categorie' => 'Art',  
        ]);
        DB::table('categories')->insert([  
            'categorie' => 'Paysagex',  
        ]);
        DB::table('categories')->insert([  
            'categorie' => 'Plats',  
        ]);
        DB::table('categories')->insert([  
            'categorie' => 'Alimentation',  
        ]);
        DB::table('categories')->insert([  
            'categorie' => 'Technologiex',  
        ]);
        DB::table('categories')->insert([  
            'categorie' => 'Vacances',  
        ]);
        DB::table('categories')->insert([  
            'categorie' => 'Culture',  
        ]);
        DB::table('categories')->insert([  
            'categorie' => 'Santé',  
        ]);
    }
}
