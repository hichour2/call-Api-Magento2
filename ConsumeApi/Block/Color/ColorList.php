<?php
/**
 * Created by Amine Hichour.
 * User: hichour
 * Date: 06/10/19
 * Time: 21:12
 */

namespace Mdm\ConsumeApi\Block\Color;

use Magento\Framework\View\Element\Template;
use Magento\Framework\View\Element\Template\Context;
use Mdm\ConsumeApi\Api\ColorListInterface;

class ColorList extends  Template
{
    /**
     * @var ColorListInterface
     */
    protected $color_list;

    /**
     * ColorList constructor.
     * @param Context $context
     * @param ColorListInterface $color_list
     * @param array $data
     */
    public function __construct
    (
        Context $context,
        ColorListInterface $color_list,
        array  $data = []

    )
    {
        $this->color_list = $color_list;
        parent::__construct($context, $data);
    }

    /**
     * @return array
     */
    public  function  getColorList() : array
    {
        $result =  $this->color_list->getColorList();
        return $result ?? [];
    }

}