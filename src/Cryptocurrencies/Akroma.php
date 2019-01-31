<?php


namespace KriosMane\WalletExplorer\Cryptocurrencies;

use Graze\GuzzleHttp\JsonRpc\Client;


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
    protected $url = 'https://remote.akroma.io';

    /**
     * {@inheritdoc}
     */
    public function handle($arguments)
    {
        
        $this->http_client = Client::factory($this->url, 
            
            [
                'verify' => $this->http_client->getVerify(),
                
                'debug'  => $this->http_client->getDebug()
            ]

        );

        
        $response = $this->http_client->send($this->http_client->request(rand(), 'eth_getBalance', [$arguments, 'latest']));

        $result = $response->getRpcResult();

        if (strpos($result, "0x") === 0) {

            $result = str_replace("0x", '', $result);
        }

        $result = hexdec ($result);

        $balance = $result/1000000000000000000;

        $this->explorer_response->setBalance($balance);

        return $this->explorer_response;

    }


}



?>