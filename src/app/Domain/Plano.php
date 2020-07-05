<?php
/*
 * This file is part of the https://github.com/unbmaster
 * For demonstration purposes, use it at your own risk.
 * (c) UnBMaster <unbmaster@outlook.com>
 * License GNU General Public License (GPL)
 */

namespace Domain;

/**
 * Plano class (Entity)
 *
 * @author UnBMaster <unbmaster@outlook.com>
 * @version 0.1.0
 */
class Plano
{
    private $planoId;
    private $titulo;

    function __construct(
        $planoId,
        $titulo)
    {
        $this->planoId = $planoId;
        $this->titulo = $titulo;
    }

    /**
     * @return PlanoId
     */
    public function getPlanoId(): int
    {
        return $this->planoId;
    }

    /**
     * @return Nome
     */
    public function getTitulo(): string
    {
        return $this->nome;
    }

}