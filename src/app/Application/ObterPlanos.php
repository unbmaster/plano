<?php
/*
 * This file is part of the https://github.com/unbmaster
 * For demonstration purposes, use it at your own risk.
 * (c) UnBMaster <unbmaster@outlook.com>
 * License GNU General Public License (GPL)
 */

namespace Application;

use Domain\{PlanoService};

/**
 * ObterPlanos class
 *
 * Realiza Caso de Uso: Obter Planos
 * @author UnBMaster <unbmaster@outlook.com>
 * @version 0.1.0
 */
class ObterPlanos
{
    public function __invoke($id = null) {

        # Obter os planos (cursos e estágios) disponíves
        $service = new PlanoService();
        $planos = $service->ObterPlanos($id);
        return $planos;
    }
}