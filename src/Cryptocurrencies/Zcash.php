<?php


namespace KriosMane\WalletExplorer\Cryptocurrencies;

class Zcash extends Crypto {

    /**
     * 
     */
    protected $name = 'Zcash';

    /**
     * 
     */
    protected $symbol = 'ZEC';

    /**
     * 
     */
    protected $url = 'https://api.zcha.in/v2/mainnet/accounts/%s';

    /**
     * 
     */
    protected $balance_response_path = 'balance';

}



?>