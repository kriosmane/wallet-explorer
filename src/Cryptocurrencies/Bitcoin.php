<?php


namespace KriosMane\WalletExplorer\Cryptocurrencies;


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
    protected $url = 'https://sochain.com/api/v2/get_address_balance/BTC/%s';

    /**
     * 
     */
    protected $balance_response_path = 'data.confirmed_balance';


}



?>
