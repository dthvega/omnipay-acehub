<?php

namespace Omnipay\Acehub\Objects;

use Omnipay\Common\CreditCard;
use Omnipay\Common\Helper;
use Symfony\Component\HttpFoundation\ParameterBag;

/**
 * Class Bank
 * @package Omnipay\Acehub\Objects
 */
class Bank extends CreditCard
{


    /**
     * @param $value
     * @return CreditCard
     */
    public function setIssuerId($value)
    {
        return $this->setParameter('issuerId', $value);
    }

    /**
     * @return mixed
     */
    public function getIssuerId()
    {
        return $this->getParameter('issuerId');
    }

    /**
     * @param $value
     * @return CreditCard
     */
    public function setCountryCode($value)
    {
        return $this->setParameter('countryCode', $value);
    }

    /**
     * @return mixed
     */
    public function getCountryCode()
    {
        return $this->getParameter('countryCode');
    }

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
    public function setAccountNumber($value)
    {
        return $this->setParameter('accountNumber', $value);
    }

    /**
     * @return mixed
     */
    public function getAccountNumber()
    {
        return $this->getParameter('accountNumber');
    }

    /**
     * @param $value
     * @return CreditCard
     */
    public function setAccountHolderName($value)
    {
        return $this->setParameter('accountHolderName', $value);
    }

    /**
     * @return mixed
     */
    public function getAccountHolderName()
    {
        return $this->getParameter('accountHolderName');
    }

    /**
     * @param $value
     * @return CreditCard
     */
    public function setIban($value)
    {
        return $this->setParameter('iban', $value);
    }

    /**
     * @return mixed
     */
    public function getIban()
    {
        return $this->getParameter('iban');
    }

    /**
     * @param $value
     * @return CreditCard
     */
    public function setBic($value)
    {
        return $this->setParameter('bic', $value);
    }

    /**
     * @return mixed
     */
    public function getBic()
    {
        return $this->getParameter('bic');
    }

    /**
     * @param $value
     * @return CreditCard
     */
    public function setBankCode($value)
    {
        return $this->setParameter('bankCode', $value);
    }

    /**
     * @return mixed
     */
    public function getBankCode()
    {
        return $this->getParameter('bankCode');
    }

    /**
     * @param $value
     * @return CreditCard
     */
    public function setMandateId($value)
    {
        return $this->setParameter('mandateId', $value);
    }

    /**
     * @return mixed
     */
    public function getMandateId()
    {
        return $this->getParameter('mandateId');
    }

    /**
     * @param $value
     * @return CreditCard
     */
    public function setDateCollection($value)
    {
        return $this->setParameter('dateCollection', $value);
    }

    /**
     * @return mixed
     */
    public function getDateCollection()
    {
        return $this->getParameter('dateCollection');
    }

    /**
     * @param $value
     * @return CreditCard
     */
    public function setDateMandateSigned($value)
    {
        return $this->setParameter('dateMandateSigned', $value);
    }

    /**
     * @return mixed
     */
    public function getDateMandateSigned()
    {
        return $this->getParameter('dateMandateSigned');
    }
}
