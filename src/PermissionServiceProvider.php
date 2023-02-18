<?php


namespace prodCoders\RolesPermissions;


use Illuminate\Support\ServiceProvider;

class PermissionServiceProvider extends ServiceProvider
{
    public function boot()
    {
//        dd(__DIR__ . '/../../database/migrations');
//        $this->loadMigrationsFrom(__DIR__ . '/../../database/migrations');
//        $this->loadRoutesFrom(__DIR__ . '/../routes/web.php');
        $this->loadRoutesFrom(__DIR__ .'/routes/wep.php');
//        $this->registerSeedsFrom(__DIR__.'/../database/seeds/DatabaseSeeder.php');

    }

    public function register()
    {

    }

}
