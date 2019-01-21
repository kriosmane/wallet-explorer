<?php


namespace KriosMane\WalletExplorer\app\Cryptocurrencies;




class Decred extends Crypto {

    /**
     * 
     */
    protected $name = 'Decred';

    /**
     * 
     */
    protected $symbol = 'DCR';

    /**
     * 
     */
    protected $url = 'https://mainnet.decred.org/api/addr/%s/?noTxList=1';

    /**
     * 
     */
    protected $balance_response_path = 'balance';


}



?>