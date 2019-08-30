<?php


namespace KriosMane\WalletExplorer\Cryptocurrencies;

class Ethereum extends Crypto {

    /**
     * 
     */
    protected $name = 'Ethereum';

    /**
     * 
     */
    protected $symbol = 'ETH';

    /**
     * 
     */
    protected $url = 'https://api.etherscan.io/api';

    /**
     * 
     */
    protected $address_in_url = false;

    /**
     * 
     */
    protected $params = array(

        'module'  => 'account',
        'action'  => 'balance',
        'tag'     => 'latest',

    );

    /**
     * 
     */
    public function make()
    {  
        $api_key = config('walletexplorer.keys.etherscan');

        $this->params['address'] = $this->wallet_address; 
        
        $this->params['apikey'] =  $api_key; 
    }

    /**
     * 
     */
    public function processResponse($response)
    {
        if($response['status'] == 0) {

            return false;

        }

        $received = ($response['result']);

        $decimals = 18;

        $shift = strlen($received) - $decimals;

        $received =  substr($received, 0, $shift).'.'.substr($received, $shift);

        $this->explorer_response->setBalance($received);

        return $this->explorer_response;
    }


}



?>