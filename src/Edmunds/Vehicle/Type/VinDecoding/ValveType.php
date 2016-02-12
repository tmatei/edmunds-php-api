<?php
/**
 * Created by IntelliJ IDEA.
 * User: tudor
 * Date: 1/30/16
 * Time: 5:46 PM
 */

namespace Edmunds\Vehicle\Type\VinDecoding;

use JMS\Serializer\Annotation\Type;

class ValveType
{
    /**
     * @var string
     * @Type("string")
     */
    protected $gear;

    /**
     * @return string
     */
    public function getGear()
    {
        return $this->gear;
    }

    /**
     * @param string $gear
     */
    public function setGear($gear)
    {
        $this->gear = $gear;
    }
}
