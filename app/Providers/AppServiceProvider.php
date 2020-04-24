<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use App\User;
use App\Form;
use App\Newsletter;
use App\Commentaire;
use Illuminate\Contracts\Events\Dispatcher;
use JeroenNoten\LaravelAdminLte\Events\BuildingMenu;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    { 
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(Dispatcher $events)
    {
        Schema::defaultStringLength(191);
        $events->listen(BuildingMenu::class, function (BuildingMenu $event) {
            $event->menu->add('USER(S) SETTINGS');
            $users = User::where('role_id','!=',1)->get();
            $nb = count($users);
            $event->menu->add(
                [
                    'text' => 'Users',
                    'url'  => '/user',
                    'icon' => 'fas fa-users',
                    'label' => $nb,
                    'label_color' => 'secondary'
                ],
        
                [
                    'text'    => 'Roles',
                    'icon'    => 'fas fa-user-tag',
                    'url'  => '/role',
                ]
            );
        });
        $events->listen(BuildingMenu::class, function (BuildingMenu $event) {
            $event->menu->add('INTERACTION');
            $form = Form::all();
            $nb = count($form);
            $newsletter = Newsletter::all();
            $nb2 = count($newsletter);
            $newsletter = Commentaire::all();
            $nb3 = count($newsletter);
            $event->menu->add(  
                [
                    'text' => 'Messages',
                    'url'  => '/form',
                    'icon' => 'fas fa-envelope',
                    'label' => $nb
                ],
                [
                    'text' => 'Commentaires',
                    'url'  => '/commentaire',
                    'icon' => 'fas fa-comment-dots',
                    'label' => $nb3
                ],
                [
                    'text' => 'Newsletter list',
                    'url'  => '/newsletter',
                    'icon' => 'fas fa-list-alt',
                    'label' => $nb2
                ]
        

            );
        });
        $events->listen(BuildingMenu::class, function (BuildingMenu $event) {
            $event->menu->add('WEBSITE SETTINGS');
            $event->menu->add(
                

                        [     
                            'text' => 'logo',
                            'icon' => 'fas fa-image',
                            'url'  => '/logo',
                        ],
                        [
                            'text' => 'banniere',
                            'icon' => 'fas fa-images',
                            'url'  => '/banniere',
                        ],
                        [
                            'text' => 'element homepage', 
                            'icon' => 'fas fa-align-left',
                            'url'  => '/independant',
                        ],
                        [ 
                            'text' => 'Services', 
                            'icon' => 'fas fa-tools',
                            'url'  => '/service',
                        ],
                        [
                            'text' => 'Testimonials', 
                            'icon' => 'fas fa-comments',
                            'url'  => '/testimonial',
                        ],
                        [
                            'text' => 'Quote', 
                            'icon' => 'fas fa-quote-right',
                            'url'  => '/quote',
                        ],
                        [
                            'text' => 'Articles', 
                            'icon' => 'fas fa-newspaper',
                            'url'  => '/article',
                        ],
                        [
                            'text' => 'Section Contact us', 
                            'icon' => 'fas fa-phone-alt',
                            'url'  => '/contact',

                        ],
                        [
                            'text' => 'Footer', 
                            'icon' => 'fas fa-copyright',
                            'url'  => '/footer',
                        ],
                        [
                            'text' => 'Tags', 
                            'icon' => 'fas fa-hashtag',
                            'url'  => '/tag',
                        ],
                        [
                            'text' => 'Categories', 
                            'icon' => 'fas fa-list-ul',
                            'url'  => '/categorie',
                        ]    
                
            );

        });    
      
        
    }
}
