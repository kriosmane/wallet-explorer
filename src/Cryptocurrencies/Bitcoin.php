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
    protected $url = 'https://api-r.bitcoinchain.com/v1/address/%s';

    /**
     * 
     */
    protected $balance_response_path = 'balance';


    /**
     * {@inheritdoc}
     */
    public function handle($arguments)
    {
        
        $response = $this->call($arguments);


        if(!$response){

            return false;

        }

        $response = json_decode($response->getBody()->getContents(), true);
        
        if(isset($response[0]['balance']))
        {
            $this->explorer_response->setBalance($response[0]['balance']);

            return $this->explorer_response;
        }

        return false;

    }



}



?>