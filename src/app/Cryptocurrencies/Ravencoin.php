<?php


namespace KriosMane\WalletExplorer\app\Cryptocurrencies;




class Ravencoin extends Crypto {

    /**
     * 
     */
    protected $name = 'Ravencoin';

    /**
     * 
     */
    protected $symbol = 'RVN';

    /**
     * 
     */
    protected $url = 'https://ravencoin.network/api/addr/%s/?noTxList=1';

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