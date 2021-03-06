<?php


namespace KriosMane\WalletExplorer\Cryptocurrencies;




class Dash extends Crypto {

    /**
     * 
     */
    protected $name = 'Dash';

    /**
     * 
     */
    protected $symbol = 'DASH';

    /**
     * 
     */
    protected $url = 'https://chain.so/api/v2/get_address_balance/DASH/%s';

    /**
     * 
     */
    protected $balance_response_path = 'data.confirmed_balance';


}



?>