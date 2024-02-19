<?php

namespace Ndraaa15\PhpMVC\Test;

use PHPUnit\Framework\TestCase;

class RegexTest extends TestCase
{
  public function testRegex(): void
  {
    $path = "/products/12345/categories/abcde";
    $pattern = "#^/products/([0-9a-zA-Z]*)/categories/([0-9a-zA-Z]*)$#";
    $result = preg_match($pattern, $path, $matches);
    array_shift($matches); // remove the first element cuz it's the whole string
    self::assertEquals(1, $result);
    var_dump($matches);
  }
}