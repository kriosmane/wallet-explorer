<?php


namespace KriosMane\WalletExplorer\app\Cryptocurrencies;




class BitcoinPrivate extends Crypto {

    /**
     * 
     */
    protected $name = 'Zcash';

    /**
     * 
     */
    protected $symbol = 'BTCP';

    /**
     * 
     */
    protected $url = 'https://explorer.btcprivate.org/api/addr/%s/?noTxList=1';

    /**
     * 
     */
    protected $balance_response_path = 'balance';


}



?>