<?php
/**
 * Created by IntelliJ IDEA.
 * User: tudor
 * Date: 1/30/16
 * Time: 5:46 PM
 */

namespace TudorMatei\Edmunds\Vehicle\Type;

use JMS\Serializer\Annotation\Type;

class ModelType
{
    /**
     * @var int
     * @Type("integer")
     */
    protected $id;

    /**
     * @var string
     * @Type("string")
     */
    protected $name;

    /**
     * @var string
     * @Type("string")
     */
    protected $niceName;

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
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
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


}