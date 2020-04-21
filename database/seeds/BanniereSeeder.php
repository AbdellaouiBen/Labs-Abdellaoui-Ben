<?php

use Illuminate\Database\Seeder;

class BanniereSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bannieres')->insert([  
            'img' => 'banniere1.jpg',
        ]);
        DB::table('bannieres')->insert([  
            'img' => 'banniere2.jpg',
        ]);
        DB::table('bannieres')->insert([  
            'img' => 'banniere1.jpg',
        ]);
    }
}
