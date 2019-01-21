<?php


namespace KriosMane\WalletExplorer\app\Cryptocurrencies;




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
    protected $balance_path = 'balance';

}



?>