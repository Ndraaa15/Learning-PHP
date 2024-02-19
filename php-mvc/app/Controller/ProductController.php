<?php

namespace Ndraaa15\PhpMvc\Controller;

class ProductController
{
  public function categories (string $id, string $category): void
  {
    echo "$id - $category";
  }
}
