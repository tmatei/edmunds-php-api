<?php
/**
 * Created by IntelliJ IDEA.
 * User: tudor
 * Date: 1/30/16
 * Time: 5:42 PM
 */

namespace Edmunds\Vehicle\Type;

use JMS\Serializer\Annotation\Type;

class MpgType
{
    /**
     * @var integer
     * @Type("integer")
     */
    protected $highway;

    /**
     * @var integer
     * @Type("integer")
     */
    protected $city;

    /**
     * @return string
     */
    public function getHighway()
    {
        return $this->highway;
    }

    /**
     * @param string $highway
     */
    public function setHighway($highway)
    {
        $this->highway = $highway;
    }

    /**
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param string $city
     */
    public function setCity($city)
    {
        $this->city = $city;
    }


}