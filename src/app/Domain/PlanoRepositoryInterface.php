<?php
/*
 * This file is part of the https://github.com/unbmaster
 * For demonstration purposes, use it at your own risk.
 * (c) UnBMaster <unbmaster@outlook.com>
 * License GNU General Public License (GPL)
 */

namespace Domain;

use PhpParser\Node\Expr\Array_;

/**
 * PlanoRepositoryInterface interface
 *
 * Manipula dados do plano presentes no SQLite
 * @author UnBMaster <unbmaster@outlook.com>
 * @version 0.1.0
 */
interface PlanoRepositoryInterface
{
    public function getAll(Array $id);
}