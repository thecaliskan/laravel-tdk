<?php

namespace TheCaliskan\TDK;

use Illuminate\Http\Client\Response;
use Illuminate\Support\ServiceProvider;

class TDKServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Response::macro('tdkThrow', function () {
            $this->throw();

            if (isset($this->json()['error'])) {
                throw new TDKException($this);
            }

            return $this;
        });

        $this->app->singleton('thecaliskan-tdk', function ($app) {
            return new TDK($app);
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [
            'thecaliskan-tdk',
        ];
    }
}
