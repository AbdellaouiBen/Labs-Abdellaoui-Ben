<?php

use Illuminate\Database\Seeder;

class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('testimonials')->insert([
            'full_name' => '1Michael Smith',
            'img' => 'avatar01.jpg',
            'role' => 'CEO.',
            'company' => 'Company.',
            'text' => 'aaaaLorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.',
        ]);
        DB::table('testimonials')->insert([
            'full_name' => '2Michael Smith',
            'img' => 'avatar02.jpg',
            'role' => 'CEO',
            'company' => 'Company',
            'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.',
        ]);
        DB::table('testimonials')->insert([
            'full_name' => '3Michael Smith',
            'img' => 'avatar03.jpg',
            'role' => 'CEO',
            'company' => 'Company',
            'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.',
        ]);
        DB::table('testimonials')->insert([
            'full_name' => '4Michael Smith',
            'img' => 'avatar04.jpg',
            'role' => 'CEO',
            'company' => 'Company',
            'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.',
        ]);
        DB::table('testimonials')->insert([
            'full_name' => '5Michael Smith',
            'img' => 'avatar05.jpg',
            'role' => 'CEO',
            'company' => 'Company',
            'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.',
        ]);
        DB::table('testimonials')->insert([
            'full_name' => '6Michael Smith',
            'img' => 'avatar06.jpg',
            'role' => 'CEO',
            'company' => 'Company',
            'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.',
        ]);
        DB::table('testimonials')->insert([
            'full_name' => '7Michael Smith',
            'img' => 'avatar07.jpg',
            'role' => 'CEO',
            'company' => 'Company',
            'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.',
        ]);
        DB::table('testimonials')->insert([
            'full_name' => '8Michael Smith',
            'img' => 'avatar08.jpg',
            'role' => 'CEO',
            'company' => 'Company',
            'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.',
        ]);
        DB::table('testimonials')->insert([
            'full_name' => '9Michael Smith',
            'img' => 'avatar09.jpg',
            'role' => 'CEO',
            'company' => 'Company',
            'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.',
        ]);
    }
}
