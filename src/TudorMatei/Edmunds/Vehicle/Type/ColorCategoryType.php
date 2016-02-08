<?php
/**
 * Created by IntelliJ IDEA.
 * User: tudor
 * Date: 1/30/16
 * Time: 5:46 PM
 */

namespace TudorMatei\Edmunds\Vehicle\Type;

use JMS\Serializer\Annotation\Type;

class ColorCategoryType
{
    /**
     * @var string
     * @Type("string")
     */
    protected $category;

    /**
     * @var ColorOptionType[]
     * @Type("array<TudorMatei\Edmunds\Vehicle\Type\ColorOptionType>")
     */
    protected $options;

    /**
     * @return string
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * @param string $category
     */
    public function setCategory($category)
    {
        $this->category = $category;
    }

    /**
     * @return ColorOptionType[]
     */
    public function getOptions()
    {
        return $this->options;
    }

    /**
     * @param ColorOptionType[] $options
     */
    public function setOptions($options)
    {
        $this->options = $options;
    }

}
