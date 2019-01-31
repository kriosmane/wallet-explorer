<?php

namespace KriosMane\WalletExplorer\Cryptocurrencies;

use KriosMane\WalletExplorer\WalletExplorer;
use KriosMane\WalletExplorer\WalletClient;

use KriosMane\WalletExplorer\Exceptions\WalletExplorerSDKException;

/**
 * 
 */
class CryptoBus {


    /**
     * @var Crypto[] Holds all cryptos.
     */
    protected $cryptos = [];

    /**
     * @var WalletExplorer
     */
    protected $wallet;

    /**
     * @var WalletClient
     */
    protected $client; 


    /**
     * Instantiate Crypto Bus.
     *
     * @param WalletExplorer $wallet
     *
     * @throws TelegramSDKException
     */
    public function __construct(WalletExplorer $wallet, WalletClient $client)
    {
        $this->wallet = $wallet;

        $this->client = $client;
    }

    /**
     * Add a list of cryptos.
     *
     * @param array $cryptos
     *
     * @return CryptoBus
     */
    public function addCryptos(array $cryptos)
    {
        foreach ($cryptos as $crypto) {

            $this->addCrypto($crypto);
        }

        return $this;
    }


    /**
     * Add a crypto to the cryptos list.
     *
     * @param CryptoInterface|string $command Either an object or full path to the command class.
     *
     * @throws WalletExplorerSDKException
     *
     * @return CryptoBus
     */
    public function addCrypto($crypto)
    {
        if (!is_object($crypto)) {

            if (!class_exists($crypto)) {

                throw new WalletExplorerSDKException(
                    sprintf(
                        'Crypto class "%s" not found! Please make sure the class exists.',
                        $crypto
                    )
                );
            }

            if ($this->wallet->hasContainer()) {

                $crypto = $this->buildDependencyInjectedCommand($crypto);

            } else {

                $crypto = new $crypto($this->client);

            }
        }

        if ($crypto instanceof CryptoInterface) {

            /*
             * At this stage we definitely have a proper crypto to use.
             *
             * @var Command $command
             */
            $this->cryptos[$crypto->getSymbol()] = $crypto;

            return $this;
        }

        throw new WalletExplorerSDKException(

            sprintf(
                'Crypto class "%s" should be an instance of "KriosMane\WalletExplorer\Crypto\CryptoInterface"',
                get_class($crypto)
            )
        );   
    }

    /**
     * Returns the list of cryptos.
     *
     * @return array
     */
    public function getCryptos()
    {
        return $this->cryptos;
    }

    /**
     * 
     */
    public function getClient()
    {
        return $this->client;
    }

    /**
     * Handles Crypto Wallet EXplorer.
     *
     * @param $crypto_symbol
     * @param $update
     *
     * @throws TelegramSDKException
     *
     * @return boolean|object
     */
    public function handler($crypto_symbol, $address)
    {
        if(!array_key_exists($crypto_symbol, $this->cryptos)){
            
            return false;
        }

        $crypto = $this->cryptos[$crypto_symbol];

        return $crypto->handle($address);

    }




    
}

?>