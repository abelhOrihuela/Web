<?php
/**
 * Created by PhpStorm.
 * User: abelOrihuelaMendoza
 * Date: 21/10/2015
 * Time: 02:30 PM
 */

namespace Wtc\Providers;


use Illuminate\Contracts\View\Factory;
use Illuminate\Support\ServiceProvider;
use Wtc\Composers\CurrentUserComposer;

class ViewComposerServiceProvider extends ServiceProvider
{


    public function boot(Factory $factory){
        $factory->composer('*', CurrentUserComposer::class);
    }
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        // TODO: Implement register() method.
    }
}