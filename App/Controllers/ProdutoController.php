<?php

namespace App\Controllers;

use App\DAO\MySQL\ProdutosDAO;
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

final class ProdutoController
{
    public function getProdutos(Request $request, Response $response, array $args): Response
    {

        $produtosDAO = new ProdutosDAO();
        $produtos = $produtosDAO->getAllProdutos();
        $reponse = $response->withJson($produtos);

        $response = $response->withJson([
            'message' => 'getProducts'
        ]);
        
        return $response;
    }

    public function insertProduto(Request $request, Response $response, array $args): Response
    {
        $response = $response->withJson([
            'message' => 'insertProduct'
        ]);
        return $response;
    }

    public function updateProduto(Request $request, Response $response, array $args): Response
    {
        $response = $response->withJson([
            'message' => 'updateProduct'
        ]);
        return $response;
    }

    public function deleteProduto(Request $request, Response $response, array $args): Response
    {
        $response = $response->withJson([
            'message' => 'deleteProduct'
        ]);
        return $response;
    }
}

?>