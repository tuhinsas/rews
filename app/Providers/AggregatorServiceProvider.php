<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Aggregator\AggregatorFactory;


class AggregatorServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     * @var boolean
     */
    protected $defer = true;
    

    public function boot()
    {

    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app['Aggregator'] = $this->app->share(function($app){

            $config = config('aggregator');

            if(!$config)
            {
                throw new \RunTimeException("Aggregator configuration not found");
                
            }
            return new AggregatorFactory($config);
        });

    }

    public function provides()
    {

        return ['Aggregator'];
    }
}
