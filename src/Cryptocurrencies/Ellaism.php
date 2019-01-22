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
    protected $url = 'https://explorer.ellaism.org/account/%s';

    /**
     * {@inheritdoc}
     */
    public function handle($arguments)
    {
        
        $response = $this->call($arguments);

        if(!$response){

            return false;

        }

        preg_match("/Balance:<\/td><td>([0-9.]+)/", $response->getBody()->getContents(), $matches);

        $balance = isset($matches[1]) ? $matches[1] : 0;

        $this->explorer_response->setBalance($balance);

        return $this->explorer_response;

    }


}



?>