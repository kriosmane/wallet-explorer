<?php


namespace KriosMane\WalletExplorer\app\Cryptocurrencies;




class BitcoinGold extends Crypto {

    /**
     * 
     */
    protected $name = 'Bitcoin Gold';

    /**
     * 
     */
    protected $symbol = 'BTG';

    /**
     * 
     */
    protected $url = 'https://btgexplorer.com/api/addr/%s/?noTxList=1';

    /**
     * 
     */
    protected $balance_response_path = 'balance';


}



?>