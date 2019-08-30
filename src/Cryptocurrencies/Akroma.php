<?php


namespace KriosMane\WalletExplorer\Cryptocurrencies;

use Exception;
use Graze\GuzzleHttp\JsonRpc\Client;
use GuzzleHttp\Exception\ConnectException;


class Akroma extends Crypto {

    /**
     * 
     */
    protected $name = 'Akroma';

    /**
     * 
     */
    protected $symbol = 'AKA';

    /**
     * 
     */
    protected $url = 'https://blocks.akroma.wattpool.net/web3relay';
    

    /**
     * {@inheritdoc}
     */
    public function handle($arguments)
    {
        
        $params = [
            'options' => array ('balance'),
            'addr' => $arguments
        ];

        try {
            
            $response = $this->http_client->request('POST', $this->url, $params);

            if(!$response){

                return $response;

            }

            $response = json_decode($response->getBody()->getContents(), true);

            if(isset($response['balance']))
            {
                $this->explorer_response->setBalance($response['balance']);

                return $this->explorer_response;
            }

        } catch (Exception $e) {
            
            return false;

        }

        
        

    }


}



?>