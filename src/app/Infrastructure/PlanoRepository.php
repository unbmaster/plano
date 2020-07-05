<?php
/*
 * This file is part of the https://github.com/unbmaster
 * For demonstration purposes, use it at your own risk.
 * (c) UnBMaster <unbmaster@outlook.com>
 * License GNU General Public License (GPL)
 */

namespace Infrastructure;

use Domain\{PlanoRepositoryInterface};

/**
 * PlanoRepository Class
 *
 * Manipula dados do plano via SQLite
 * @author UnBMaster <unbmaster@outlook.com>
 * @version 0.1.0
 */
class PlanoRepository implements PlanoRepositoryInterface
{
    private $planos;

    /**
     * Retorna a lista de planos (cursos e estágios)
     * @param $id
     * @return array
     */
    public function getAll(Array $id) {
        $db = new \SQLite3('/db/plano.db');
        $where = '';
        if ($id) {
            $where = 'WHERE planoId in (' . implode(',', $id) . ')';
        }
        $res = $db->query("SELECT * FROM plano {$where}");
        while ($row = $res->fetchArray()) {
            $this->planos[] = [
                'planoId' => $row['planoId'],
                'titulo' => $row['titulo']
            ];
        }
        return $this->planos;
    }
}