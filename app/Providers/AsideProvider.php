<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\NoticeType;
use App\Role;
use App\Department;
use App\AcademicSession;
use View;

class AsideProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
       
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
     view()->composer('backend.inc.aside', function($view) {
       $roles = Role::all();
       $view->with(compact('roles') );
       $view->with('notice_types', NoticeType::all());
       $view->with('departments', Department::all());
       $view->with('academic_sessions', AcademicSession::all());
     });
    }
}
