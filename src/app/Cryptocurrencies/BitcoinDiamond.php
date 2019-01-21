<?php


namespace KriosMane\WalletExplorer\app\Cryptocurrencies;




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
    protected $balance_path = 'data.balance';


}



?>