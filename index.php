<?php

    use Psr\Http\Message\ServerRequestInterface as Request;
    use Psr\Http\Message\ResponseInterface as Response;
    require_once "vendor/autoload.php";
    
    $app = new \Slim\App();

    /*$app->get('/', function(Request $request, Response $response, array $args){
        return $response->getBody()->write('Index');
    });

    // Montando requisição _GET
    $app->get('/produtos', function(Request $request, Response $response, array $args){
        $limit = $request->getQueryParams()['limit'] ?? 10;
        return $response->getBody()->write("{$limit} Produtos carregados");
    });
    */

    // Montando requisição _POST
    $app->post('/produtos', function(Request $request, Response $response, array $args){
        $data = $request->getParsedBody();
        $nome = $data['nome'] ?? '';
        return $response->getBody()->write("Produto: $nome");
    });
    
    $app->run();


?>