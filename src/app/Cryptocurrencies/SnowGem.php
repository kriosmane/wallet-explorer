<?php


namespace KriosMane\WalletExplorer\app\Cryptocurrencies;




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
    protected $url = 'https://insight.snowgem.org/api/addr/%s';

    /**
     * 
     */
    protected $balance_path = 'balance';



}



?>