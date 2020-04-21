<?php

use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services')->insert([  
            'icon' => 'flaticon-023-flask',  
            'titre' => 'GET IN THE LAB',  
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',  
        ]);    
        DB::table('services')->insert([  
            'icon' => 'flaticon-011-compass',  
            'titre' => 'PROJECTS ONLINE            ',  
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',   
        ]);    
        DB::table('services')->insert([  
            'icon' => 'flaticon-037-idea',  
            'titre' => 'SMART MARKETING            ',  
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',   
        ]);    
        DB::table('services')->insert([  
            'icon' => 'flaticon-039-vector',  
            'titre' => 'SOCIAL MEDIA',  
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',   
        ]);    
        DB::table('services')->insert([  
            'icon' => 'flaticon-036-brainstorming',  
            'titre' => 'BRAINSTORMING',  
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',   
        ]);    
        DB::table('services')->insert([  
            'icon' => 'flaticon-026-search',  
            'titre' => 'DOCUMENTED',  
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',   
        ]);    
        DB::table('services')->insert([  
            'icon' => 'flaticon-018-laptop-1',  
            'titre' => 'RESPONSIVE',  
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',   
        ]);    
        DB::table('services')->insert([  
            'icon' => 'flaticon-043-sketch',  
            'titre' => 'RETINA READY',  
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',   
        ]);    
        DB::table('services')->insert([  
            'icon' => 'flaticon-012-cube',  
            'titre' => 'DOCUMENTED',  
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',  
        ]);    
        DB::table('services')->insert([  
            'icon' => 'flaticon-026-search',  
            'titre' => 'DOCUMENTED',  
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',   
        ]); 
        DB::table('services')->insert([  
            'icon' => 'flaticon-011-compass',  
            'titre' => 'PROJECTS ONLINE            ',  
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',  
        ]); 
        DB::table('services')->insert([  
            'icon' => 'flaticon-023-flask',  
            'titre' => 'GET IN THE LAB',  
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',  
        ]);   
        DB::table('services')->insert([  
            'icon' => 'flaticon-026-search',  
            'titre' => 'DOCUMENTED',  
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',   
        ]); 
    }
}
