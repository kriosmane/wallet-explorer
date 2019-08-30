<?php


namespace KriosMane\WalletExplorer\Cryptocurrencies;

use Exception;
use Graze\GuzzleHttp\JsonRpc\Client;
use GuzzleHttp\Exception\ConnectException;


class Akroma extends Crypto {

    /**
     * 
     */
    protected $name = 'Akroma';

    /**
     * 
     */
    protected $symbol = 'AKA';

    /**
     * 
     */
    protected $url = 'https://blocks.akroma.wattpool.net/web3relay';

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

        'options' => array('balance')

    );

    /**
     * 
     */
    protected $balance_response_path = 'balance';

    /**
     * 
     */
    public function make()
    {  
       $this->params['addr'] = $this->wallet_address; 
    }


}



?>