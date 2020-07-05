<?php
/**
 * plano-data
 *
 * Gera dados fake de plano (cursos e estágios)
 * @author UnBMaster <unbmaster@outlook.com>
 * @license GNU General Public License (GPL)
 * @version 0.1.0
 */

unlink('/db/plano.db');

$sql = file_get_contents('plano.sql');

$db = new SQLite3('/db/plano.db');

$db->query($sql);

echo "Ok\n";