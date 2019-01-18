<?php


namespace KriosMane\WalletExplorer\app\Cryptocurrencies;


class Verge extends Crypto {

    /**
     * 
     */
    protected $name = 'Verge';

    /**
     * 
     */
    protected $symbol = 'XVG';

    /**
     * 
     */
    protected $url = 'https://verge-blockchain.info/ext/getaddress/%s';

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