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
use Illuminate\Support\Facades\Auth;

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
                if (Auth::check()) {
                    if (Auth::user()->role_id==1 ) {
                $event->menu->add('USER(S) SETTINGS');
                }
            } 
            $users = User::all();
            $nb = count($users);
            $event->menu->add(
                
                [
                    'text' => 'Users',
                    'url'  => '/user',
                    'icon' => 'fas fa-users',
                    'label' => $nb,
                    'label_color' => 'secondary',
                    'can' => 'isAdmin'
                ],
        
                [
                    'text'    => 'Roles',
                    'icon'    => 'fas fa-user-tag',
                    'url'  => '/role',
                    'can' => 'isAdmin'
                ]
            );
        }); 
        

            $events->listen(BuildingMenu::class, function (BuildingMenu $event) {
            if (Auth::check()) {
                if (Auth::user()->role_id==1 || Auth::user()->role_id==3) {
                    $event->menu->add('INTERACTION');
                }
            } 
    
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
                    'label' => $nb,
                    'can' => 'isAdminOrWebmaster'
                ],
                [
                    'text' => 'Commentaires',
                    'url'  => '/commentaire',
                    'icon' => 'fas fa-comment-dots',
                    'label' => $nb3,
                    'can' => 'isAdminOrWebmaster'
                ],
                [
                    'text' => 'Newsletter list',
                    'url'  => '/newsletter',
                    'icon' => 'fas fa-list-alt',
                    'label' => $nb2,
                    'can' => 'isAdminOrWebmaster'
                ]
        

            );
        });
                
       
        $events->listen(BuildingMenu::class, function (BuildingMenu $event) {
            if (Auth::check()) {
                if (Auth::user()->role_id==1 || Auth::user()->role_id==3 || Auth::user()->role_id==5) {
            $event->menu->add('WEBSITE SETTINGS');
                }
            } 
            $event->menu->add(
                
                        [     
                            'text' => 'logo',
                            'icon' => 'fas fa-image',
                            'url'  => '/logo',
                            'can'  => 'isAdminOrWebmaster',
                        ],
                        [
                            'text' => 'banniere',
                            'icon' => 'fas fa-images',
                            'url'  => '/banniere',
                            'can'  => 'isAdminOrWebmaster',
                        ],
                        [
                            'text' => 'element homepage', 
                            'icon' => 'fas fa-align-left',
                            'url'  => '/independant',
                            'can'  => 'isAdminOrWebmaster',
                        ],
                        [ 
                            'text' => 'Services', 
                            'icon' => 'fas fa-tools',
                            'url'  => '/service',
                            'can'  => 'isAdminOrWebmaster',
                        ],
                        [
                            'text' => 'Testimonials', 
                            'icon' => 'fas fa-comments',
                            'url'  => '/testimonial',
                            'can'  => 'isAdminOrWebmaster',
                        ],
                        [
                            'text' => 'Articles', 
                            'icon' => 'fas fa-newspaper',
                            'url'  => '/article',
                            'can'  => 'isAdminOrWebmasterOrRedacteur',
                        ],
                        [
                            'text' => 'Tags', 
                            'icon' => 'fas fa-hashtag',
                            'url'  => '/tag',
                            'can'  => 'isAdminOrWebmaster',
                        ],
                        [
                            'text' => 'Categories', 
                            'icon' => 'fas fa-list-ul',
                            'url'  => '/categorie',
                            'can'  => 'isAdminOrWebmaster',
                        ],    
                        [
                            'text' => 'Quote', 
                            'icon' => 'fas fa-quote-right',
                            'url'  => '/quote',
                            'can'  => 'isAdminOrWebmaster',
                        ],
                        [
                            'text' => 'Section Contact us', 
                            'icon' => 'fas fa-phone-alt',
                            'url'  => '/contact',
                            'can'  => 'isAdminOrWebmaster',

                        ],
                        [
                            'text' => 'Footer', 
                            'icon' => 'fas fa-copyright',
                            'url'  => '/footer',
                            'can'  => 'isAdminOrWebmaster',
                        ]
                
            );

        });    

  
       
      
        
    }
}
