<?php

namespace Omnipay\Acehub;

use Omnipay\Tests\GatewayTestCase;

class GatewayTest extends GatewayTestCase
{

    /** @var Gateway */
    protected $gateway;

    public function setUp()
    {
        parent::setUp();

        $this->gateway = new Gateway($this->getHttpClient(),$this->getHttpRequest());


    }

    public function testPurchase()
    {
       $this->setMockHttpResponse("PurchaseSuccess.txt");

       $response = $this->gateway->purchase(array(
           'amount' => '68.00',
           'currency' => 'GBP',
           'businessId' => 1234,
           "userName"  => "testUser",
           "password" => "testPass",
           'methodId'  => 2,
           'paymentType' => "Visa",
           'card' => $this->getValidCard()
       ))->send();

        $this->assertTrue($response->isSuccessful());
        $this->assertFalse($response->isRedirect());
    }
    public function testPurchaseWithRedirect()
    {
       $this->setMockHttpResponse("PurchaseSuccessRedirect.txt");

       $response = $this->gateway->purchase(array(
           'amount' => '756.53',
           'currency' => 'RUB',
           'businessId' => 1234,
           "userName"  => "testUser",
           "password" => "testPass",
           'methodId'  => 2,
           'paymentType' => 'Yandex',
           'card' => $this->getValidCard()
       ))->send();

        $this->assertTrue($response->isRedirect());
        $this->assertFalse($response->isSuccessful());
    }
}