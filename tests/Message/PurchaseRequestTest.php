<?php

namespace Omnipay\Acehub\Message;

use Omnipay\Tests\TestCase;

class PurchaseRequestTest extends TestCase
{
    public function setUp()
    {
        $this->request = new PurchaseRequest($this->getHttpClient(), $this->getHttpRequest());
        $this->request->initialize(
            array(
                'amount' => '10.00',
                'currency' => 'GBP',
                'paymentType' => "Visa",
                'card' => $this->getValidCard()
            )
        );
    }

    public function testGetData()
    {
        $this->assertSame('payment', $this->request->getData()['action']);
    }

    public function testSend()
    {
        $this->setMockHttpResponse('PurchaseSuccess.txt');

        $response = $this->request->send();

        $this->assertTrue($response->isSuccessful());
        $this->assertFalse($response->isRedirect());
    }
}