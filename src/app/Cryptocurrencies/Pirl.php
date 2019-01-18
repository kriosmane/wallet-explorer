<?php


namespace KriosMane\WalletExplorer\app\Cryptocurrencies;




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
    protected $url = 'http://pirl.minerpool.net/api/accounts/%s';

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


        $balance = $response['stats']['paid'];

        $decimals = 9;

        $shift = intval(strlen($balance) - $decimals);

        $balance =  substr($balance, 0, -$decimals).'.'.substr($balance, $shift);

        $this->explorer_response->setBalance($balance);

        return $this->explorer_response;

    }


}



?>