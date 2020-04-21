<?php

use Illuminate\Database\Seeder;

class IndependantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('independants')->insert([  
            'banniere_text' => 'aGet your freebie template now!',
            'presentation_titre' => 'aGET IN THE LAB AND DISCOVER THE WORLD',
            'presentation_text_un' => 'aLorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequat ante ac congue. Quisque porttitor porttitor tempus. Donec maximus ipsum non ornare vporttitor porttitorestibulum. Sed libero nibh, feugiat at enim id, bibendum sollicitudin arcu.',
            'presentation_text_deux' => 'aCras ex mauris, ornare eget pretium sit amet, dignissim et turpis. Nunc nec maximus dui, vel suscipit dolor. Donec elementum velit a orci facilisis rutrum. Nam convallis vel erat id dictum. Sed ut risus in orci convallis viverra a eget nisi. Aenean pellentesque elit vitae eros dignissim ultrices. Quisque porttitor porttitorlaoreet vel risus et luctus.',
            'presentation_btn' => true,
            'video_img' => 'video.jpg',
            'video_url' => 'https://www.youtube.com/watch?v=kfBxUVY7Jwk',
            'testimonials_titre' => 'aWHAT OUR CLIENTS SAY',
            'team_titre' => 'aGET IN THE LAB AND MEET THE TEAM',
            'promotion_titre' => 'aAre you ready to stand out?',
            'promotion_text' => 'aLorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est.',
        ]);
    }

    
}
