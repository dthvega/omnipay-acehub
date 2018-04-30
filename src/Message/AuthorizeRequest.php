<?php

namespace Omnipay\Acehub\Message;

use Omnipay\Acehub\Message\Helpers\Helper;
use Omnipay\Acehub\Objects\Bank;
use Omnipay\Acehub\Objects\Business;
use Omnipay\Common\CreditCard;

/**
 * Class AuthorizeRequest
 * @package Omnipay\Acehub\Message
 */
class AuthorizeRequest extends AbstractRequest
{


    /**
     * @return string
     */
    public function action()
    {
        return 'payments';
    }

    /**
     * @return string
     */
    public function method()
    {
        return 'POST';
    }


    /**
     * @return mixed
     */
    public function getPaymentType()
    {
        return $this->getParameter('paymentType');
    }

    /**
     * @param $value
     * @return \Omnipay\Common\Message\AbstractRequest
     */
    public function setPaymentType($value)
    {
        return $this->setParameter('paymentType', $value);
    }

    /**
     * @param $value
     * @return \Omnipay\Common\Message\AbstractRequest
     */
    public function setCustomerId($value)
    {
        return $this->setParameter('customerId', $value);
    }


    /**
     * @return mixed
     */
    public function getCustomerId()
    {
        return $this->getParameter('customerId');
    }

    /**
     * @return mixed
     */
    public function getStoreId()
    {
        return $this->getParameter('storeId');
    }

    /**
     * @param $value
     * @return \Omnipay\Common\Message\AbstractRequest
     */
    public function setStoreId($value)
    {
        return $this->setParameter('storeId', $value);
    }

    /**
     * @return mixed
     */
    public function getInvoiceId()
    {
        return $this->getParameter('invoiceId');
    }

