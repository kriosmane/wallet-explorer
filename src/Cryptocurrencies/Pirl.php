<?php


namespace KriosMane\WalletExplorer\Cryptocurrencies;


class Pirl extends Crypto {

    /**
     * 
     */
    protected $name = 'Pirl';

    /**
     * 
     */
    protected $symbol = 'PIRL';

    /**
     * 
     */
    //protected $url = 'http://pirl.minerpool.net/api/accounts/%s';
    protected $url = 'http://192.95.33.152/api?module=account&action=balance&address=%s';


    /**
     * {@inheritdoc}
     */
    public function handle($arguments)
    {
        

        $params = [

            'module' => 'account',
            'action' => 'balance',
            'address' => $arguments
        ];

        $response = $this->http_client->request('GET', 'http://192.95.33.152/api', $params);

        if(!$response){

            return $response;

        }

        $response = json_decode($response->getBody()->getContents(), true);

        $balance = $response['result'];

        $decimals = 18;

        $shift = intval(strlen($balance) - $decimals);

        $balance =  substr($balance, 0, -$decimals).'.'.substr($balance, $shift);

        $this->explorer_response->setBalance($balance);

        return $this->explorer_response;

    }


}



?>