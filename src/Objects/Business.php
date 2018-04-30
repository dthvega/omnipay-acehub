<?php

namespace Omnipay\Acehub\Objects;

use Omnipay\Common\CreditCard;
use Omnipay\Common\Helper;
use Symfony\Component\HttpFoundation\ParameterBag;

/**
 * Class Business
 * @package Omnipay\Acehub\Objects
 */
class Business extends CreditCard
{
    /**
     * @param string $value
     * @return CreditCard
     */
    public function setName($value)
    {
        return $this->setParameter('name', $value);
    }

    /**
     * @return mixed|string
     */
    public function getName()
    {
        return $this->getParameter('name');
    }

    /**
     * @param $value
     * @return CreditCard
     */
    public function setStreet($value)
    {
        return $this->setAddress1($value);
    }

    /**
     * @return string
     */
    public function getStreet()
    {
        return $this->getAddress1();
    }

    /**
     * @param $value
     * @return CreditCard
     */
    public function setShortName($value)
    {
        return $this->setParameter('shortName', $value);
    }

    /**
     * @return mixed
     */
    public function getShortName()
    {
        return $this->getParameter('shortName');
    }

    /**
     * @param $value
     * @return CreditCard
     */
    public function setZip($value)
    {
        return $this->setPostcode($value);
    }

    /**
     * @return string
     */
    public function getZip()
    {
        return $this->getPostcode();
    }

    /**
     * @param $value
     * @return CreditCard
     */
    public function setStateCode($value)
    {
        return $this->setParameter('stateCode', $value);
    }

    /**
     * @return mixed
     */
    public function getStateCode()
    {
        return $this->getParameter('stateCode');
    }

    /**
     * @param $value
     * @return CreditCard
     */
    public function setCountryCode($value)
    {
        return $this->setShippingCountry($value);
    }

    /**
     * @return string
     */
    public function getCountryCode()
    {
        return $this->getShippingCountry();
    }

    /**
     * @param $value
     * @return CreditCard
     */
    public function setPhoneNumber($value)
    {
        return $this->setPhone($value);
    }

    /**
     * @return string
     */
    public function getPhoneNumber()
    {
        return $this->getPhone();
    }

    /**
     * @param $value
     * @return CreditCard
     */
    public function setSubMerchantId($value)
    {
        return $this->setParameter('subMerchantId', $value);
    }

    /**
     * @return mixed
     */
    public function getSubMerchantId()
    {
        return $this->getParameter('subMerchantId');
    }
}

