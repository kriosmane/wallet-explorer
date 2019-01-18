<?php


namespace KriosMane\WalletExplorer\app\Cryptocurrencies;




class Zcash extends Crypto {

    /**
     * 
     */
    protected $name = 'Zcash';

    /**
     * 
     */
    protected $symbol = 'ZEC';

    /**
     * 
     */
    protected $url = 'https://api.zcha.in/v2/mainnet/accounts/%s';

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