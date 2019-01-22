<?php

namespace KriosMane\WalletExplorer\Facades;

use Illuminate\Support\Facades\Facade;

class WalletExplorer extends Facade
{
    /**
     * Get the registered name of the component
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'wallet-explorer';
    }
}