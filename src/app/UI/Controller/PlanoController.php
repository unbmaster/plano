<?php
/*
 * This file is part of the https://github.com/unbmaster
 * For demonstration purposes, use it at your own risk.
 * (c) UnBMaster <unbmaster@outlook.com>
 * License GNU General Public License (GPL)
 */

namespace Controller;

/**
 * planosController class
 *
 * Orquestra e trata requisições
 * @author UnBMaster <unbmaster@outlook.com>
 * @version 0.1.0
 */
class PlanoController
{
    public function planos($request, $response)
    {
        # Recupera id do plano, caso exista
        $uri = $request->getUri('id')->getQuery();
        parse_str($uri, $filters);
        $id = ($filters) ? explode(',', $filters['id']) : [];

        # Chama o caso de uso correspondente
        $planos = (new \Application\ObterPlanos)($id);
        $planos = json_encode($planos, JSON_PRETTY_PRINT|JSON_UNESCAPED_UNICODE);
        $response->getBody()->write($planos);
        return $response->withStatus(200);
    }
}