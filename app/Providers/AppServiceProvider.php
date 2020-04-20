<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use App\User;
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
            $event->menu->add('WEBSITE SETTINGS');
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
    }
}
