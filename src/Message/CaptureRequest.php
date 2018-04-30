<?php

namespace Omnipay\Acehub\Message;

use Omnipay\Acehub\Message\Helpers\Helper;
use Omnipay\Acehub\Objects\Business;
use Omnipay\Common\CreditCard;

/**
 * Class CaptureRequest
 * @package Omnipay\Acehub\Message
 */
class CaptureRequest extends AbstractRequest
{

    /**
     * @return string
     */
    public function action()
    {
        return sprintf('payments/%s/capture', $this->getTransactionReference());
    }

    /**
     * @param $value
     * @return \Omnipay\Common\Message\AbstractRequest
     */
    public function setInvoiceId($value)
    {
        return $this->setParameter('invoiceId', $value);
    }

    /**
     * @return mixed
     */
    public function getInvoiceId()
    {
        return $this->getParameter('invoiceId');
    }

    /**
     * @return string
     */
    public function method()
    {
        return 'POST';
    }


    /**
     * @return array|mixed
     * @throws \Omnipay\Common\Exception\InvalidRequestException
     */
    public function getData()
    {
        $data =  parent::getData();
        $data['body']['transaction'] = array(
            'trackingCode'  => $this->getTransactionId(),
            'amount'        => $this->getAmount(),
            'currencyCode'  => $this->getCurrency(),
            'invoiceId'     => $this->getInvoiceId()
        );
        return $data;
    }
}

