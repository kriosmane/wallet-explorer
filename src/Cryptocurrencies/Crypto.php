<?php

namespace KriosMane\WalletExplorer\Cryptocurrencies;

use KriosMane\WalletExplorer\ExplorerResponse;
use KriosMane\WalletExplorer\WalletClient;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Exception\ClientException;


abstract class Crypto implements CryptoInterface {

    /**
     * crypto's name
     * @var string
     */
    protected $name = '';

    /**
     * crypto's symbol
     * @var string
     */
    protected $symbol = '';

    /**
     * crypto's description
     * @var string
     */
    protected $description = '';

    /**
     * Explorer's url
     * @var string
     */
    protected $url = '';

    /**
     * @var KriosMane\WalletExplorer\WalletClient
     */
    protected $http_client = '';

    /**
     * @var KriosMane\WalletExplorer\ExplorerResponse
     */
    protected $explorer_response = null;

    /**
     * Path where to get balance
     * @var string 
     */
    protected $balance_response_path = '';

    /**
     * Describes the SSL certificate verification behavior of a request
     * @var booleam
     */
    protected $verify = false;

    /**
     * Set coin's name
     * @param string $name
     * @return void
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * Get coin's name
     * @return string $name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set coin's symbol
     * @param string $symbol
     * @return void
     */
    public function setSymbol($symbol)
    {
        $this->symbol = $symbol;
    }

    /**
     * Get coin's symbol
     * @return string symbol
     */
    public function getSymbol()
    {
        return $this->symbol;
    }

    /**
     * Set coin's description 
     * @param string $description
     * @return void
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * Get coin's description
     * @return string $description
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set coin's explorer url
     * @param string $url
     * @return void
     */
    public function setUrl($url)
    {
        $this->url = $url;
    }

    /**
     * Get coin's explorer url
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set http client object
     * @param GuzzleHttp\Client $client
     * @return void
     */
    public function setHttpClient($client)
    {
        $this->http_client = $client;
    }

    /**
     * Get http client object
     * @return GuzzleHttp\Client
     */
    public function getHttpClient()
    {
        return $this->http_client;
    }

    /**
     * Set explorer response object
     * @param KriosMane\WalletExplorer\ExplorerResponse $response
     * @return void
     */
    public function setExplorerResponse($response)
    {
        $this->explore_response = $response;
    }

    /**
     * Get explorer response object
     * @return KriosMane\WalletExplorer\ExplorerResponse
     */
    public function getExplorerResponse()
    {
        return $this->explore_response;
    }


    /**
     * 
     */
    public function __construct(WalletClient $wallet_client) {

        /**
         * init http client
        */
        $this->http_client = $wallet_client;

        /**
         * init explorer response
         */
        $this->explorer_response = new ExplorerResponse();

    }

    /**
     * 
     */
    public function make() { }

    /**
     *  Method ovveridable by single crypto class
     */
    public function handle($address)
    {

        $response = $this->call($address);
        
        if(!$response){

            return $response;

        }

        $response = json_decode($response->getBody()->getContents(), true);

        /**
         * look for and set wallet balance
         */
        if(array_has($response, $this->balance_response_path)){

            $this->explorer_response->setBalance(array_get($response, $this->balance_response_path));

        }
        
        return $this->explorer_response;
    }

    /**
     * Call coin's explorer web service
     * @param string $address
     * @param array $params
     * @param string $type GET|POST
     * 
     * @return boolean|response
     */
    public function call($address, $params = [], $type = 'GET')
    {

        $this->explorer_response->setAddress($address);

        $endpoint = sprintf($this->url, $address);
        
        try{
            
            $request = $this->http_client->request($type, $endpoint, $params);
            
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