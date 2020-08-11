<?php

namespace config;

class Router
{
    protected $routes = [];
    protected $params = [];

    function __construct()
    {
        echo 'I am a router class';
        //
    }

    public function add_route()
    {

    }

    public function check_route()
    {

    }

    public function run_route()
    {
        echo 'start';
    }
}
