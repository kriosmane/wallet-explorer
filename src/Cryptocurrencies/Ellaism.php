<?php


namespace KriosMane\WalletExplorer\Cryptocurrencies;




class Ellaism extends Crypto {

    /**
     * 
     */
    protected $name = 'Ellaism';

    /**
     * 
     */
    protected $symbol = 'ELLA';

    /**
     * 
     */
    //protected $url = 'https://explorer.ellaism.org/account/%s';

    protected $url = 'https://limax-explorer.outdoordevs.com/web3relay';

    

    /**
     * {@inheritdoc}
     */
    public function handle($arguments)
    {


        $params = [
            'options' => array ('balance'),
            'addr' => $arguments
        ];

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
        
        /*
        $response = $this->call($arguments);

        if(!$response){

            return false;

        }

        preg_match("/Balance:<\/td><td>([0-9.]+)/", $response->getBody()->getContents(), $matches);

        $balance = isset($matches[1]) ? $matches[1] : 0;

        $this->explorer_response->setBalance($balance);

        return $this->explorer_response;

        */

    }


}



?>