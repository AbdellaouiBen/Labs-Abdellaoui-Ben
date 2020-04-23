<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use App\User;
use App\Form;
use App\Newsletter;
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
                    'icon'    => 'fas fa-fw fa-share',
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
            $event->menu->add(  
                [
                    'text' => 'Messages',
                    'url'  => '/form',
                    'icon' => 'fas fa-users',
                    'label' => $nb
                ],
                [
                    'text' => 'Newsletter list',
                    'url'  => '/newsletter',
                    'icon' => 'fas fa-users',
                    'label' => $nb2
                ]
        

            );
        });
        $events->listen(BuildingMenu::class, function (BuildingMenu $event) {
            $event->menu->add('WEBSITE SETTINGS');
            $event->menu->add(
                

                        [     
                            'text' => 'logo',
                            'icon' => 'fas fa-tools',
                            'url'  => '/logo',
                        ],
                        [
                            'text' => 'banniere',
                            'icon' => 'fas fa-tools',
                            'url'  => '/banniere',
                        ],
                        [
                            'text' => 'element homepage', 
                            'icon' => 'fas fa-tools',
                            'url'  => '/independant',
                        ],
                        [ 
                            'text' => 'Services', 
                            'icon' => 'fas fa-tools',
                            'url'  => '/service',
                        ],
                        [
                            'text' => 'Testimonials', 
                            'icon' => 'fas fa-tools',
                            'url'  => '/testimonial',
                        ],
                        [
                            'text' => 'Quote', 
                            'icon' => 'fas fa-tools',
                            'url'  => '/quote',
                        ],
                        [
                            'text' => 'Articles', 
                            'icon' => 'fas fa-tools',
                            'url'  => '/article',
                        ],
                        [
                            'text' => 'Section Contact us', 
                            'icon' => 'fas fa-tools',
                            'url'  => '/contact',

                        ],
                        [
                            'text' => 'Footer', 
                            'icon' => 'fas fa-tools',
                            'url'  => '/footer',
                        ],
                        [
                            'text' => 'Tags', 
                            'icon' => 'fas fa-tools',
                            'url'  => '/tag',
                        ],
                        [
                            'text' => 'Categories', 
                            'icon' => 'fas fa-tools',
                            'url'  => '/categorie',
                        ]
                
            );

        });    
      
        
    }
}
