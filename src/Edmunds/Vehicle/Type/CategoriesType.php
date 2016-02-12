<?php
/**
 * Created by IntelliJ IDEA.
 * User: tudor
 * Date: 1/30/16
 * Time: 5:42 PM
 */

namespace Edmunds\Vehicle\Type;

use JMS\Serializer\Annotation\Type;

class CategoriesType
{
    /**
     * @var string
     * @Type("string")
     */
    protected $market;

    /**
     * @var string
     * @Type("string")
     */
    protected $EPAClass;

    /**
     * @var string
     * @Type("string")
     */
    protected $vehicleSize;

    /**
     * @var string
     * @Type("string")
     */
    protected $primaryBodyType;

    /**
     * @var string
     * @Type("string")
     */
    protected $vehicleStyle;

    /**
     * @var string
     * @Type("string")
     */
    protected $vehicleType;

    /**
     * @return string
     */
    public function getMarket()
    {
        return $this->market;
    }

    /**
     * @param string $market
     */
    public function setMarket($market)
    {
        $this->market = $market;
    }

    /**
     * @return string
     */
    public function getEPAClass()
    {
        return $this->EPAClass;
    }

    /**
     * @param string $EPAClass
     */
    public function setEPAClass($EPAClass)
    {
        $this->EPAClass = $EPAClass;
    }

    /**
     * @return string
     */
    public function getVehicleSize()
    {
        return $this->vehicleSize;
    }

    /**
     * @param string $vehicleSize
     */
    public function setVehicleSize($vehicleSize)
    {
        $this->vehicleSize = $vehicleSize;
    }

    /**
     * @return string
     */
    public function getPrimaryBodyType()
    {
        return $this->primaryBodyType;
    }

    /**
     * @param string $primaryBodyType
     */
    public function setPrimaryBodyType($primaryBodyType)
    {
        $this->primaryBodyType = $primaryBodyType;
    }

    /**
     * @return string
     */
    public function getVehicleStyle()
    {
        return $this->vehicleStyle;
    }

    /**
     * @param string $vehicleStyle
     */
    public function setVehicleStyle($vehicleStyle)
    {
        $this->vehicleStyle = $vehicleStyle;
    }

    /**
     * @return string
     */
    public function getVehicleType()
    {
        return $this->vehicleType;
    }

    /**
     * @param string $vehicleType
     */
    public function setVehicleType($vehicleType)
    {
        $this->vehicleType = $vehicleType;
    }

}