<?php

namespace App\Traits;
use GuzzleHttp\Client;

trait RequestService 
{
    public function request($method, $requestUrl, $formParams = [], $headers = [])
    {
        \Log::info($requestUrl);
        // This is calling for everyrequest route. In controller construct method calling service and where it is sending base uri and secret of particular request
        $client = new Client([
            'base_uri' => $this->baseUri
        ]);
        
        if (isset($this->secret)) {
            $headers['Authorization'] = $this->secret;
        }
        $response = $client->request($method, $requestUrl,
            [
                'form_params' => $formParams,
                'headers' => $headers
            ]
        );
        
        return $response->getBody()->getContents();
    }
}