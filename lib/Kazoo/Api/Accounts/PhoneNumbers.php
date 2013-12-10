<?php

namespace Kazoo\Api\Accounts;

use Kazoo\Client;
use Kazoo\Api\AbstractApi;

/**
 * Creating, editing, deleting and listing devices
 *
 * @link   https://2600hz.atlassian.net/wiki/display/docs/Accounts+API
 */
class PhoneNumbers extends AbstractApi {
    
    public function __construct(Client $client) {
        parent::__construct($client);
        $this->setSchemaName("phone_numbers.json");
        $this->setResourceNoun("PhoneNumber");
    }
}