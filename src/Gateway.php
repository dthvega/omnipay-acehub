<?php


namespace Omnipay\Acehub;


use Omnipay\Common\AbstractGateway;

/**
 * Class Gateway
 * @package Omnipay\Acehub
 */
class Gateway extends AbstractGateway
{
    /**
     * @return string
     */
    public function getName()
    {
        return "Acehub";
    }

    /**
     * @return array
     */
    public function getDefaultParameters()
    {
        return array(
            'businessId' =>'',
            'userName'   =>'',
            'password'   =>'',
            'methodId'   => '1',
            'languageCode'  => 'en',
            'type'  => 'SINGLE'
        );
    }

    /**
     * @param $value
     * @return $this
     */
    public function setBusinessId($value)
    {
        return $this->setParameter('businessId', $value);
    }

    /**
     * @param $value
     * @return $this
     */
    public function setMethodId($value)
    {
        return $this->setParameter('methodId', $value);
    }

    /**
     * @return mixed
     */
    public function getMethodId()
    {
        return $this->getParameter('methodId');
    }

    /**
     * @param $value
     * @return $this
     */
    public function setType($value)
    {
        return $this->setParameter('type', $value);
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->getParameter('type');
    }

    /**
     * @param $value
     * @return $this
     */
    public function setLanguageCode($value)
    {
        return $this->setParameter('languageCode', $value);
    }

    /**
     * @return mixed
     */
    public function getLanguageCode()
    {
        return $this->getParameter('languageCode');
    }

    /**
     * @return mixed
     */
    public function getBusinessId()
    {
        return $this->getParameter('businessId');
    }

    /**
     * @param $value
     * @return $this
     */
    public function setUserName($value)
    {
        return $this->setParameter('userName', $value);
    }

    /**
     * @return mixed
     */
    public function getUserName()
    {
        return $this->getParameter('userName');
    }

    /**
     * @param $value
     * @return $this
     */
    public function setPassword($value)
    {
        return $this->setParameter('password', $value);
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->getParameter('password');
    }

    /**
     * @param array $options
     * @return \Omnipay\Common\Message\AbstractRequest|\Omnipay\Common\Message\RequestInterface
     */
    public function purchase(array $options = array())
    {
        return $this->createRequest('\Omnipay\Acehub\Message\PurchaseRequest', $options);
    }

    /**
     * @param array $options
     * @return \Omnipay\Common\Message\AbstractRequest|\Omnipay\Common\Message\RequestInterface
     */
    public function authorize(array $options = array())
    {
        return $this->createRequest('\Omnipay\Acehub\Message\AuthorizeRequest', $options);
    }

    /**
     * @param array $options
     * @return \Omnipay\Common\Message\AbstractRequest|\Omnipay\Common\Message\RequestInterface
     */
    public function capture(array $options = array())
    {
        return $this->createRequest('\Omnipay\Acehub\Message\CaptureRequest', $options);
    }
}
