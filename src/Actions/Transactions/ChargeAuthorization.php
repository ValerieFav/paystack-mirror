<?php


namespace Coderatio\PaystackMirror\Actions\Transactions;


use Coderatio\PaystackMirror\Actions\Action;
use Coderatio\PaystackMirror\Services\CurlService;
use Exception;

class ChargeAuthorization extends Action
{
    protected $url = 'https://api.paystack.co/transaction/charge_authorization';

    /**
     * @param CurlService $curlService
     * @throws Exception
     */
    public function handle(CurlService $curlService): void
    {
       $curlService->post($this->url, $this->getData());
    }
}
