<?php
/**
 * Created by IntelliJ IDEA.
 * User: tudor
 * Date: 1/30/16
 * Time: 5:46 PM
 */

namespace TudorMatei\Edmunds\Vehicle\Type\VinDecoding;

use JMS\Serializer\Annotation\Type;

class EngineType extends \TudorMatei\Edmunds\Vehicle\Type\EngineType
{
    /**
     * @var string
     * @Type("string")
     */
    protected $equipmentType;

    /**
     * @var string
     * @Type("string")
     */
    protected $availability;

    /**
     * @var RpmType
     * @Type("TudorMatei\Edmunds\Vehicle\Type\VinDecoding\RpmType")
     */
    protected $rpm;

    /**
     * @var ValveType
     * @Type("TudorMatei\Edmunds\Vehicle\Type\VinDecoding\ValveType")
     */
    protected $valve;

    /**
     * @return string
     */
    public function getAvailability()
    {
        return $this->availability;
    }

    /**
     * @param string $availability
     */
    public function setAvailability($availability)
    {
        $this->availability = $availability;
    }

    /**
     * @return string
     */
    public function getEquipmentType()
    {
        return $this->equipmentType;
    }

    /**
     * @param string $equipmentType
     */
    public function setEquipmentType($equipmentType)
    {
        $this->equipmentType = $equipmentType;
    }

    /**
     * @return RpmType
     */
    public function getRpm()
    {
        return $this->rpm;
    }

    /**
     * @param RpmType $rpm
     */
    public function setRpm($rpm)
    {
        $this->rpm = $rpm;
    }

    /**
     * @return ValveType
     */
    public function getValve()
    {
        return $this->valve;
    }

    /**
     * @param ValveType $valve
     */
    public function setValve($valve)
    {
        $this->valve = $valve;
    }

}
