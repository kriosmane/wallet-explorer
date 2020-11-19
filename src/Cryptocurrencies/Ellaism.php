<?php

namespace KriosMane\WalletExplorer\Cryptocurrencies;

use Exception;

class Ellaism extends Crypto {

    /**
     * 
     */
    protected $name = 'Ellaism';

    /**
     * 
     */
    protected $symbol = 'ELLA';

    /**
     * 
     */
    protected $url = 'https://explorer.ellaism.io/api/address/%s';

    /**
     * 
     */
    protected $balance_response_path = 'balance';


}



?>
