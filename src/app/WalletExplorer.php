<?php

namespace KriosMane\WalletExplorer\app;

use Illuminate\Contracts\Container\Container;

use KriosMane\WalletExplorer\app\Cryptocurrencies\CryptoBus;
use KriosMane\WalletExplorer\app\Cryptocurrencies\CryptoInterface;

class WalletExplorer {

    /**
     * @var Container IoC Container
     */
    protected static $container = null;

    /**
     * 
     */
    protected $crypto_bus = null;


    /**
     * Returns SDK's Crypto Bus.
     *
     * @return CryptoBus
     */
    public function getCryptoBus()
    {
        if (is_null($this->crypto_bus )) {

            return $this->crypto_bus = new CryptoBus($this);
        }

        return $this->crypto_bus;
    }

    /**
     * Add Crytp to the Crypto Bus.
     *
     * @param CryptoInterface|string $crypto
     *
     * @return CryptoBus
     */
    public function addCrypto($crypto)
    {
        return $this->getCryptoBus()->addCrytpo($crypto);
    }

    /**
     * Add Crypto to the Crypto Bus.
     *
     * @param array $commands
     *
     * @return CryptoBus
     */
    public function addCryptos(array $cryptos)
    {
        return $this->getCryptoBus()->addCryptos($cryptos);
    }

    /**
     * Add Crypto List.
     *
     * @return array
     */
    public function getCryptos()
    {
        return $this->getCryptoBus()->getCryptos();
    }

    /**
     * Check if IoC Container has been set.
     *
     * @return boolean
     */
    public function hasContainer()
    {
        return self::$container !== null;
    }

    /**
     * @param string $symbol
     * 
     * @param string $address
     * 
     * @return 
     */
    public function getBalance($symbol, $address)
    {
        $explorer = $this->getCryptoBus()->handler($symbol, $address);

        if($explorer !== false){

            return $explorer->getBalance();

        }

        return false;
        
    }

}

?>