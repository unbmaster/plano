<?php
/*
 * This file is part of the https://github.com/unbmaster
 * For demonstration purposes, use it at your own risk.
 * (c) UnBMaster <unbmaster@outlook.com>
 * License GNU General Public License (GPL)
 */

namespace Domain;

use Infrastructure\PlanoRepository;

/**
 * PlanoService class
 *
 * Manipula Planos
 * @author UnBMaster <unbmaster@outlook.com>
 * @version 0.1.0
 */
class PlanoService
{

    /**
     * ObterPlanos Method
     *
     * Retorna planos (cursos e estágios)
     * @param array|null $id
     * @return bool|array
     */
    public function ObterPlanos(Array $id = null)
    {
        try {
            $repositorio = new PlanoRepository();
            $planos = $repositorio->getAll($id);
            return $planos;
        } catch (\Exception $e) {
            echo $e->getMessage();
            return false;
        }
    }
}