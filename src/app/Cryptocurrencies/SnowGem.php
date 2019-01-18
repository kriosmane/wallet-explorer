<?php


namespace KriosMane\WalletExplorer\app\Cryptocurrencies;




class SnowGem extends Crypto {

    /**
     * 
     */
    protected $name = 'SnowGem';

    /**
     * 
     */
    protected $symbol = 'XSG';

    /**
     * 
     */
    protected $url = 'https://insight.snowgem.org/api/addr/%s';

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

        $this->explorer_response->setBalance($response['balance']);

        return $this->explorer_response;

    }


}



?>