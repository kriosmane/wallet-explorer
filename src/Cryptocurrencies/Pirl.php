<?php


namespace KriosMane\WalletExplorer\Cryptocurrencies;


class Pirl extends Crypto {

    /**
     * 
     */
    protected $name = 'Pirl';

    /**
     * 
     */
    protected $symbol = 'PIRL';

    /**
     * 
     */
    protected $url = 'http://192.95.33.152/api';

    /**
     * 
     */
    protected $type = 'POST';

    /**
     * 
     */
    protected $address_in_url = false;

    /**
     * 
     */
    protected $params = array(

        'module' => 'account',
        'action' => 'balance',

    );

    /**
     * 
     */
    public function make()
    {  
       $this->params['address'] = $this->wallet_address; 
    }

    /**
     * 
     */
    public function processResponse($response)
    {
        $balance = $response['result'];

        $decimals = 18;

        $shift = intval(strlen($balance) - $decimals);

        $balance =  substr($balance, 0, -$decimals).'.'.substr($balance, $shift);

        $this->explorer_response->setBalance($balance);

        return $this->explorer_response;
    }


}



?>