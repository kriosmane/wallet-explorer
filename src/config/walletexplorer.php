<?php

    /**
     * 
     */
    return [
        
        /**
         * 
         */
        'cryptocurrencies' => [

            KriosMane\WalletExplorer\app\Cryptocurrencies\Akroma::class,
            KriosMane\WalletExplorer\app\Cryptocurrencies\Bitcoin::class,
            KriosMane\WalletExplorer\app\Cryptocurrencies\BitcoinDiamond::class,
            KriosMane\WalletExplorer\app\Cryptocurrencies\BitcoinCash::class,
            KriosMane\WalletExplorer\app\Cryptocurrencies\BitcoinGold::class,
            KriosMane\WalletExplorer\app\Cryptocurrencies\BitcoinMonster::class,
            KriosMane\WalletExplorer\app\Cryptocurrencies\BitcoinPrivate::class,
            KriosMane\WalletExplorer\app\Cryptocurrencies\Dash::class,
            KriosMane\WalletExplorer\app\Cryptocurrencies\Decred::class,
            KriosMane\WalletExplorer\app\Cryptocurrencies\Dogecoin::class,
            KriosMane\WalletExplorer\app\Cryptocurrencies\Ellaism::class,
            KriosMane\WalletExplorer\app\Cryptocurrencies\EthereumClassic::class,
            KriosMane\WalletExplorer\app\Cryptocurrencies\Ethereum::class,
            KriosMane\WalletExplorer\app\Cryptocurrencies\Litecoin::class,
            KriosMane\WalletExplorer\app\Cryptocurrencies\Verge::class,
            KriosMane\WalletExplorer\app\Cryptocurrencies\Pirl::class,
            KriosMane\WalletExplorer\app\Cryptocurrencies\Ravencoin::class,
            KriosMane\WalletExplorer\app\Cryptocurrencies\Zcash::class

        ],

        /**
         * 
         */
        'keys' => [

            'etherscan' => env('ETHERSCAN_API_KEY', '')

        ],

    ];


?>