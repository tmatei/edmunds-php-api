<?php
/**
 * Created by IntelliJ IDEA.
 * User: tudor
 * Date: 1/30/16
 * Time: 5:22 PM
 */

namespace TudorMatei\Edmunds\Vehicle\Response;

use TudorMatei\Edmunds\Vehicle\Type\TmvType;
use JMS\Serializer\Annotation\Type;

class TmvResponse
{
    /**
     * @var TmvType
     * @Type("TudorMatei\Edmunds\Vehicle\Type\TmvType")
     */
    private $tmv;

    /**
     * @return TmvType
     */
    public function getTmv()
    {
        return $this->tmv;
    }

    /**
     * @param TmvType $tmv
     */
    public function setTmv($tmv)
    {
        $this->tmv = $tmv;
    }

}
