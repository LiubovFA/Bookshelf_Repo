<?php

namespace config;

class Router
{
    protected $routes = [];
    protected $params = [];

    function __construct()
    {
        //считываем маршруты и запоминаем их в routes
        $routesPath = ROOT.'\config\routes.php';
        $this->routes = include ($routesPath);

        //echo 'I am a router class';
        //
    }

    public function add_route()
    {

    }

    public function check_route()
    {

    }

    private function getURI()
    {
        if (!empty($_SERVER['REQUEST_URI']))
        {
            return(trim($_SERVER['REQUEST_URI'], '/'));
        }
    }

    public function run_route()
    {
        //Получить стоку запроса
        $uri = $this->getURI();
       // echo $uri;

        //Проверить наличие такого запроса в routes
        foreach ($this->routes as $uriPattern => $path)
        {
            if (preg_match("~$uriPattern~", $uri))
            {
               //При совпадении определить контроллер и экшен
                $segments = explode('/', $path);
                $controllerName = array_shift($segments).'Controller';
                echo $controllerName;

                /*
                echo '<pre>';
                print_r($segments);
                echo '</pre>';*/
            }
        }
        //При совпадении определить контроллер и экшен
        //Подключить файл класса-контроллера
        //Создать объект, вызвать метод
       // print_r($this->routes);
        //echo 'start';
    }
}
