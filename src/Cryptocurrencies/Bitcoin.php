<?php


namespace KriosMane\WalletExplorer\Cryptocurrencies;


class Bitcoin extends Crypto {

    /**
     * 
     */
    protected $name = 'Bitcoin';

    /**
     * 
     */
    protected $symbol = 'BTC';

    /**
     * 
     */
    protected $url = 'https://insight.bitpay.com/api/addr/%s/?noTxList=1';

    /**
     * 
     */
    protected $balance_response_path = 'balance';


}



?>