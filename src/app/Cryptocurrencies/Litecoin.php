<?php


namespace KriosMane\WalletExplorer\app\Cryptocurrencies;




class Litecoin extends Crypto {

    /**
     * 
     */
    protected $name = 'Litecoin';

    /**
     * 
     */
    protected $symbol = 'LTC';

    /**
     * 
     */
    protected $url = 'https://chain.so/api/v2/get_address_balance/LTC/%s';

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