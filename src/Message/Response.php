<?php

namespace Omnipay\Acehub\Message;


use Omnipay\Common\Message\AbstractResponse;
use Omnipay\Common\Message\RedirectResponseInterface;

/**
 * Class Response
 * @package Omnipay\Acehub\Message
 */
class Response extends AbstractResponse implements RedirectResponseInterface
{


    /**
     * @return bool
     */
    public function isSuccessful()
    {
       return ($this->data['result'] === 0);
    }

    /**
     * @return bool
     */
    public function isRedirect()
    {
        return (key_exists('redirect',$this->data['body']));
    }

    /**
     * @return null|string
     */
    public function getRedirectUrl()
    {
       return $this->isRedirect() ? $this->data['body']["redirect"]["url"] :null;

    }

    /**
     * @return string
     */
    public function getRedirectMethod()
    {
        return "POST";
    }

    /**
     * @return array|null
     */
    public function getRedirectData()
    {
        return $this->isRedirect() ? $this->data['body']["redirect"]["fields"]:null;
    }

    /**
     * @return null|string
     */
    public function getMessage()
    {
        if(!$this->isSuccessful()){
            return $this->data['body']['error']['message'];
        }
        return $this->data['description'];
    }

    /**
     * @return null|string
     */
    public function getCode()
    {
        if(!$this->isSuccessful()){
            return $this->data['body']['error']["code"];
        }
        return $this->data['result'];
    }

    /**
     * @return null|string
     */
    public function getTransactionReference()
    {
        return ($this->isSuccessful()) ?$this->data['body']['transaction']['id'] : null;
    }

    /**
     * @return null
     */
    public function getRequestCode()
    {
        return ($this->isSuccessful()) ? $this->data['body']['head']['requestCode']:null;
    }



}