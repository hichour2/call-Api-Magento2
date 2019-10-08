<?php
/**
 * Created by Amine Hichour.
 * User: hichour
 * Date: 06/10/19
 * Time: 21:58
 */

namespace Mdm\ConsumeApi\Model\Color;

use Mdm\MagentoApi\Model\Requester;

class Init
{
    /**
     * @var Requester
     */
    protected $requester;
    const API_URL = 'https://reqres.in/api/unknown';

    /**
     * Init constructor.
     * @param Requester $requester
     */
    public function __construct
    (
        Requester $requester
    )
    {
        $this->requester = $requester;
    }


    /**
     * @return \Zend\Http\Response
     */
    public  function  initDataFromApi()
    {
        $response = $this->requester->get(self::API_URL);
        if ($response->getStatusCode() == 200) {
            return $response->getBody();
        }
        throw new HttpException('Error : ' . $response->getStatusCode());
    }

}