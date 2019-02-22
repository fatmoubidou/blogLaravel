<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Carbon;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
      setlocale(LC_ALL, 'fr_FR.UTF-8');
    }

    /**
     * Register any application services.
     *
     * @return void
     */
      public function register()
      {
      	if ($this->app->environment() == 'local') {
      		$this->app->register('Laracasts\Generators\GeneratorsServiceProvider');
      	}
      }
}
