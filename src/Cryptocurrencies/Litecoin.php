<?php


namespace KriosMane\WalletExplorer\Cryptocurrencies;

class Litecoin extends Crypto {

    /**
     * 
     */
    protected $name = 'Litecoin';

    /**
     * 
     */
    protected $symbol = 'LTC';

    /**
     * 
     */
    protected $url = 'https://chain.so/api/v2/get_address_balance/LTC/%s';

    /**
     * 
     */
    protected $balance_response_path = 'data.confirmed_balance';


}



?>