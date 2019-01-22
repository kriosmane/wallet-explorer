<?php

    /**
     * 
     */
    return [
        
        /**
         * 
         */
        'cryptocurrencies' => [

            KriosMane\WalletExplorer\Cryptocurrencies\Akroma::class,
            KriosMane\WalletExplorer\Cryptocurrencies\Bitcoin::class,
            KriosMane\WalletExplorer\Cryptocurrencies\BitcoinDiamond::class,
            KriosMane\WalletExplorer\Cryptocurrencies\BitcoinCash::class,
            KriosMane\WalletExplorer\Cryptocurrencies\BitcoinGold::class,
            KriosMane\WalletExplorer\Cryptocurrencies\BitcoinMonster::class,
            KriosMane\WalletExplorer\Cryptocurrencies\BitcoinPrivate::class,
            KriosMane\WalletExplorer\Cryptocurrencies\Dash::class,
            KriosMane\WalletExplorer\Cryptocurrencies\Decred::class,
            KriosMane\WalletExplorer\Cryptocurrencies\Dogecoin::class,
            KriosMane\WalletExplorer\Cryptocurrencies\Ellaism::class,
            KriosMane\WalletExplorer\Cryptocurrencies\EthereumClassic::class,
            KriosMane\WalletExplorer\Cryptocurrencies\Ethereum::class,
            KriosMane\WalletExplorer\Cryptocurrencies\Litecoin::class,
            KriosMane\WalletExplorer\Cryptocurrencies\Verge::class,
            KriosMane\WalletExplorer\Cryptocurrencies\Pirl::class,
            KriosMane\WalletExplorer\Cryptocurrencies\Ravencoin::class,
            KriosMane\WalletExplorer\Cryptocurrencies\SnowGem::class,
            KriosMane\WalletExplorer\Cryptocurrencies\Zcash::class

        ],

        /**
         * 
         */
        'keys' => [

            'etherscan' => env('ETHERSCAN_API_KEY', '')

        ],

    ];


?>