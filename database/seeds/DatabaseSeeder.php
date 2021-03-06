<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RoleSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(ServiceSeeder::class);
        $this->call(LogoSeeder::class);
        $this->call(BanniereSeeder::class);
        $this->call(IndependantSeeder::class);
        $this->call(TestimonialSeeder::class);
        $this->call(ContactSeeder::class);
        $this->call(FooterSeeder::class);
        $this->call(IconSeeder::class);
        $this->call(QuoteSeeder::class);
        $this->call(CategorieSeeder::class);
        $this->call(ArticleSeeder::class);
        $this->call(CommentaireSeeder::class);
        $this->call(TagSeeder::class);
        $this->call(ArticleTagSeeder::class);
        
    }
}
