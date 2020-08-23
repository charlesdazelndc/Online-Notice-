<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Faculty;
use View;
use App\CourseName;

class MenuFacultyProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('frontend.inc.header',function($view){
          $view->with('menu_faculty',Faculty::with('Departments')->get());   
          $view->with('courses',CourseName::all());   
        });
    }
}
