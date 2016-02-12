<?php
/**
 * Created by IntelliJ IDEA.
 * User: tudor
 * Date: 1/30/16
 * Time: 5:46 PM
 */

namespace Edmunds\Vehicle\Type;

use JMS\Serializer\Annotation\Type;

class YearType
{
    /**
     * @var int
     * @Type("integer")
     */
    protected $id;

    /**
     * @var int
     * @Type("integer")
     */
    protected $year;

    /**
     * @var StyleType[]
     * @Type("array<Edmunds\Vehicle\Type\StyleType>")
     */
    protected $styles;

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
     * @return int
     */
    public function getYear()
    {
        return $this->year;
    }

    /**
     * @param int $year
     */
    public function setYear($year)
    {
        $this->year = $year;
    }

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
