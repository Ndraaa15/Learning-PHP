<?php

namespace Ndraaa15\PhpMvc\Controller;

class HomeController
{
  public function index(): void
  {
    echo "HomeController.index()";
  }

  public function about(): void
  {
    echo "Creator : Gede Indra Adi Brata";
  }

  public function contact(): void
  {
    echo "Email : indrabrata599@gmail.com";
  }
}

