<?php


namespace KriosMane\WalletExplorer\Cryptocurrencies;


class SnowGem extends Crypto {

    /**
     * 
     */
    protected $name = 'SnowGem';

    /**
     * 
     */
    protected $symbol = 'XSG';

    /**
     * 
     */
    protected $url = 'https://explorer.snowgem.org/api/addr/%s/?noTxList=1';

    /**
     * 
     */
    protected $balance_response_path = 'balance';



}



?>