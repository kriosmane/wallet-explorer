<?php


namespace KriosMane\WalletExplorer\app\Cryptocurrencies;

class Ethereum extends Crypto {

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
    protected $url = 'https://api.etherscan.io/api?module=account&action=balance&address=%s&tag=latest&apikey=';

    /**
     * {@inheritdoc}
     */
    public function handle($arguments)
    {
        
        $api_key = config('walletexplorer.keys.etherscan');

        $this->url = $this->url.$api_key;

        $response = $this->call($arguments);

        if(!$response){

            return $response;

        }

        $response = json_decode($response->getBody()->getContents(), true);

        $received = ($response['result']);

        $decimals = 18;

        $shift = strlen($received) - $decimals;

        $received =  substr($received, 0, $shift).'.'.substr($received, $shift);

        $this->explorer_response->setBalance($received);

        return $this->explorer_response;

    }


}



?>