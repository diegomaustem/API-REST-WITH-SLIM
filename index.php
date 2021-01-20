<?php

    use Psr\Http\Message\ServerRequestInterface as Request;
    use Psr\Http\Message\ResponseInterface as Response;
    require_once "vendor/autoload.php";
    
    $app = new \Slim\App();

    $app->get('/', function(Request $request, Response $response, array $args){
        return $response->getBody()->write('Index');
    });

    $app->get('/produtos', function(Request $request, Response $response, array $args){
        $limit = $request->getQueryParams()['limit'] ?? 10;
        return $response->getBody()->write("{$limit} Produtos carregados");
    });
    
    $app->run();


?>