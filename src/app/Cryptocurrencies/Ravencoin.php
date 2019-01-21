<?php


namespace KriosMane\WalletExplorer\app\Cryptocurrencies;


class Ravencoin extends Crypto {

    /**
     * 
     */
    protected $name = 'Ravencoin';

    /**
     * 
     */
    protected $symbol = 'RVN';

    /**
     * 
     */
    protected $url = 'https://ravencoin.network/api/addr/%s/?noTxList=1';

    /**
     * 
     */
    protected $balance_response_path = 'balance';


}



?>