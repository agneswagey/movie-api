<?php

namespace Agneswagey\MovieApi\Controller;

class BaseController
{
    protected Api $api;

    public function __construct()
    {
        $this->api = new Api();
    }
}