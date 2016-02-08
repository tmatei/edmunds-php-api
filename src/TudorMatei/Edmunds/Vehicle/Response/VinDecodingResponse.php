<?php
/**
 * Created by IntelliJ IDEA.
 * User: tudor
 * Date: 1/30/16
 * Time: 5:22 PM
 */

namespace TudorMatei\Edmunds\Vehicle\Response;

use TudorMatei\Edmunds\Vehicle\Type\CategoriesType;
use TudorMatei\Edmunds\Vehicle\Type\MakeType;
use TudorMatei\Edmunds\Vehicle\Type\ModelType;
use TudorMatei\Edmunds\Vehicle\Type\MpgType;
use TudorMatei\Edmunds\Vehicle\Type\PriceType;
use TudorMatei\Edmunds\Vehicle\Type\TransmissionType;
use TudorMatei\Edmunds\Vehicle\Type\ColorCategoryType;
use TudorMatei\Edmunds\Vehicle\Type\VinDecoding\EngineType;
use TudorMatei\Edmunds\Vehicle\Type\OptionCategoryType;
use TudorMatei\Edmunds\Vehicle\Type\YearType;
use JMS\Serializer\Annotation\Type;

class VinDecodingResponse
{
    /**
     * @var string
     * @Type("string")
     */
    private $vin;

    /**
     * @var string
     * @Type("string")
     */
    private $squishVin;

    /**
     * @var MakeType
     * @Type("TudorMatei\Edmunds\Vehicle\Type\MakeType")
     */
    private $make;

    /**
     * @var ModelType
     * @Type("TudorMatei\Edmunds\Vehicle\Type\ModelType")
     */
    private $model;

    /**
     * @var YearType[]
     * @Type("array<TudorMatei\Edmunds\Vehicle\Type\YearType>")
     */
    private $years;

    /**
     * @var EngineType
     * @Type("TudorMatei\Edmunds\Vehicle\Type\VinDecoding\EngineType")
     */
    private $engine;

    /**
     * @var TransmissionType
     * @Type("TudorMatei\Edmunds\Vehicle\Type\TransmissionType")
     */
    private $transmission;

    /**
     * @var string
     * @Type("string")
     */
    private $drivenWheels;

    /**
     * @var int
     * @Type("integer")
     */
    private $numOfDoors;

    /**
     * @var OptionCategoryType[]
     * @Type("array<TudorMatei\Edmunds\Vehicle\Type\OptionCategoryType>")
     */
    private $options;

    /**
     * @var ColorCategoryType[]
     * @Type("array<TudorMatei\Edmunds\Vehicle\Type\ColorCategoryType>")
     */
    private $colors;

    /**
     * @var array
     * @Type("array")
     */
    private $equipment;

    /**
     * @var string
     * @Type("string")
     */
    private $manufacturer;

    /**
     * @var string
     * @Type("string")
     */
    private $manufacturerCode;

    /**
     * @var string
     * @Type("string")
     */
    private $matchingType;

    /**
     * @var MpgType
     * @Type("TudorMatei\Edmunds\Vehicle\Type\MpgType")
     */
    private $MPG;

    /**
     * @var PriceType
     * @Type("TudorMatei\Edmunds\Vehicle\Type\PriceType")
     */
    private $price;

    /**
     * @var CategoriesType
     * @Type("TudorMatei\Edmunds\Vehicle\Type\CategoriesType")
     */
    private $categories;

    /**
     * @return string
     */
    public function getVin()
    {
        return $this->vin;
    }

    /**
     * @param string $vin
     */
    public function setVin($vin)
    {
        $this->vin = $vin;
    }

    /**
     * @return string
     */
    public function getSquishVin()
    {
        return $this->squishVin;
    }

    /**
     * @param string $squishVin
     */
    public function setSquishVin($squishVin)
    {
        $this->squishVin = $squishVin;
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
     * @return YearType[]
     */
    public function getYears()
    {
        return $this->years;
    }

    /**
     * @param YearType[] $years
     */
    public function setYears($years)
    {
        $this->years = $years;
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
     * @return int
     */
    public function getNumOfDoors()
    {
        return $this->numOfDoors;
    }

    /**
     * @param int $numOfDoors
     */
    public function setNumOfDoors($numOfDoors)
    {
        $this->numOfDoors = $numOfDoors;
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
     * @return ColorCategoryType[]
     */
    public function getColors()
    {
        return $this->colors;
    }

    /**
     * @param ColorCategoryType[] $colors
     */
    public function setColors($colors)
    {
        $this->colors = $colors;
    }

    /**
     * @return array
     */
    public function getEquipment()
    {
        return $this->equipment;
    }

    /**
     * @param array $equipment
     */
    public function setEquipment($equipment)
    {
        $this->equipment = $equipment;
    }

    /**
     * @return string
     */
    public function getManufacturer()
    {
        return $this->manufacturer;
    }

    /**
     * @param string $manufacturer
     */
    public function setManufacturer($manufacturer)
    {
        $this->manufacturer = $manufacturer;
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
     * @return string
     */
    public function getMatchingType()
    {
        return $this->matchingType;
    }

    /**
     * @param string $matchingType
     */
    public function setMatchingType($matchingType)
    {
        $this->matchingType = $matchingType;
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

}
