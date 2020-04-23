<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'ben',
            'email' => 'ben@bonjour.com',
            'password' => Hash::make('aa'),
            'img' => 'pp1.jpg',
            'role_id' => 1,
            'firstname' => 'bedrzf',
            'description' => 'uihbzenvoizedze ijdvz,edziojedcozed pordvp,dv okzokezofkzr^vrzkvze oezfcvoefez,f,,f kz,  zedo;fze ',
        ]);
        DB::table('users')->insert([
            'name' => 'Albi',
            'email' => 'albin@lol.com',
            'password' => Hash::make('aa'),
            'img' => 'pp2.jpg',
            'role_id' => 2,
            'firstname' => null,
            'description' => 'uihbzenvoizedze ijdvz,edziojedcozed pordvp,dv okzokezofkzr^vrzkvze oezfcvoefez,f,,f kz,  zedo;fze ',
        ]);
        DB::table('users')->insert([
            'name' => 'Harry Potter',
            'email' => 'Harry@Potter.com',
            'password' => Hash::make('aa'),
            'img' => 'pp3.jpg',
            'role_id' => 3,
            'firstname' => null,
            'description' => null,
        ]);
        DB::table('users')->insert([
            'name' => 'redacteuuur',
            'email' => 'rea@ok.com',
            'password' => Hash::make('aa'),
            'img' => 'pp4.jpg',
            'role_id' => 4,
            'firstname' => 'bedrzf',
            'description' => 'uihbzenvoizedze ijdvz,edziojedcozed pordvp,dv okzokezofkzr^vrzkvze oezfcvoefez,f,,f kz,  zedo;fze ',
        ]);
        DB::table('users')->insert([
            'name' => 'redacteuuurdeux',
            'email' => 'reda@ok.com',
            'password' => Hash::make('aa'),
            'img' => 'pp4.jpg',
            'role_id' => 4,
            'firstname' => null,
            'description' =>'uihbzenvoizedze ijdvz,edziojedcozed pordvp,dv okzokezofkzr^vrzkvze oezfcvoefez,f,,f kz,  zedo;fze ',
        ]);
        DB::table('users')->insert([
            'name' => 'erhgeq',
            'email' => 'Harqgrqry@qrrzeg.rg',
            'password' => Hash::make('aa'),
            'img' => 'pp3.jpg',
            'role_id' => 3,
            'firstname' => 'bedrzf',
            'description' =>  'bedrzf erte  thgrt het erthg et',
        ]);
    }
}
