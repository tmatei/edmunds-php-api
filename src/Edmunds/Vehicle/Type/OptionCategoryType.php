<?php
/**
 * Created by IntelliJ IDEA.
 * User: tudor
 * Date: 1/30/16
 * Time: 5:46 PM
 */

namespace Edmunds\Vehicle\Type;

use JMS\Serializer\Annotation\Type;

class OptionCategoryType
{
    /**
     * @var string
     * @Type("string")
     */
    protected $category;

    /**
     * @var OptionType[]
     * @Type("array<Edmunds\Vehicle\Type\OptionType>")
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
     * @return OptionType[]
     */
    public function getOptions()
    {
        return $this->options;
    }

    /**
     * @param OptionType[] $options
     */
    public function setOptions($options)
    {
        $this->options = $options;
    }

}
