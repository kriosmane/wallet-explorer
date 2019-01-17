<?php

namespace KriosMane\WalletExplorer\app\Cryptocurrencies;

/**
 * Interface CryptoInterface.
 */
interface CryptoInterface
{
    /**
     * 
     *
     * 
     * 
     * 
     *
     * @return mixed
     */
    public function make();

    /**
     *
     *
     * @param $arguments
     *
     * @return mixed
     */
    public function handle($arguments);
}
