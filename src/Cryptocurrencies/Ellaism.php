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
    protected $url = 'https://limax-explorer.outdoordevs.com/web3relay';

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