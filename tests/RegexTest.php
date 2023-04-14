<?php

namespace Agneswagey\MovieApi;

use Agneswagey\MovieApi\App\Router;
use PHPUnit\Framework\TestCase;

final class RegexTest extends TestCase
{
    public function testMatchedRegex()
    {
        $path = '/movie/tt12345';
        $pattern = Router::getPattern();
        $result = Router::isValidPath($path, $variables);
        $this->assertMatchesRegularExpression($pattern, $path);
    }

    public function testFailedRegex()
    {
        $path = '/title/123';
        $pattern = Router::getPattern();
        $result = Router::isValidPath($path, $variables);
        $this->assertDoesNotMatchRegularExpression($pattern, $path);
    }
}