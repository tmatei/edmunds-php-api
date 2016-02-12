<?php
/**
 * Created by IntelliJ IDEA.
 * User: tudor
 * Date: 1/30/16
 * Time: 5:46 PM
 */

namespace Edmunds\Vehicle\Type;

use JMS\Serializer\Annotation\Type;

class ColorOptionType
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
    protected $manufactureOptionName;

    /**
     * @var string
     * @Type("string")
     */
    protected $manufactureOptionCode;

    /**
     * @var array
     * @Type("array")
     */
    protected $colorChips;

    /**
     * @var array
     * @Type("array")
     */
    protected $fabricTypes;

    /**
     * @var string
     * @Type("string")
     */
    protected $category;

    /**
     * @var string
     * @Type("string")
     */
    protected $attributes;

    /**
     * @return int
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
    public function getManufactureOptionName()
    {
        return $this->manufactureOptionName;
    }

    /**
     * @param string $manufactureOptionName
     */
    public function setManufactureOptionName($manufactureOptionName)
    {
        $this->manufactureOptionName = $manufactureOptionName;
    }

    /**
     * @return string
     */
    public function getManufactureOptionCode()
    {
        return $this->manufactureOptionCode;
    }

    /**
     * @param string $manufactureOptionCode
     */
    public function setManufactureOptionCode($manufactureOptionCode)
    {
        $this->manufactureOptionCode = $manufactureOptionCode;
    }

    /**
     * @return array
     */
    public function getColorChips()
    {
        return $this->colorChips;
    }

    /**
     * @param array $colorChips
     */
    public function setColorChips($colorChips)
    {
        $this->colorChips = $colorChips;
    }

    /**
     * @return array
     */
    public function getFabricTypes()
    {
        return $this->fabricTypes;
    }

    /**
     * @param array $fabricTypes
     */
    public function setFabricTypes($fabricTypes)
    {
        $this->fabricTypes = $fabricTypes;
    }

    /**
     * @return string
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * @param string $category
     */
    public function setCategory($category)
    {
        $this->category = $category;
    }

    /**
     * @return string
     */
    public function getAttributes()
    {
        return $this->attributes;
    }

    /**
     * @param string $attributes
     */
    public function setAttributes($attributes)
    {
        $this->attributes = $attributes;
    }

}
