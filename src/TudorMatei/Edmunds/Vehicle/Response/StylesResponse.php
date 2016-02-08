<?php
/**
 * Created by IntelliJ IDEA.
 * User: tudor
 * Date: 1/30/16
 * Time: 5:22 PM
 */

namespace TudorMatei\Edmunds\Vehicle\Response;

use TudorMatei\Edmunds\Vehicle\Type\StyleType;
use TudorMatei\Edmunds\Vehicle\Type\VinDecoding\EngineType;
use JMS\Serializer\Annotation\Type;

class StylesResponse
{
    /**
     * @var StyleType[]
     * @Type("array<TudorMatei\Edmunds\Vehicle\Type\StyleType>")
     */
    private $styles;

    /**
     * @return StyleType[]
     */
    public function getStyles()
    {
        return $this->styles;
    }

    /**
     * @param StyleType[] $styles
     */
    public function setStyles($styles)
    {
        $this->styles = $styles;
    }

}
