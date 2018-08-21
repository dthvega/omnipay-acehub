<?php

namespace Omnipay\Acehub\Message;

use Omnipay\Common\Exception\InvalidResponseException;

abstract class AbstractRequest extends \Omnipay\Common\Message\AbstractRequest
{

    /**
     * @var string
     */
    protected $testEndpoint = "https://stagconnect.acehubpaymentservices.com/gateway/v3/";
    /**
     * @var string
     */
    protected $liveEndpoint = "https://connect.acehubpaymentservices.com/gateway/v3/";

    /**
     * @return mixed
     */
    public function getMethodId()
    {
        return $this->getParameter('methodId');
    }

    /**
     * @param $value
     * @return \Omnipay\Common\Message\AbstractRequest
     */
    public function setMethodId($value)
    {
        return $this->setParameter('methodId', $value);
    }

    /**
     * @param $value
     * @return \Omnipay\Common\Message\AbstractRequest
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
     * @param $value
     * @return \Omnipay\Common\Message\AbstractRequest
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
     * @return string
     */
    public function getEndpoint()
    {
        if ($this->getTestMode()) {
            return $this->testEndpoint;
        }
        return $this->liveEndpoint;
    }

    /**
     * @param $value
     * @return \Omnipay\Common\Message\AbstractRequest
     */
    public function setBusinessId($value)
    {
        return $this->setParameter('businessId', $value);
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
     * @return \Omnipay\Common\Message\AbstractRequest
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
     * @return \Omnipay\Common\Message\AbstractRequest
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
     * @param mixed $data
     * @return Response|\Omnipay\Common\Message\ResponseInterface
     * @throws InvalidResponseException
     */
    public function sendData($data)
    {
        // Create the HTTP request
        $httpResponse = $this->httpClient->request(
            $this->method(),
            $this->getEndpoint().$this->action(),
            array(
                'Accept'        => 'application/json',
                'Authorization' =>  'Basic ' . base64_encode(sprintf('%s:%s',$this->getUserName(),$this->getPassword())),
                'Content-type'  => 'application/json'
            ),
            json_encode($data)
        );

        try {
            $jsonToArrayResponse = json_decode($httpResponse->getBody()->getContents(),true);
            return $this->createResponse($jsonToArrayResponse);
        } catch (\Exception $e) {
            throw new InvalidResponseException(
                'Error communicating with payment gateway: ' . $e->getMessage(),
                $e->getCode()
            );
        }
    }

    /**
     * @return array|mixed
     * @throws \Omnipay\Common\Exception\InvalidRequestException
     */
    public function getData()
    {
        $this->validate('amount', 'currency');

        $data = array(
            'header' => array(
                'businessId' => $this->getBusinessId(),
            ),
            'body' => array()
        );

        return $data;
    }

    /**
     * @param $data
     * @return Response
     */
    public function createResponse($data)
    {
        return new Response($this, $data);
    }
}
