<?php


namespace KriosMane\WalletExplorer\Cryptocurrencies;




class BitcoinCash extends Crypto {

    /**
     * 
     */
    protected $name = 'Bitcoin Cash';

    /**
     * 
     */
    protected $symbol = 'BCH';

    /**
     * 
     */
    protected $url = 'https://www.blocktrail.com/BCC/json/blockchain/address/%s';

    /**
     * 
     */
    public function processResponse($response)
    {

        $this->explorer_response->setBalance($response['balance']['balance'] / 100000000 );

        return $this->explorer_response;
    }




}



?>