<?php

use Illuminate\Database\Seeder;

class IconSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('icons')->insert([  
            'icon' => 'flaticon-023-flask',  
        ]);
        DB::table('icons')->insert([  
            'icon' => 'flaticon-011-compass',  
        ]);
        DB::table('icons')->insert([  
            'icon' => 'flaticon-037-idea',  
        ]);
        DB::table('icons')->insert([  
            'icon' => 'flaticon-039-vector',  
        ]);
        DB::table('icons')->insert([  
            'icon' => 'flaticon-036-brainstorming',  
        ]);
        DB::table('icons')->insert([  
            'icon' => 'flaticon-026-search',  
        ]);
        DB::table('icons')->insert([  
            'icon' => 'flaticon-018-laptop-1',  
        ]);
        DB::table('icons')->insert([  
            'icon' => 'flaticon-043-sketch',  
        ]);
        DB::table('icons')->insert([  
            'icon' => 'flaticon-012-cube',  
        ]);
        DB::table('icons')->insert([  
            'icon' => 'flaticon-027-monitor',  
        ]);
        DB::table('icons')->insert([  
            'icon' => 'flaticon-047-artificial-intelligence',  
        ]);
        DB::table('icons')->insert([  
            'icon' => 'flaticon-048-abstract',  
        ]);
        DB::table('icons')->insert([  
            'icon' => 'flaticon-049-projector',  
        ]);
        DB::table('icons')->insert([  
            'icon' => 'flaticon-050-satellite',  
        ]);
        DB::table('icons')->insert([  
            'icon' => 'flaticon-001-picture',  
        ]);
        DB::table('icons')->insert([  
            'icon' => 'flaticon-003-energy-drink',  
        ]);
        DB::table('icons')->insert([  
            'icon' => 'flaticon-004-build',  
        ]);
        DB::table('icons')->insert([  
            'icon' => 'flaticon-005-thinking-1',  
        ]);
        DB::table('icons')->insert([  
            'icon' => 'flaticon-006-prism',  
        ]);
        DB::table('icons')->insert([  
            'icon' => 'flaticon-007-paint',  
        ]);
        DB::table('icons')->insert([  
            'icon' => 'flaticon-008-team',  
        ]);
        DB::table('icons')->insert([  
            'icon' => 'flaticon-009-idea-3',  
        ]);
        DB::table('icons')->insert([  
            'icon' => 'flaticon-010-diamond',  
        ]);
        DB::table('icons')->insert([  
            'icon' => 'flaticon-013-puzzle',  
        ]);
    }
}
