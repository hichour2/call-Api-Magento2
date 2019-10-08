<?php
/**
 * Created by Amine Hichour.
 * User: hichour
 * Date: 06/10/19
 * Time: 20:55
 */

namespace Mdm\ConsumeApi\Model\Data;

use Magento\Framework\Model\AbstractModel;
use Mdm\ConsumeApi\Api\Data\ColorDataInterface;

class Color extends AbstractModel implements ColorDataInterface

{
    public function getId()
    {
        return $this->_getData(self::ID);
    }

    public function getName()
    {
        return $this->_getData(self::NAME);
    }
    public function getYear()
    {
        return $this->_getData(self::YEAR);
    }

    public function getColor()
    {
        return $this->_getData(self::COLOR);
    }

    public function getPantoneValue()
    {
        return $this->_getData(self::PANTONE_VALUE);
    }

    public function SetId($id)
    {
        return $this->setData(self::ID, $id);
    }

    public function setName($name)
    {
        return $this->setData(self::NAME, $name);
    }
    public function setYear($year)
    {
        return $this->setData(self::YEAR, $year);
    }

    public function setColor($color)
    {
        return $this->setData(self::COLOR, $color);
    }

    public function setPantoneValue($pantone_value)
    {
        return $this->setData(self::PANTONE_VALUE, $pantone_value);
    }
}