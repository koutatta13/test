<?php
 
namespace App\Providers;
 
use Illuminate\Support\ServiceProvider;
use App\Animals\Bird;
use App\Animals\Food;
 
class AnimalServiceProvider extends ServiceProvider
{
    /**
     * Register the Bird class instance to the container.
     * Food class will be auto injected
     */
    public function register() {
        $this->app->bind('bird', function($app){
    		return new Bird($app->make(Food::class));
    	});
    }
}