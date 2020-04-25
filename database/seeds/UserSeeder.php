<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

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
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('users')->insert([
            'name' => 'Harry Potter',
            'email' => 'Harry@Potter.com',
            'password' => Hash::make('aa'),
            'img' => 'pp3.jpg',
            'role_id' => 2,
            'firstname' => null,
            'description' => null,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('users')->insert([
            'name' => 'Albi',
            'email' => 'albin@lol.com',
            'password' => Hash::make('aa'),
            'img' => 'pp2.jpg',
            'role_id' => 3,
            'firstname' => null,
            'description' => 'uihbzenvoizedze ijdvz,edziojedcozed pordvp,dv okzokezofkzr^vrzkvze oezfcvoefez,f,,f kz,  zedo;fze ',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('users')->insert([
            'name' => 'redacJhon',
            'email' => 'rea@ok.com',
            'password' => Hash::make('aa'),
            'img' => 'pp4.jpg',
            'role_id' => 5,
            'firstname' => 'Doe',
            'description' => 'uihbzenvoizedze ijdvz,edziojedcozed pordvp,dv okzokezofkzr^vrzkvze oezfcvoefez,f,,f kz,  zedo;fze ',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('users')->insert([
            'name' => 'redacAdaline ',
            'email' => 'reda@ok.com',
            'password' => Hash::make('aa'),
            'img' => 'pp5.jpg',
            'role_id' => 5,
            'firstname' => null,
            'description' =>'uihbzenvoizedze ijdvz,edziojedcozed pordvp,dv okzokezofkzr^vrzkvze oezfcvoefez,f,,f kz,  zedo;fze ',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('users')->insert([
            'name' => 'userReichel',
            'email' => 'utili@ok.com',
            'password' => Hash::make('aa'),
            'img' => 'pp6.jpg',
            'role_id' => 4,
            'firstname' => 'Lexi ',
            'description' =>  'bedrzf erte  thgrt het erthg et',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('users')->insert([
            'name' => 'userGracie ',
            'email' => 'user@ok.com',
            'password' => Hash::make('aa'),
            'img' => 'pp7.jpg',
            'role_id' => 4,
            'firstname' => null,
            'description' =>  'bedrzf erte  thgrt het erthg et',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('users')->insert([
            'name' => 'Emmett ',
            'email' => 'design@ok.com',
            'password' => Hash::make('aa'),
            'img' => 'pp8.jpg',
            'role_id' => 6,
            'firstname' => null,
            'description' =>  'bedrzf erte  thgrt het erthg et',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('users')->insert([      
            'name' => 'nameJunior',
            'email' => 'Junior@ok.com',
            'password' => Hash::make('aa'),
            'img' => 'pp9.jpg',
            'role_id' => 7,
            'firstname' => 'preJuniored',
            'description' =>  null,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('users')->insert([
            'name' => 'nameManager',
            'email' => 'Manager@ok.com',
            'password' => Hash::make('aa'),  
            'img' => 'pp10.jpg',
            'role_id' => 8,
            'firstname' => 'preManager',
            'description' =>  ' Manager Manageredrb ghergsManagere t',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
    }
}
