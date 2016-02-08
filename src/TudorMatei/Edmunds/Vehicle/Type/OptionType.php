<?php
/**
 * Created by IntelliJ IDEA.
 * User: tudor
 * Date: 1/30/16
 * Time: 5:46 PM
 */

namespace TudorMatei\Edmunds\Vehicle\Type;

use JMS\Serializer\Annotation\Type;


class OptionType
{
    /**
     * @var int
     * @Type("integer")
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
    protected $description;

    /**
     * @return int
     * @Type("integer")
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
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
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }
}
