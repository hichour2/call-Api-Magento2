<?php
/**
 * Created by Amine Hichour.
 * User: hichour
 * Date: 06/10/19
 * Time: 20:46
 */

namespace Mdm\ConsumeApi\Api\Data;


Interface ColorDataInterface
{

    const ID = 'id';
    const NAME = 'name';
    const YEAR = 'year';
    const COLOR = 'color';
    const PANTONE_VALUE = 'pantone_value';

    /**
     * @return mixed
     */
    public function getId();

    /**
     * @return mixed
     */
    public function getName();

    /**
     * @return mixed
     */
    public function getYear();

    /**
     * @return mixed
     */
    public function getColor();

    /**
     * @return mixed
     */
    public function getPantoneValue();

    /**
     * @param $id
     * @return mixed
     */
    public function setId($id);

    /**
     * @param $name
     * @return mixed
     */
    public function setName($name);

    /**
     * @param $year
     * @return mixed
     */
    public function setYear($year);

    /**
     * @param $color
     * @return mixed
     */
    public function setColor($color);

    /**
     * @param $pantone_value
     * @return mixed
     */
    public function setPantoneValue($pantone_value);
}