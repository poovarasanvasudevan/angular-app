<?php

namespace App\Providers;

use Auth;
use Illuminate\Support\ServiceProvider;
use JavaScript;
use View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //

        View::composer('*', function($view){
            if(Auth::user()) {
                $user = Auth::user();
                $view->with('currentUser', $user);

                JavaScript::put([
                    'themeColor' => $user->settings['theme'] ?? 'red',
                    'USER_ID'=>Auth::user()->id
                ]);
            } else {
                JavaScript::put([
                    'themeColor' =>  'blue',
                ]);
            }
        });
        //View::share('user', "Helloo");

    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
