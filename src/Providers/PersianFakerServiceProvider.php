<?php

namespace Cnaebadi\PersianFaker\Providers;

use Faker\Factory;
use Illuminate\Support\ServiceProvider;
use Cnaebadi\PersianFaker\Faker\PersianFaker;

class PersianFakerServiceProvider extends ServiceProvider
{
	 /**
	  * Indicates if loading of the provider is deferred.
	  *
	  * @var bool
	  */
	 protected $defer = false;

	 /**
	  * Register services.
	  *
	  * @return void
	  */
	 public function register()
	 {
		  // Bind PersianFaker to the Laravel service container
		  $this->app->singleton('persian-faker', function () {
				$faker = Factory::create();
				return new PersianFaker($faker);
		  });
	 }

	 /**
	  * Bootstrap services.
	  *
	  * @return void
	  */
	 public function boot()
	 {
		  // If you need to publish config or do additional setup
		  // $this->publishes([
		  //     __DIR__ . '/../config/persian-faker.php' => config_path('persian-faker.php'),
		  // ]);
	 }

	 /**
	  * Get the services provided by the provider.
	  *
	  * @return array
	  */
	 public function provides()
	 {
		  return ['persian-faker'];
	 }
}
