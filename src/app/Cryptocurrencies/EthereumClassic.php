<?php


namespace KriosMane\WalletExplorer\app\Cryptocurrencies;

class EthereumClassic extends Crypto {

    /**
     * 
     */
    protected $name = 'Ethereum Classic';

    /**
     * 
     */
    protected $symbol = 'ETC';

    /**
     * 
     */
    protected $url = 'https://api.gastracker.io/addr/%s';

    /**
     * 
     */
    protected $balance_response_path = 'balance.ether';

}



?>