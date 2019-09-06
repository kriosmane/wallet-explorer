<?php


namespace KriosMane\WalletExplorer\Cryptocurrencies;

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
    protected $url = 'https://etcblockexplorer.com/web3relay';

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