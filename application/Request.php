<?php

class Request
{
    private $_controlador;
    private $_metodo;
    private $_argumentos;
    
    public function __construct() {
        if(isset($_GET['url'])){
                $url = filter_input(INPUT_GET, 'url', FILTER_SANITIZE_URL);
                $url = explode('/', $url);
    }
}
}
