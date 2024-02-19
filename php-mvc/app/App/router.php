<?php

namespace Ndraaa15\PhpMVC\App;

class Router
{
  private static array $routes = [];
  public static function add (string $method, string $path, string $controller, string $function ): void
  {
    self::$routes[] = [
      'method' => $method,
      'path' => $path,
      'controller' => $controller,
      'function' => $function
    ];
  }

  public  static function run (): void
  {
    $path = "/";

    if (isset($_SERVER['PATH_INFO']))
    {
      $path = $_SERVER['PATH_INFO'];
    }

    $method = $_SERVER['REQUEST_METHOD'];

    foreach (self::$routes as $route)
    {
      $pattern = "#^" . $route['path'] . "$#";
      if (preg_match($pattern, $path, $variables) && $route['method'] === $method)
      {
        $controller = new $route['controller'](); // create new object
        $function = $route['function']; // assign the function into variable
        // $controller->$function(); // call the function from class controller, we can use thi way to call the function from class (assign to var) but not if just write the function directly
        array_shift($variables);
        call_user_func_array([$controller, $function], $variables); // call the function from class controller
        return;
      }
    }

    http_response_code(404);
    echo "404 - Not Found";

  }
}