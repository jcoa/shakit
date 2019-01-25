<?php

namespace App\Traits;

use Symfony\Component\HttpKernel\HttpClient;

trait HtppClientTrait
{
    /**
     * @var HttpClient
     */
    protected $client;


    /**
     * @return HttpClient
     */
    public function getHttpClient() :HttpClient
    {
        return $this->client;
    }

    /**
     * @param HttpClient $client
     */
    public function setHttpClient(HttpClient $client)
    {
        $this->client = $client;
        
    }
}
