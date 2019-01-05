<?php

namespace Roy688\QueryList;

use Roy688\QueryList\QueryList;
use Illuminate\Support\ServiceProvider;

class QueryListProvider extends ServiceProvider
{

    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = true;

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->registerQueryList();

        $this->registerAliases();
    }

    /**
     * Register the QueryList instance.
     *
     * @return void
     */
    protected function registerQueryList()
    {
        $this->app->singleton('querylist', function ($app) {
            return new \QL\QueryList();
        });
    }

    /**
     * Register class aliases.
     *
     * @return void
     */
    protected function registerAliases()
    {
        $this->app->alias('querylist', 'QL\QueryList');
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [ 'querylist' ];
    }
}