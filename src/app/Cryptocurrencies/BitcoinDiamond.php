<?php


namespace KriosMane\WalletExplorer\app\Cryptocurrencies;




class BitcoinDiamond extends Crypto {

    /**
     * 
     */
    protected $name = 'Bitcoin Diamond';

    /**
     * 
     */
    protected $symbol = 'BCD';

    /**
     * 
     */
    protected $url = 'http://20.184.13.116/v2/addr/%s';

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

        $this->explorer_response->setBalance($response['data']['balance']);

        return $this->explorer_response;

    }


}



?>