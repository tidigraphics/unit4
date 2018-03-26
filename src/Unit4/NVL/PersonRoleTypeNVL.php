<?php
namespace Unit4\NVL;

use Unit4\AbstractApiEndpoint;

class PersonRoleTypeNVL extends AbstractApiEndpoint
{
    const API_SUFFIX = 'PersonRoleTypeNVL';

    public function get()
    {
        $response = $this->apiClient->request(
            $this->configuration->getApiRoute(static::API_SUFFIX)
        );

        $decodedResponse = json_decode($response);

        return $decodedResponse;
    }
}