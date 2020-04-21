<?php

use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contacts')->insert([  
        'titre' => 'CONTACT US.',
        'text' => 'aCras ex mauris, ornare eget pretium sit amet, dignissim et turpis. Nunc nec maximus dui, vel suscipit dolor. Donec elementum velit a orci facilisis rutrum. ',
        'sous_titre' => 'Main Office.',
        'adress_un' => 'A/ Libertad, 34',
        'adress_deux' => 'a05200 Arévalo',
        'tel' => '+0034 37483 2445 322',
        'email' => 'Hello@company.com',
        ]);
    }
}
