<?php
/**
 * Created by Amine Hichour.
 * User: hichour
 * Date: 06/10/19
 * Time: 21:30
 */
namespace Mdm\MagentoApi\Model;

use Zend\Http\Client;



/**
 * Class Requester
 * @package Mdm\MagentoApi\Model
 */
class Requester
{
    protected $zendClient;

    /**
     * Requester constructor.
     * @param $zendClient
     */
    public function __construct(Client $zendClient)
    {
        $this->zendClient = $zendClient;
    }

    /**
     * @param $url
     * @param null $token
     * @return \Zend\Http\Response
     */
    public function  get ($url, $token = null){
        return $this->makeCall($url,'get',$token);
    }

    /**
     * @param $url
     * @param null $token
     * @return \Zend\Http\Response
     */
    public function  post ($url, $token = null){
        return $this->makeCall($url,'post',$token);
    }

    /**
     * @param $url
     * @param $method
     * @param $token
     * @return \Zend\Http\Response
     */
    private function makeCall($url, $method,$token){
        try
        {
            $this->zendClient->reset();
            $this->zendClient->setUri($url);
            $this->zendClient->setMethod($method);
            $this->zendClient->setHeaders([
                'Content-Type' => 'application/json',
                'Accept' => 'application/json',
                'Authorization' => 'Bearer'. $token,
            ]);
            $this->zendClient->send();
            $response = $this->zendClient->getResponse();
            return $response;
        }
        catch (\Zend\Http\Exception\RuntimeException $runtimeException)
        {
            echo $runtimeException->getMessage();
        }
    }
}
