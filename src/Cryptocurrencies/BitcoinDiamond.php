<?php


namespace KriosMane\WalletExplorer\Cryptocurrencies;




class BitcoinDiamond extends Crypto {

    /**
     * 
     */
    protected $name = 'Bitcoin Diamond';

    /**
     * 
     */
    protected $symbol = 'BCD';

    /**
     * 
     */
    protected $url = 'http://20.184.13.116/v2/addr/%s';

    /**
     * 
     */
    protected $balance_response_path = 'data.balance';


}



?>