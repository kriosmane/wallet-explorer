<?php


namespace KriosMane\WalletExplorer\app\Cryptocurrencies;


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
    protected $balance_path = 'balance';


}



?>