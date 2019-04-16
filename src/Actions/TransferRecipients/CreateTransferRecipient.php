<?php


namespace Coderatio\PaystackMirror\Actions\TransferRecipients;


use Coderatio\PaystackMirror\Actions\Action;
use Coderatio\PaystackMirror\Services\CurlService;
use Exception;

class CreateTransferRecipient extends Action
{
    protected $url = 'https://api.paystack.co/transferrecipient';

    /**
     * @param CurlService $curlService
     * @throws Exception
     */
    public function handle(CurlService $curlService): void
    {
        $curlService->post($this->url, $this->getData());
    }
}
