<?php

namespace Agneswagey\MovieApi\Middleware;

interface Middleware
{
    function before(): void;
}