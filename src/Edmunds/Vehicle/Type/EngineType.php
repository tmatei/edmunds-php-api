<?php
/**
 * Created by IntelliJ IDEA.
 * User: tudor
 * Date: 1/30/16
 * Time: 5:46 PM
 */

namespace Edmunds\Vehicle\Type;

use JMS\Serializer\Annotation\Type;

class EngineType
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
     * @var float
     * @Type("float")
     */
    protected $compressionRatio;

    /**
     * @var int
     * @Type("integer")
     */
    protected $cylinder;

    /**
     * @var float
     * @Type("float")
     */
    protected $size;

    /**
     * @var int
     * @Type("integer")
     */
    protected $displacement;

    /**
     * @var string
     * @Type("string")
     */
    protected $configuration;

    /**
     * @var string
     * @Type("string")
     */
    protected $fuelType;

    /**
     * @var int
     * @Type("integer")
     */
    protected $horsepower;

    /**
     * @var int
     * @Type("integer")
     */
    protected $torque;

    /**
     * @var int
     * @Type("integer")
     */
    protected $totalValves;

    /**
     * @var string
     * @Type("string")
     */
    protected $manufacturerEngineCode;

    /**
     * @var string
     * @Type("string")
     */
    protected $type;

    /**
     * @var string
     * @Type("string")
     */
    protected $code;

    /**
     * @var string
     * @Type("string")
     */
    protected $compressorType;

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
     * @return float
     */
    public function getCompressionRatio()
    {
        return $this->compressionRatio;
    }

    /**
     * @param float $compressionRatio
     */
    public function setCompressionRatio($compressionRatio)
    {
        $this->compressionRatio = $compressionRatio;
    }

    /**
     * @return int
     */
    public function getCylinder()
    {
        return $this->cylinder;
    }

    /**
     * @param int $cylinder
     */
    public function setCylinder($cylinder)
    {
        $this->cylinder = $cylinder;
    }

    /**
     * @return float
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * @param float $size
     */
    public function setSize($size)
    {
        $this->size = $size;
    }

    /**
     * @return int
     */
    public function getDisplacement()
    {
        return $this->displacement;
    }

    /**
     * @param int $displacement
     */
    public function setDisplacement($displacement)
    {
        $this->displacement = $displacement;
    }

    /**
     * @return string
     */
    public function getConfiguration()
    {
        return $this->configuration;
    }

    /**
     * @param string $configuration
     */
    public function setConfiguration($configuration)
    {
        $this->configuration = $configuration;
    }

    /**
     * @return string
     */
    public function getFuelType()
    {
        return $this->fuelType;
    }

    /**
     * @param string $fuelType
     */
    public function setFuelType($fuelType)
    {
        $this->fuelType = $fuelType;
    }

    /**
     * @return int
     */
    public function getHorsepower()
    {
        return $this->horsepower;
    }

    /**
     * @param int $horsepower
     */
    public function setHorsepower($horsepower)
    {
        $this->horsepower = $horsepower;
    }

    /**
     * @return int
     */
    public function getTorque()
    {
        return $this->torque;
    }

    /**
     * @param int $torque
     */
    public function setTorque($torque)
    {
        $this->torque = $torque;
    }

    /**
     * @return int
     */
    public function getTotalValves()
    {
        return $this->totalValves;
    }

    /**
     * @param int $totalValves
     */
    public function setTotalValves($totalValves)
    {
        $this->totalValves = $totalValves;
    }

    /**
     * @return string
     */
    public function getManufacturerEngineCode()
    {
        return $this->manufacturerEngineCode;
    }

    /**
     * @param string $manufacturerEngineCode
     */
    public function setManufacturerEngineCode($manufacturerEngineCode)
    {
        $this->manufacturerEngineCode = $manufacturerEngineCode;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param string $code
     */
    public function setCode($code)
    {
        $this->code = $code;
    }

    /**
     * @return string
     */
    public function getCompressorType()
    {
        return $this->compressorType;
    }

    /**
     * @param string $compressorType
     */
    public function setCompressorType($compressorType)
    {
        $this->compressorType = $compressorType;
    }

}
