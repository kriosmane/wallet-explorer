<?php

namespace KriosMane\WalletExplorer\app\Providers;


use KriosMane\WalletExplorer\app\WalletExplorer;

use Illuminate\Support\ServiceProvider;

class WalletExplorerServiceProvider extends ServiceProvider
{   

    /*
    * Indicates if loading of the provider is deferred.
    *
    * @var bool
    */
    protected $defer = true;

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {   

        
        $config = realpath(__DIR__.'/../../config/walletexplorer.php');

        $this->publishes([

            $config => config_path('walletexplorer.php')

        ]);
        
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {

        $this->app->singleton(WalletExplorer::class, function() {

            $config = $this->app['config'];

            $wallet_explorer = new WalletExplorer();

            $wallet_explorer->addCryptos($config->get('walletexplorer.cryptocurrencies', []));


            return $wallet_explorer;

        });

        $this->app->alias(WalletExplorer::class, 'wallet-explorer');
    }

    /**
    * Get the services provided by the provider
    * @return array
    */
    public function provides()
    {
        return ['wallet-explorer'];
    }
}
