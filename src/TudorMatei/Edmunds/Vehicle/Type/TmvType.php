<?php
/**
 * Created by IntelliJ IDEA.
 * User: tudor
 * Date: 1/30/16
 * Time: 5:42 PM
 */

namespace TudorMatei\Edmunds\Vehicle\Type;

use JMS\Serializer\Annotation\Type;

class TmvType
{
    /**
     * @var PriceType
     * @Type("TudorMatei\Edmunds\Vehicle\Type\PriceType")
     */
    protected $nationalBasePrice;

    /**
     * @var PriceType
     * @Type("TudorMatei\Edmunds\Vehicle\Type\PriceType")
     */
    protected $optionTMVPrices;

    /**
     * @var PriceType
     * @Type("TudorMatei\Edmunds\Vehicle\Type\PriceType")
     */
    protected $regionalAdjustment;

    /**
     * @var PriceType
     * @Type("TudorMatei\Edmunds\Vehicle\Type\PriceType")
     */
    protected $colorAdjustment;

    /**
     * @var float
     * @Type("float")
     */
    protected $destinationCharge;

    /**
     * @var float
     * @Type("float")
     */
    protected $regionalAdFee;

    /**
     * @var PriceType
     * @Type("TudorMatei\Edmunds\Vehicle\Type\PriceType")
     */
    protected $totalWithOptions;

    /**
     * @var float
     * @Type("float")
     */
    protected $incentivesAndRebates;

    /**
     * @var float
     * @Type("float")
     */
    protected $offerPrice;

    /**
     * @var float
     * @Type("float")
     */
    protected $certifiedUsedPrice;

    /**
     * @var PriceType
     * @Type("TudorMatei\Edmunds\Vehicle\Type\PriceType")
     */
    protected $conditionAdjustment;

    /**
     * @var PriceType
     * @Type("TudorMatei\Edmunds\Vehicle\Type\PriceType")
     */
    protected $predictedChange;

    /**
     * @var PriceType
     * @Type("TudorMatei\Edmunds\Vehicle\Type\PriceType")
     */
    protected $predictedChangeIndicator;

    /**
     * @var float
     * @Type("float")
     */
    protected $gasGuzzlerTax;

    /**
     * @var bool
     * @Type("boolean")
     */
    protected $estimatedTmv;

    /**
     * @return PriceType
     */
    public function getNationalBasePrice()
    {
        return $this->nationalBasePrice;
    }

    /**
     * @param PriceType $nationalBasePrice
     */
    public function setNationalBasePrice($nationalBasePrice)
    {
        $this->nationalBasePrice = $nationalBasePrice;
    }

    /**
     * @return PriceType
     */
    public function getOptionTMVPrices()
    {
        return $this->optionTMVPrices;
    }

    /**
     * @param PriceType $optionTMVPrices
     */
    public function setOptionTMVPrices($optionTMVPrices)
    {
        $this->optionTMVPrices = $optionTMVPrices;
    }

    /**
     * @return PriceType
     */
    public function getRegionalAdjustment()
    {
        return $this->regionalAdjustment;
    }

    /**
     * @param PriceType $regionalAdjustment
     */
    public function setRegionalAdjustment($regionalAdjustment)
    {
        $this->regionalAdjustment = $regionalAdjustment;
    }

    /**
     * @return PriceType
     */
    public function getColorAdjustment()
    {
        return $this->colorAdjustment;
    }

    /**
     * @param PriceType $colorAdjustment
     */
    public function setColorAdjustment($colorAdjustment)
    {
        $this->colorAdjustment = $colorAdjustment;
    }

    /**
     * @return float
     */
    public function getDestinationCharge()
    {
        return $this->destinationCharge;
    }

    /**
     * @param float $destinationCharge
     */
    public function setDestinationCharge($destinationCharge)
    {
        $this->destinationCharge = $destinationCharge;
    }

    /**
     * @return float
     */
    public function getRegionalAdFee()
    {
        return $this->regionalAdFee;
    }

    /**
     * @param float $regionalAdFee
     */
    public function setRegionalAdFee($regionalAdFee)
    {
        $this->regionalAdFee = $regionalAdFee;
    }

    /**
     * @return PriceType
     */
    public function getTotalWithOptions()
    {
        return $this->totalWithOptions;
    }

    /**
     * @param PriceType $totalWithOptions
     */
    public function setTotalWithOptions($totalWithOptions)
    {
        $this->totalWithOptions = $totalWithOptions;
    }

    /**
     * @return float
     */
    public function getIncentivesAndRebates()
    {
        return $this->incentivesAndRebates;
    }

    /**
     * @param float $incentivesAndRebates
     */
    public function setIncentivesAndRebates($incentivesAndRebates)
    {
        $this->incentivesAndRebates = $incentivesAndRebates;
    }

    /**
     * @return float
     */
    public function getOfferPrice()
    {
        return $this->offerPrice;
    }

    /**
     * @param float $offerPrice
     */
    public function setOfferPrice($offerPrice)
    {
        $this->offerPrice = $offerPrice;
    }

    /**
     * @return float
     */
    public function getCertifiedUsedPrice()
    {
        return $this->certifiedUsedPrice;
    }

    /**
     * @param float $certifiedUsedPrice
     */
    public function setCertifiedUsedPrice($certifiedUsedPrice)
    {
        $this->certifiedUsedPrice = $certifiedUsedPrice;
    }

    /**
     * @return PriceType
     */
    public function getConditionAdjustment()
    {
        return $this->conditionAdjustment;
    }

    /**
     * @param PriceType $conditionAdjustment
     */
    public function setConditionAdjustment($conditionAdjustment)
    {
        $this->conditionAdjustment = $conditionAdjustment;
    }

    /**
     * @return PriceType
     */
    public function getPredictedChange()
    {
        return $this->predictedChange;
    }

    /**
     * @param PriceType $predictedChange
     */
    public function setPredictedChange($predictedChange)
    {
        $this->predictedChange = $predictedChange;
    }

    /**
     * @return PriceType
     */
    public function getPredictedChangeIndicator()
    {
        return $this->predictedChangeIndicator;
    }

    /**
     * @param PriceType $predictedChangeIndicator
     */
    public function setPredictedChangeIndicator($predictedChangeIndicator)
    {
        $this->predictedChangeIndicator = $predictedChangeIndicator;
    }

    /**
     * @return float
     */
    public function getGasGuzzlerTax()
    {
        return $this->gasGuzzlerTax;
    }

    /**
     * @param float $gasGuzzlerTax
     */
    public function setGasGuzzlerTax($gasGuzzlerTax)
    {
        $this->gasGuzzlerTax = $gasGuzzlerTax;
    }

    /**
     * @return boolean
     */
    public function isEstimatedTmv()
    {
        return $this->estimatedTmv;
    }

    /**
     * @param boolean $estimatedTmv
     */
    public function setEstimatedTmv($estimatedTmv)
    {
        $this->estimatedTmv = $estimatedTmv;
    }

}