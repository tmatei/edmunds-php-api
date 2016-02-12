<?php
/**
 * Created by IntelliJ IDEA.
 * User: tudor
 * Date: 1/30/16
 * Time: 5:56 PM
 */

namespace Edmunds\Vehicle\Type;

use JMS\Serializer\Annotation\Type;

class StyleType
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
     * @var MakeType
     * @Type("Edmunds\Vehicle\Type\MakeType")
     */
    protected $make;

    /**
     * @var ModelType
     * @Type("Edmunds\Vehicle\Type\ModelType")
     */
    protected $model;

    /**
     * @var YearType
     * @Type("Edmunds\Vehicle\Type\YearType")
     */
    protected $year;

    /**
     * @var SubmodelType
     * @Type("Edmunds\Vehicle\Type\SubmodelType")
     */
    protected $submodel;

    /**
     * @var string
     * @Type("string")
     */
    protected $trim;

    /**
     * @var array
     * @Type("array")
     */
    protected $states;

    /**
     * @var EngineType
     * @Type("Edmunds\Vehicle\Type\EngineType")
     */
    protected $engine;

    /**
     * @var TransmissionType
     * @Type("Edmunds\Vehicle\Type\TransmissionType")
     */
    protected $transmission;

    /**
     * @var OptionCategoryType[]
     * @Type("array<Edmunds\Vehicle\Type\OptionCategoryType>")
     */
    protected $options;

    /**
     * @var OptionCategoryType[]
     * @Type("array<Edmunds\Vehicle\Type\OptionCategoryType>")
     */
    protected $colors;

    /**
     * @var string
     * @Type("string")
     */
    protected $drivenWheels;

    /**
     * @var string
     * @Type("string")
     */
    protected $numOfDoors;

    /**
     * @var array
     * @Type("array")
     */
    protected $squishVins;

    /**
     * @var CategoriesType
     * @Type("Edmunds\Vehicle\Type\CategoriesType")
     */
    protected $categories;

    /**
     * @var MpgType
     * @Type("Edmunds\Vehicle\Type\MpgType")
     */
    protected $MPG;

    /**
     * @var string
     * @Type("string")
     */
    protected $manufacturerCode;

    /**
     * @var PriceType
     * @Type("Edmunds\Vehicle\Type\PriceType")
     */
    protected $price;

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
     * @return SubmodelType
     */
    public function getSubmodel()
    {
        return $this->submodel;
    }

    /**
     * @param SubmodelType $submodel
     */
    public function setSubmodel($submodel)
    {
        $this->submodel = $submodel;
    }

    /**
     * @return string
     */
    public function getTrim()
    {
        return $this->trim;
    }

    /**
     * @param string $trim
     */
    public function setTrim($trim)
    {
        $this->trim = $trim;
    }

    /**
     * @return MakeType
     */
    public function getMake()
    {
        return $this->make;
    }

    /**
     * @param MakeType $make
     */
    public function setMake($make)
    {
        $this->make = $make;
    }

    /**
     * @return ModelType
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * @param ModelType $model
     */
    public function setModel($model)
    {
        $this->model = $model;
    }

    /**
     * @return YearType
     */
    public function getYear()
    {
        return $this->year;
    }

    /**
     * @param YearType $year
     */
    public function setYear($year)
    {
        $this->year = $year;
    }

    /**
     * @return array
     */
    public function getStates()
    {
        return $this->states;
    }

    /**
     * @param array $states
     */
    public function setStates($states)
    {
        $this->states = $states;
    }

    /**
     * @return EngineType
     */
    public function getEngine()
    {
        return $this->engine;
    }

    /**
     * @param EngineType $engine
     */
    public function setEngine($engine)
    {
        $this->engine = $engine;
    }

    /**
     * @return TransmissionType
     */
    public function getTransmission()
    {
        return $this->transmission;
    }

    /**
     * @param TransmissionType $transmission
     */
    public function setTransmission($transmission)
    {
        $this->transmission = $transmission;
    }

    /**
     * @return OptionCategoryType[]
     */
    public function getOptions()
    {
        return $this->options;
    }

    /**
     * @param OptionCategoryType[] $options
     */
    public function setOptions($options)
    {
        $this->options = $options;
    }

    /**
     * @return OptionCategoryType[]
     */
    public function getColors()
    {
        return $this->colors;
    }

    /**
     * @param OptionCategoryType[] $colors
     */
    public function setColors($colors)
    {
        $this->colors = $colors;
    }

    /**
     * @return string
     */
    public function getDrivenWheels()
    {
        return $this->drivenWheels;
    }

    /**
     * @param string $drivenWheels
     */
    public function setDrivenWheels($drivenWheels)
    {
        $this->drivenWheels = $drivenWheels;
    }

    /**
     * @return string
     */
    public function getNumOfDoors()
    {
        return $this->numOfDoors;
    }

    /**
     * @param string $numOfDoors
     */
    public function setNumOfDoors($numOfDoors)
    {
        $this->numOfDoors = $numOfDoors;
    }

    /**
     * @return array
     */
    public function getSquishVins()
    {
        return $this->squishVins;
    }

    /**
     * @param array $squishVins
     */
    public function setSquishVins($squishVins)
    {
        $this->squishVins = $squishVins;
    }

    /**
     * @return CategoriesType
     */
    public function getCategories()
    {
        return $this->categories;
    }

    /**
     * @param CategoriesType $categories
     */
    public function setCategories($categories)
    {
        $this->categories = $categories;
    }

    /**
     * @return MpgType
     */
    public function getMPG()
    {
        return $this->MPG;
    }

    /**
     * @param MpgType $MPG
     */
    public function setMPG($MPG)
    {
        $this->MPG = $MPG;
    }

    /**
     * @return string
     */
    public function getManufacturerCode()
    {
        return $this->manufacturerCode;
    }

    /**
     * @param string $manufacturerCode
     */
    public function setManufacturerCode($manufacturerCode)
    {
        $this->manufacturerCode = $manufacturerCode;
    }

    /**
     * @return PriceType
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param PriceType $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

}