<?php


namespace KriosMane\WalletExplorer\Cryptocurrencies;


class DigiByte extends Crypto {

    /**
     * 
     */
    protected $name = 'DigiByte';

    /**
     * 
     */
    protected $symbol = 'DGB';

    /**
     * 
     */
    protected $url = 'https://digiexplorer.info/address/%s';

    /**
     * 
     */
    protected $balance_response_path = 'balance';


}



?>