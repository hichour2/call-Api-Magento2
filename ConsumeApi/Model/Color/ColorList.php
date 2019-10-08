<?php
/**
 * Created by Amine Hichour.
 * User: hichour
 * Date: 06/10/19
 * Time: 20:25
 */

namespace Mdm\ConsumeApi\Model\Color;

use Mdm\ConsumeApi\Api\ColorListInterface;
use Mdm\ConsumeApi\Api\Data\ColorDataInterfaceFactory;

class ColorList implements ColorListInterface
{
    /**
     * @var Init
     */
    protected $helper;
    /**
     * @var ColorDataInterfaceFactory
     */
    protected $colorFactory;

    /**
     * ColorList constructor.
     * @param Init $helper
     * @param ColorDataInterfaceFactory $colorFactory
     */
    public function __construct
    (
        Init $helper,
        ColorDataInterfaceFactory $colorFactory

    )
    {
        $this->helper = $helper;
        $this->colorFactory = $colorFactory;
    }

    /**
     * @return array|mixed
     */
    public function getColorList(){
        return $this->InitApiData();
    }

    /**
     * @return array
     */
    private function  decodeColors():array
    {
        $jsonColor = $this->helper->initDataFromApi();
        $result = json_decode($jsonColor, true);
        return $result['data'] ?? [];
    }

    /**
     * @return array
     */
    private  function InitApiData() :array
    {
        $color_list = [];
        $items = $this->decodeColors();

        foreach ($items as ['id' => $id, 'name' => $name, 'year' => $year, 'color' => $color_value, 'pantone_value' => $patone_value] )
        {
            $color = $this->colorFactory->create();
            $color->setId($id);
            $color->setName($name);
            $color->setYear($year);
            $color->setColor($color_value);
            $color->setPantoneValue($patone_value);
            $color_list [] = $color;
        }

        return $color_list;
    }

}