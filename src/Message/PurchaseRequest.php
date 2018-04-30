<?php

namespace Omnipay\Acehub\Message;

use Omnipay\Acehub\Message\Helpers\Helper;
use Omnipay\Acehub\Objects\Business;
use Omnipay\Common\CreditCard;

/**
 * Class PurchaseRequest
 * @package Omnipay\Acehub\Message
 */
class PurchaseRequest extends AuthorizeRequest
{
    /**
     * @return array|mixed
     * @throws \Omnipay\Common\Exception\InvalidRequestException
     */
    public function getData()
    {
        $data =  parent::getData();
        $data['action'] = 'payment';
        return $data;
    }
}