    /**
     * @param $value
     * @return \Omnipay\Common\Message\AbstractRequest
     */
    public function setInvoiceId($value)
    {
        return $this->setParameter('invoice', $value);
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
    public function setLanguageCode($value)
    {
        return $this->setParameter('languageCode', $value);
    }

    /**
     * @return mixed
     */
    public function getSource()
    {
        return $this->getParameter('source');
    }


    /**
     * @param $value
     * @return \Omnipay\Common\Message\AbstractRequest
     */
    public function setSource($value)
    {
        return $this->setParameter('source', $value);
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
     * @return \Omnipay\Common\Message\AbstractRequest
     */
    public function setType($value)
    {
        return $this->setParameter('type', $value);
    }


    /**
     * @return mixed
     */
    public function getDescriptor()
    {
        return $this->getParameter('descriptor');
    }


    /**
     * @param $value
     * @return \Omnipay\Common\Message\AbstractRequest
     */
    public function setDescriptor($value)
    {
        return $this->setParameter('descriptor', $value);
    }

    /**
     * @return mixed
     */
    public function getTokenize()
    {
        return $this->getParameter('tokenize');
    }


    /**
     * @param $value
     * @return \Omnipay\Common\Message\AbstractRequest
     */
    public function setTokenize($value)
    {
        return $this->setParameter('descriptor', $value);
    }

    /**
     * @return mixed
     */
    public function getPayTimeout()
    {
        return $this->getParameter('payTimeout');
    }


    /**
     * @param $value
     * @return \Omnipay\Common\Message\AbstractRequest
     */
    public function setPayTimeout($value)
    {
        return $this->setParameter('payTimeout', $value);
    }

    /**
     * @return mixed
     */
    public function getBusiness()
    {
        return $this->getParameter('business');
    }

    /**
     * @param $value
     * @return \Omnipay\Common\Message\AbstractRequest
     */
    public function setBusiness($value)
    {
        if ($value && !$value instanceof Business) {
            $value = new Business($value);
        }

        return $this->setParameter('business', $value);
    }

    /**
     * @return mixed
     */
    public function getBank()
    {
        return $this->getParameter('bank');
    }

    /**
     * @param $value
     * @return \Omnipay\Common\Message\AbstractRequest
     */
    public function setBank($value)
    {
        if ($value && !$value instanceof Bank) {
            $value = new Bank($value);
        }

        return $this->setParameter('bank', $value);
    }

    /**
     * @param $value
     * @return \Omnipay\Common\Message\AbstractRequest
     */
    public function setEci($value)
    {
        return $this->setParameter('eci', $value);
    }

    /**
     * @return mixed
     */
    public function getEci()
    {
        return $this->getParameter('eci');
    }

    /**
     * @param $value
     * @return \Omnipay\Common\Message\AbstractRequest
     */
    public function setAvv($value)
    {
        return $this->setParameter('avv', $value);
    }

    /**
     * @return mixed
     */
    public function getAvv()
    {
        return $this->getParameter('avv');
    }

    /**
     * @param $value
     * @return \Omnipay\Common\Message\AbstractRequest
     */
    public function setXid($value)
    {
        return $this->setParameter('xid', $value);
    }

    /**
     * @return mixed
     */
    public function getXid()
    {
        return $this->getParameter('xid');
    }

    /**
     * @param $value
     * @return \Omnipay\Common\Message\AbstractRequest
     */
    public function setCheckEnrollment($value)
    {
        return $this->setParameter('checkEnrollment', $value);
    }

    /**
     * @return mixed
     */
    public function getCheckEnrollment()
    {
        return $this->getParameter('checkEnrollment');
    }


    /**
     * @param $value
     * @return \Omnipay\Common\Message\AbstractRequest
     */
    public function setAccountIdentifier($value)
    {
        return $this->setParameter('checkEnrollment', $value);
    }

    /**
     * @return mixed
     */
    public function getAccountIdentifier()
    {
        return $this->getParameter('checkEnrollment');
    }

    /**
     * @param $value
     * @return \Omnipay\Common\Message\AbstractRequest
     */
    public function setAccountKey($value)
    {
        return $this->setParameter('accountKey', $value);
    }

    /**
     * @return mixed
     */
    public function getAccountKey()
    {
        return $this->getParameter('accountKey');
    }

    /**
     * @param $value
     * @return \Omnipay\Common\Message\AbstractRequest
     */
    public function setSex($value)
    {
        return $this->setParameter('sex', $value);
    }

    /**
     * @return mixed
     */
    public function getGender()
    {
        return $this->getParameter('sex');
    }

    /**
     * @param $value
     * @return \Omnipay\Common\Message\AbstractRequest
     */
    public function setBirthDay($value)
    {
        return $this->setParameter('birthday', $value);
    }

    /**
     * @return mixed
     */
    public function getBirthDay()
    {
        return $this->getParameter('birthday');
    }

    /**
     * @param $value
     * @return \Omnipay\Common\Message\AbstractRequest
     */
    public function setIdentificationTypeId($value)
    {
        return $this->setParameter('identificationTypeId', $value);
    }

    /**
     * @return mixed
     */
    public function getIdentificationTypeId()
    {
        return $this->getParameter('identificationTypeId');
    }

    /**
     * @param $value
     * @return \Omnipay\Common\Message\AbstractRequest
     */
    public function setIdentificationNumber($value)
    {
        return $this->setParameter('identificationNumber', $value);
    }

    /**
     * @return mixed
     */
    public function getIdentificationNumber()
    {
        return $this->getParameter('identificationNumber');
    }

    /**
     * @param $value
     * @return \Omnipay\Common\Message\AbstractRequest
     */
    public function setCustomerType($value)
    {
        return $this->setParameter('customerType', $value);
    }

    /**
     * @return mixed
     */
    public function getCustomerType()
    {
        return $this->getParameter('customerType');
    }

    /**
     * @return mixed
     */
    public function getTaxNumber()
    {
        return $this->getParameter('taxNumber');
    }

    /**
     * @param $value
     * @return \Omnipay\Common\Message\AbstractRequest
     */
    public function setTaxNumber($value)
    {
        return $this->setParameter('taxNumber', $value);
    }

    /**
     * @return mixed
     */
    public function getHttpUserAgent()
    {
        return $this->getParameter('httpUserAgent');
    }

    /**
     * @param $value
     * @return \Omnipay\Common\Message\AbstractRequest
     */
    public function setHttpUserAgent($value)
    {
        return $this->setParameter('httpUserAgent', $value);
    }

    /**
     * @return mixed
     */
    public function getDeviceType()
    {
        return $this->getParameter('deviceType');
    }

    /**
     * @param $value
     * @return \Omnipay\Common\Message\AbstractRequest
     */
    public function setDeviceType($value)
    {
        return $this->setParameter('deviceType', $value);
    }

    /**
     * @return array|mixed
     * @throws \Omnipay\Common\Exception\InvalidRequestException
     */
    public function getData()
    {
        $this->validate('paymentType', 'card');

        if (in_array($this->getPaymentType(), Helper::$cards)) {
            $this->getCard()->validate();
        }

        $data =  parent::getData();

        /** @var CreditCard $card */
        $card = $this->getCard();

        $data['action'] = 'authorize';

        $data['body']['transaction'] = $this->getTransactionData();

        if ($this->getCard()->getNumber()) {
            $data['body']['card']    = $this->getCardData();
        }

        if ($this->getBusiness()) {
            $data['body']['dba'] = $this->getBusinessData();
        }

        if ($bank = $this->getBank()) {
            $data['body']['bank'] = $this->getBankData();
        }

        if ($identifier = $this->getAccountIdentifier()) {
            $data['wallet']['accountIdentifier']    = $identifier;
            $data['wallet']['accountKey']           = $this->getAccountKey();
        }

        $data['body']['customer'] = $this->getCustomerData();
        $data['body']['billingAddress'] = array(
            'street'         => $card->getBillingAddress1(),
            'city'           => $card->getCity(),
            'countryCode'    => $card->getCountry()
        );
        return $data;
    }


    /**
     * @return array
     * @throws \Omnipay\Common\Exception\InvalidRequestException
     */
    public function getTransactionData()
    {
        $card = $this->getCard();

        $transaction = array(
            'amount'         => $this->getAmount(),
            'currencyCode'   => $this->getCurrency(),
            'countryCode'    => $card->getCountry(),
            'trackingCode'   => $this->getTransactionId(),
            'brandId'        => Helper::determineBrandId($this->getPaymentType()),
            'languageCode'   => $this->getLanguageCode(),
            'methodId'       => $this->getMethodId(),
            'notifyUrl'      => urlencode($this->getNotifyUrl()),
            'returnUrl'      => $this->getReturnUrl(),
            'storeId'        => $this->getStoreId(),
            'invoiceId'      => $this->getInvoiceId(),
            'source'         => $this->getSource(),
            'descriptor'     => $this->getDescriptor(),
            'type'           => $this->getType(),
            'payTimeout'     => $this->getPayTimeout(),
            'token'          => $this->getToken(),
            'tokenize'       => $this->getTokenize(),
        );

        return ($transaction);
    }

    /**
     * @return array
     */
    public function getCardData()
    {
        $card = $this->getCard();
        $cardData =  array(
            'holderName'    => $card->getBillingName(),
            'number'        => $card->getNumber(),
            'expiryMonth'   => $card->getExpiryMonth(),
            'expiryYear'    => $card->getExpiryYear(),
            'cvv'           => $card->getCvv(),
            'issueNumber'   => $card->getIssueNumber()
        );

       // if($issueNumber = $card->getIssueNumber()){
        //}
        return $cardData;
    }


    /**
     * @return array
     */
    public function getBusinessData()
    {
        /** @var Business $business */
        $business = $this->getBusiness();
        $data = array(
            'name'          => $business->getName(),
            'street'        => $business->getStreet(),
            'shortName'     => $business->getShortName(),
            'city'          => $business->getCity(),
            'zip'           => $business->getZip(),
            'stateCode'     => $business->getStateCode(),
            'countryCode'   => $business->getCountryCode(),
            'email'         => $business->getEmail(),
            'phoneNumber'   => $business->getPhoneNumber(),
            'subMerchantId' => $business->getSubMerchantId()
        );
        return ($data);
    }


    /**
     * @return array
     */
    public function getBankData()
    {
        /** @var Bank $bank */
        $bank = $this->getBank();
        $data = array(
            'issuerId'          => $bank->getIssuerId(),
            'countryCode'       => $bank->getCountryCode(),
            'name'              => $bank->getName(),
            'accountNumber'     => $bank->getAccountNumber(),
            'accountHolderName' => $bank->getAccountHolderName(),
            'iban'              => $bank->getIban(),
            'bic'               => $bank->getBic(),
            'bankCode'          => $bank->getBankCode(),
            'mandateId'         => $bank->getMandateId(),
            'dateCollection'    => $bank->getDateCollection(),
            'dateMandateSigned' => $bank->getDateMandateSigned(),
        );
        return ($data);
    }

    /**
     * @return array
     */
    public function getCustomerData()
    {
        /** @var CreditCard $card */
        $card = $this->getCard();
        $data = array(
            'customerId'            => $this->getCustomerId(),
            'givenName'             => $card->getFirstName(),
            'familyName'            => $card->getLastName(),
            'email'                 => $card->getEmail(),
            'sex'                   => $this->getGender(),
            'ipAddress'             => $this->getClientIp(),
            'birthDate'             => $this->getBirthDay(),
            'phoneNumber'           => $card->getPhone(),
            'mobileNumber'          => $card->getPhone(),
            'companyName'           => $card->getCompany(),
            'identificationTypeId'  => $this->getIdentificationTypeId(),
            'identificationNumber'  => $this->getIdentificationNumber(),
            'type'                  => $this->getCustomerType(),
            'taxNumber'             => $this->getTaxNumber(),
            'httpUserAgent'         => $this->getHttpUserAgent(),
            'deviceType'            => $this->getDeviceType()
        );
        return ($data);
    }

    /**
     * @param mixed $data
     * @return Response|\Omnipay\Common\Message\ResponseInterface
     * @throws \Omnipay\Common\Exception\InvalidResponseException
     */
    public function sendData($data)
    {
       return parent::sendData($data); // TODO: Change the autogenerated stub
    }
}
