<?php


namespace KriosMane\WalletExplorer\Cryptocurrencies;

class Verge extends Crypto {

    /**
     * 
     */
    protected $name = 'Verge';

    /**
     * 
     */
    protected $symbol = 'XVG';

    /**
     * 
     */
    protected $url = 'https://verge-blockchain.info/ext/getaddress/%s';

    /**
     * 
     */
    protected $balance_response_path = 'balance';


}



?>