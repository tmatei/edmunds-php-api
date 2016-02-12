<?php
/**
 * Created by IntelliJ IDEA.
 * User: tudor
 * Date: 1/30/16
 * Time: 5:46 PM
 */

namespace Edmunds\Vehicle\Type\VinDecoding;

use JMS\Serializer\Annotation\Type;

class RpmType
{
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

}
