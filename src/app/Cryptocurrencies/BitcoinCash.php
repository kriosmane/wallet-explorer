<?php


namespace KriosMane\WalletExplorer\app\Cryptocurrencies;




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
     * {@inheritdoc}
     */
    public function handle($arguments)
    {
        

        $response = $this->call($arguments);

        if(!$response){

            return $response;

        }

        $response = json_decode($response->getBody()->getContents(), true);

        $this->explorer_response->setBalance($response['balance']['balance'] / 100000000 );

        return $this->explorer_response;

    }


}



?>