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
                    'label' => $nb
                ],
        
                [
                    'text'    => 'Roles',
                    'icon'    => 'fas fa-fw fa-share',
                    'submenu' => [
                        [
                            'text' => 'Roles',
                            'url'  => '/role',
                        ],
                        [
                            'text' => 'Ajout Role',
                            'url'  => '/role/create',
                        ],
                    ],
                ]
            );
        });
        $events->listen(BuildingMenu::class, function (BuildingMenu $event) {
            $event->menu->add('WEBSITE SETTINGS');
            $event->menu->add(
                [
                    'text' => 'HomePage',
                    'url'  => '/user',
                    'icon' => 'fas fa-users',
                    'submenu' => [
                        [
                            'text' => 'Header',  
                            'submenu' => [
                                [    'text' => 'logo',
                                    'url'  => '/logo',
                                ],
                                [
                                    'text' => 'banniere',
                                    'url'  => '/banniere',
                                ],

                            ],
                        ],
                        [
                            'text' => 'element homepage', 
                            'icon' => 'fas fa-tools',
                            'url'  => '/independant',

                        ],
                        [ 
                            'text' => 'Services', 
                            'icon' => 'fas fa-tools',
                            'submenu' => [
                                [
                                    'text' => 'services',
                                    'url'  => '/service',
                                ],
                                [
                                    'text' => 'ajouter un service',
                                    'url'  => '/service/create',
                                ],
                            ],
                        ],
                        [
                            'text' => 'Testimonials', 
                            'icon' => 'fas fa-tools',
                            'submenu' => [
                                [
                                    'text' => 'Testimonials existants',
                                    'url'  => '/testimonial',
                                ],
                                [
                                    'text' => 'ajouter un testimonial',
                                    'url'  => '/testimonial/create',
                                ],
                            ],
                        ],
                        [
                            'text' => 'Contact us', 
                            'icon' => 'fas fa-tools',
                            'url'  => '/contact',

                        ],
                        [
                            'text' => 'Footer', 
                            'icon' => 'fas fa-tools',
                            'url'  => '/footer',
                        ],
                    ],
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
            
                    // ,[
                    //     'text'    => 'Roles',
                    //     'icon'    => 'fas fa-fw fa-share',
                    //     'submenu' => [
                    //         [
                    //             'text' => 'Roles',
                    //             'url'  => '/role',
                    //         ],
                    //         [
                    //             'text' => 'Ajout Role',
                    //             'url'  => '/role/create',
                    //         ],
                    //     ],
                    // ]
                );
            });
        
    }
}
