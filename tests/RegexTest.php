<?php

namespace Agneswagey\MovieApi;

use PHPUnit\Framework\TestCase;

class RegexTest extends TestCase
{
    public function testRegex()
    {
        $path = '/movie/tt12345';
        $pattern = "#^/movie/([0-9a-zA-Z]+)$#";
        $result = preg_match($pattern, $path, $variables);

        self::assertEquals(1, $result);
    }
}