<?php


namespace KriosMane\WalletExplorer\Cryptocurrencies;

use Exception;

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