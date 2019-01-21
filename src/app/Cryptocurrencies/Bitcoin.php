<?php


namespace KriosMane\WalletExplorer\app\Cryptocurrencies;


class Bitcoin extends Crypto {

    /**
     * 
     */
    protected $name = 'Bitcoin';

    /**
     * 
     */
    protected $symbol = 'BTC';

    /**
     * 
     */
    protected $url = 'https://chain.so/api/v2/get_address_balance/BTC/%s';

    /**
     * 
     */
    protected $balance_path = 'data.confirmed_balance';


}



?>