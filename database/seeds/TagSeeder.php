<?php

use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tags')->insert([  
            'tag' => 'branding',
        ]);
        DB::table('tags')->insert([  
            'tag' => 'identity',
        ]);
        DB::table('tags')->insert([  
            'tag' => 'video',
        ]);
        DB::table('tags')->insert([  
            'tag' => 'design',
        ]);
        DB::table('tags')->insert([  
            'tag' => 'inspiration',
        ]);
        DB::table('tags')->insert([  
            'tag' => 'web design',
        ]);
        DB::table('tags')->insert([  
            'tag' => 'photography',
        ]);
        DB::table('tags')->insert([  
            'tag' => 'media',
        ]);
        DB::table('tags')->insert([  
            'tag' => 'people',
        ]);
        DB::table('tags')->insert([  
            'tag' => 'landscape',
        ]);
        DB::table('tags')->insert([  
            'tag' => 'animaux',
        ]);
        DB::table('tags')->insert([  
            'tag' => 'technologie',
        ]);
        DB::table('tags')->insert([  
            'tag' => 'voyage',
        ]);
    }
}
