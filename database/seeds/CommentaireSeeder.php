<?php

use Illuminate\Database\Seeder;

class CommentaireSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('commentaires')->insert([  
            'article_id' => '1',  
            'user_id' => '3',  
            'commentaire' => '1Vivamus in urna eu enim porttitor consequat. Proin vitae pulvinar libero. Proin ut hendrerit metus. Aliquam erat volutpat. Donec fermen tum convallis ante eget tristique.',  
        ]);
        DB::table('commentaires')->insert([  
            'article_id' => '1',  
            'user_id' => '6',  
            'commentaire' => '2Vivamus in urna eu enim porttitor consequat. Proin vitae pulvinar libero. Proin ut hendrerit metus. Aliquam erat volutpat. Donec fermen tum convallis ante eget tristique.',  
        ]);
        DB::table('commentaires')->insert([  
            'article_id' => '2',  
            'user_id' => '3',  
            'commentaire' => '3Vivamus in urna eu enim porttitor consequat. Proin vitae pulvinar libero. Proin ut hendrerit metus. Aliquam erat volutpat. Donec fermen tum convallis ante eget tristique.',  
        ]);
        DB::table('commentaires')->insert([  
            'article_id' => '3',  
            'user_id' => '3',  
            'commentaire' => '4Vivamus in urna eu enim porttitor consequat. Proin vitae pulvinar libero. Proin ut hendrerit metus. Aliquam erat volutpat. Donec fermen tum convallis ante eget tristique.',  
        ]);
        DB::table('commentaires')->insert([  
            'article_id' => '4',  
            'user_id' => '6',  
            'commentaire' => '5Vivamus in urna eu enim porttitor consequat. Proin vitae pulvinar libero. Proin ut hendrerit metus. Aliquam erat volutpat. Donec fermen tum convallis ante eget tristique.',  
        ]);
        DB::table('commentaires')->insert([  
            'article_id' => '4',  
            'user_id' => '3',  
            'commentaire' => '6Vivamus in urna eu enim porttitor consequat. Proin vitae pulvinar libero. Proin ut hendrerit metus. Aliquam erat volutpat. Donec fermen tum convallis ante eget tristique.',  
        ]);
        DB::table('commentaires')->insert([  
            'article_id' => '5',  
            'user_id' => '3',  
            'commentaire' => '7Vivamus in urna eu enim porttitor consequat. Proin vitae pulvinar libero. Proin ut hendrerit metus. Aliquam erat volutpat. Donec fermen tum convallis ante eget tristique.',  
        ]);
        DB::table('commentaires')->insert([  
            'article_id' => '5',  
            'user_id' => '6',  
            'commentaire' => '8Vivamus in urna eu enim porttitor consequat. Proin vitae pulvinar libero. Proin ut hendrerit metus. Aliquam erat volutpat. Donec fermen tum convallis ante eget tristique.',  
        ]);
        DB::table('commentaires')->insert([  
            'article_id' => '6',  
            'user_id' => '3',  
            'commentaire' => '9Vivamus in urna eu enim porttitor consequat. Proin vitae pulvinar libero. Proin ut hendrerit metus. Aliquam erat volutpat. Donec fermen tum convallis ante eget tristique.',  
        ]);
        DB::table('commentaires')->insert([  
            'article_id' => 6,  
            'user_id' => 6,  
            'commentaire' => '10Vivamus in urna eu enim porttitor consequat. Proin vitae pulvinar libero. Proin ut hendrerit metus. Aliquam erat volutpat. Donec fermen tum convallis ante eget tristique.',  
        ]);
    }
}
