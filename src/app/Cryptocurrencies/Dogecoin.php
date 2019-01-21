<?php


namespace KriosMane\WalletExplorer\app\Cryptocurrencies;




class Dogecoin extends Crypto {

    /**
     * 
     */
    protected $name = 'Dogecoin';

    /**
     * 
     */
    protected $symbol = 'DOGE';

    /**
     * 
     */
    protected $url = 'https://chain.so/api/v2/get_address_balance/DOGE/%s';

    /**
     * 
     */
    protected $balance_path = 'data.confirmed_balance';



}



?>