<?php

use Illuminate\Database\Seeder;

class FooterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('footers')->insert([  
            'text' => '2017 All rights reserved. Designed by ',
            'text_link' => 'Colorlib',
            'link' => 'https://colorlib.com/',
        ]);
    }
}
