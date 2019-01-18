<?php


namespace KriosMane\WalletExplorer\app\Cryptocurrencies;




class Dogecoin extends Crypto {

    /**
     * 
     */
    protected $name = 'Dogecoin';

    /**
     * 
     */
    protected $symbol = 'DOGE';

    /**
     * 
     */
    protected $url = 'https://chain.so/api/v2/get_address_balance/DOGE/%s';

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

        $this->explorer_response->setBalance($response['data']['confirmed_balance']);

        return $this->explorer_response;

    }


}



?>