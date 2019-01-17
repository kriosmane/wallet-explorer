<?php


namespace KriosMane\WalletExplorer\app\Cryptocurrencies;

class EthereumClassic extends Crypto {

    /**
     * 
     */
    protected $name = 'Ethereum';

    /**
     * 
     */
    protected $symbol = 'ETH';

    /**
     * 
     */
    protected $url = 'https://api.gastracker.io/addr/%s';

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

        $this->explorer_response->setBalance($response['balance']['ether']);

        return $this->explorer_response;

    }


}



?>