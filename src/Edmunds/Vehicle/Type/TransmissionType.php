<?php
/**
 * Created by IntelliJ IDEA.
 * User: tudor
 * Date: 1/30/16
 * Time: 5:46 PM
 */

namespace Edmunds\Vehicle\Type;

use JMS\Serializer\Annotation\Type;

class TransmissionType
{
    /**
     * @var string
     * @Type("string")
     */
    protected $id;

    /**
     * @var string
     * @Type("string")
     */
    protected $name;

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
     * @var string
     * @Type("string")
     */
    protected $automaticType;

    /**
     * @var string
     * @Type("string")
     */
    protected $transmissionType;

    /**
     * @var string
     * @Type("string")
     */
    protected $numberOfSpeeds;

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
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
    public function getAutomaticType()
    {
        return $this->automaticType;
    }

    /**
     * @param string $automaticType
     */
    public function setAutomaticType($automaticType)
    {
        $this->automaticType = $automaticType;
    }

    /**
     * @return string
     */
    public function getTransmissionType()
    {
        return $this->transmissionType;
    }

    /**
     * @param string $transmissionType
     */
    public function setTransmissionType($transmissionType)
    {
        $this->transmissionType = $transmissionType;
    }

    /**
     * @return string
     */
    public function getNumberOfSpeeds()
    {
        return $this->numberOfSpeeds;
    }

    /**
     * @param string $numberOfSpeeds
     */
    public function setNumberOfSpeeds($numberOfSpeeds)
    {
        $this->numberOfSpeeds = $numberOfSpeeds;
    }

}
