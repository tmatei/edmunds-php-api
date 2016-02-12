<?php
/**
 * Created by IntelliJ IDEA.
 * User: tudor
 * Date: 1/30/16
 * Time: 5:46 PM
 */

namespace Edmunds\Vehicle\Type;

use JMS\Serializer\Annotation\Type;

class SubmodelType
{
    /**
     * @var string
     * @Type("string")
     */
    protected $body;

    /**
     * @var string
     * @Type("string")
     */
    protected $modelName;

    /**
     * @var string
     * @Type("string")
     */
    protected $niceName;

    /**
     * @var string
     * @Type("string")
     */
    protected $fuel;

    /**
     * @var string
     * @Type("string")
     */
    protected $tuner;

    /**
     * @return string
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * @param string $body
     */
    public function setBody($body)
    {
        $this->body = $body;
    }

    /**
     * @return string
     */
    public function getModelName()
    {
        return $this->modelName;
    }

    /**
     * @param string $modelName
     */
    public function setModelName($modelName)
    {
        $this->modelName = $modelName;
    }

    /**
     * @return string
     */
    public function getNiceName()
    {
        return $this->niceName;
    }

    /**
     * @param string $niceName
     */
    public function setNiceName($niceName)
    {
        $this->niceName = $niceName;
    }

    /**
     * @return string
     */
    public function getFuel()
    {
        return $this->fuel;
    }

    /**
     * @param string $fuel
     */
    public function setFuel($fuel)
    {
        $this->fuel = $fuel;
    }

    /**
     * @return mixed
     */
    public function getTuner()
    {
        return $this->tuner;
    }

    /**
     * @param mixed $tuner
     */
    public function setTuner($tuner)
    {
        $this->tuner = $tuner;
    }

}
