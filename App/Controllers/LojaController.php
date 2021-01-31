<?php

namespace App\Controllers;

use App\DAO\MySQL\LojasDAO;
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

final class LojaController
{
    public function getLojas(Request $request, Response $response, array $args): Response
    {
        $lojasDAO = new LojasDAO();
        $lojas = $lojasDAO->getAllLojas();
        $reponse = $response->withJson($lojas);
        return $response;
    }

    public function insertLoja(Request $request, Response $response, array $args): Response
    {
        $response = $response->withJson([
            'message' => 'Post or Post'
        ]);
        return $response;
    }

    public function updateLoja(Request $request, Response $response, array $args): Response
    {
        $response = $response->withJson([
            'message' => 'Update or Update'
        ]);
        return $response;
    }

    public function deleteLoja(Request $request, Response $response, array $args): Response
    {
        $response = $response->withJson([
            'message' => 'Delete or Delete'
        ]);
        return $response;
    }
}

?>