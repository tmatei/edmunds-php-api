<?php
/**
 * Created by IntelliJ IDEA.
 * User: tudor
 * Date: 1/30/16
 * Time: 5:22 PM
 */

namespace Edmunds\Vehicle\Response;

use Edmunds\Vehicle\Type\MakeType;
use JMS\Serializer\Annotation\Type;

class MakesResponse
{
    /**
     * @var MakeType[]
     * @Type("array<Edmunds\Vehicle\Type\MakeType>")
     */
    private $makes;

    /**
     * @return MakeType[]
     */
    public function getMakes()
    {
        return $this->makes;
    }

    /**
     * @param MakeType[] $makes
     */
    public function setMakes($makes)
    {
        $this->makes = $makes;
    }


}
