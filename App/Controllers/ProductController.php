<?php

namespace App\Controllers;

use App\DAO\MySQL\LojasDAO;
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

final class ProductController
{
    public function getProducts(Request $request, Response $response, array $args): Response
    {
        $response = $response->withJson([
            "message" => "Hello Word"
        ]); 

        $lojaDAO = new LojasDAO();
        $lojaDAO->teste();
        return $response;
    }
}

?>