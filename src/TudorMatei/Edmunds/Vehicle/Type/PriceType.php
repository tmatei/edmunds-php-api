<?php
/**
 * Created by IntelliJ IDEA.
 * User: tudor
 * Date: 1/30/16
 * Time: 5:46 PM
 */

namespace TudorMatei\Edmunds\Vehicle\Type;
use JMS\Serializer\Annotation\Type;

class PriceType
{
    /**
     * @var float
     * @Type("float")
     */
    protected $baseMSRP;

    /**
     * @var float
     * @Type("float")
     */
    protected $baseInvoice;

    /**
     * @var float
     * @Type("float")
     */
    protected $deliveryCharges;

    /**
     * @var float
     * @Type("float")
     */
    protected $usedTmvRetail;

    /**
     * @var float
     * @Type("float")
     */
    protected $usedPrivateParty;

    /**
     * @var float
     * @Type("float")
     */
    protected $usedTradeIn;

    /**
     * @var bool
     * @Type("boolean")
     */
    protected $estimateTmv;

    /**
     * @var int
     * @Type("integer")
     */
    protected $tmvRecommendedRating;

    /**
     * @return int
     */
    public function getBaseMSRP()
    {
        return $this->baseMSRP;
    }

    /**
     * @param int $baseMSRP
     */
    public function setBaseMSRP($baseMSRP)
    {
        $this->baseMSRP = $baseMSRP;
    }

    /**
     * @return int
     */
    public function getBaseInvoice()
    {
        return $this->baseInvoice;
    }

    /**
     * @param int $baseInvoice
     */
    public function setBaseInvoice($baseInvoice)
    {
        $this->baseInvoice = $baseInvoice;
    }

    /**
     * @return int
     */
    public function getDeliveryCharges()
    {
        return $this->deliveryCharges;
    }

    /**
     * @param int $deliveryCharges
     */
    public function setDeliveryCharges($deliveryCharges)
    {
        $this->deliveryCharges = $deliveryCharges;
    }

    /**
     * @return int
     */
    public function getUsedTmvRetail()
    {
        return $this->usedTmvRetail;
    }

    /**
     * @param int $usedTmvRetail
     */
    public function setUsedTmvRetail($usedTmvRetail)
    {
        $this->usedTmvRetail = $usedTmvRetail;
    }

    /**
     * @return int
     */
    public function getUsedPrivateParty()
    {
        return $this->usedPrivateParty;
    }

    /**
     * @param int $usedPrivateParty
     */
    public function setUsedPrivateParty($usedPrivateParty)
    {
        $this->usedPrivateParty = $usedPrivateParty;
    }

    /**
     * @return int
     */
    public function getUsedTradeIn()
    {
        return $this->usedTradeIn;
    }

    /**
     * @param int $usedTradeIn
     */
    public function setUsedTradeIn($usedTradeIn)
    {
        $this->usedTradeIn = $usedTradeIn;
    }

    /**
     * @return boolean
     */
    public function isEstimateTmv()
    {
        return $this->estimateTmv;
    }

    /**
     * @param boolean $estimateTmv
     */
    public function setEstimateTmv($estimateTmv)
    {
        $this->estimateTmv = $estimateTmv;
    }

    /**
     * @return int
     */
    public function getTmvRecommendedRating()
    {
        return $this->tmvRecommendedRating;
    }

    /**
     * @param int $tmvRecommendedRating
     */
    public function setTmvRecommendedRating($tmvRecommendedRating)
    {
        $this->tmvRecommendedRating = $tmvRecommendedRating;
    }

}
