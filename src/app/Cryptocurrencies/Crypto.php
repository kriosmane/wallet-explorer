<?php

namespace KriosMane\WalletExplorer\app\Cryptocurrencies;
use KriosMane\WalletExplorer\app\ExplorerResponse;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Exception\ClientException;


abstract class Crypto implements CryptoInterface {

    /**
     * crypto's name
     */
    protected $name = '';

    /**
     * crypto's symbol
     */
    protected $symbol = '';

    /**
     * crypto's description
     */
    protected $description = '';

    /**
     * 
     */
    protected $url = '';

    /**
     * 
     */
    protected $http_client = '';

    /**
     * 
     */
    protected $crawler = '';

    /**
     * 
     */
    protected $explorer_response = null;

    /**
     * 
     */
    public function setName()
    {
        $this->name = $name;
    }

    /**
     * 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * 
     */
    public function setSymbol($symbol)
    {
        $this->symbol = $symbol;
    }

    /**
     * 
     */
    public function getSymbol()
    {
        return $this->symbol;
    }

    /**
     * 
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * 
     */
    public function setUrl($url)
    {
        $this->url = $url;
    }

    /**
     * 
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * 
     */
    public function setHttpClient($client)
    {
        $this->http_client = $client;
    }

    /**
     * 
     */
    public function getHttpClient()
    {
        return $this->http_client;
    }

    /**
     * 
     */
    public function setExplorerResponse($response)
    {
        $this->explore_response = $response;
    }

    /**
     * 
     */
    public function getExplorerResponse()
    {
        return $this->explore_response;
    }


    /**
     * 
     */
    public function __construct() {

        $this->http_client = new Client([

            'base_uri' => $this->url
        
        ]);
        
        $this->crawler = new \Goutte\Client();

        $this->explorer_response = new ExplorerResponse();

    }

    /**
     * 
     */
    public function make()
    {

    }

    /**
     * 
     */
    abstract public function handle($arguments);

    /**
     * 
     */
    public function call($address)
    {

        $this->explorer_response->setAddress($address);

        $endpoint = sprintf($this->url, $address);
        
        try{
            
            $request = $this->http_client->request('GET', $endpoint, [


            ]);
            
            return $request;
        
        }catch(RequestException $ex){

            return false;

        }catch (ConnectException $e) {
        
            return false;

        }catch (ClientException $e) {
        
            return false;

        }catch (\Exception $e) {

            return false;
        }
    }



}

?>