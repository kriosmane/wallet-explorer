<?php

namespace KriosMane\WalletExplorer\app;


class ExplorerResponse {

    /**
     * 
     */
    protected $address = '';

    /**
     * 
     */
    protected $balance = 0;

    /**
     * 
     */
    public function setAddress($address)
    {
        $this->address = $address;
    }

    /**
     * 
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * 
     */
    public function setBalance($balance)
    {
        $this->balance = $balance;
    }

    /**
     * 
     */
    public function getBalance()
    {
        return $this->balance;
    }

    



}


?>