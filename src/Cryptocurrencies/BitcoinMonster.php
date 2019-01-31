<?php


namespace KriosMane\WalletExplorer\Cryptocurrencies;




class BitcoinMonster extends Crypto {

    /**
     * 
     */
    protected $name = 'Bitcoin Monster';

    /**
     * 
     */
    protected $symbol = 'MON';

    /**
     * 
     */
    protected $url = 'https://xmon.blockxplorer.info/address/%s';

    /**
     * {@inheritdoc}
     */
    public function handle($arguments)
    {
    
        $response = $this->http_client->getCrawler()->request('GET', sprintf($this->url, $arguments), 
            [
                'verify' => $this->http_client->getVerify(),
                
                'debug'  => $this->http_client->getDebug()
            ]);

        /**
         * index 0 TOTAL SENT
         * index 1 TOTAL RECEIVED
         * index 2 BALANCE
         */
        $table = $response->filter('.summary-table')->filter('td')->each(function ($td,  $i) {

            return trim($td->text());
            
        });

        if(isset($table[2])){

            $this->explorer_response->setBalance($table[2]);

            return $this->explorer_response;
        }

        return false;
    }


}



?>