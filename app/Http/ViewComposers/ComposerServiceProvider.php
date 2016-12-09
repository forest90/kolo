<?php

namespace App\Http\ViewComposers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Register bindings in the container.
     *
     * @return void
     */
    public function boot()
    {

        View::composer(array('main.*'), function($view)
        {
            $view->with('isLogged', Auth::user());
        });
        View::composer(array('layouts.index'), function($view)
        {
            $view
                ->with('announcements', \App::make('HomeController')->getAnnouncements())
                ->with('avatarPath', \App::make('AuthController')->getUserAvatar());
        });
        View::composer(array('main.index'), function($view)
        {
            $isLogged = \Auth::user() ? true : false;
            $view->with('isLogged', $isLogged);
        });
        View::composer(array('main.partials.menu'), function($view)
        {
            $view->with('menu', [
                ['name' => 'O nas', 'uri' => 'about'],
                ['name' => 'Kontakt', 'uri' => 'contact'],
                ['name' => 'Koło w obiektywie', 'uri' => 'gallery'],
                ['name' => 'Przepisy prawne', 'uri' => 'law'],
                ['name' => 'Do pobrania', 'uri' => 'download'],
            ]);
        });
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}