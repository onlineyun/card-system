<?php
 namespace Doctrine\DBAL\Driver; interface Connection { function prepare($prepareString); function query(); function quote($input, $type=\PDO::PARAM_STR); function exec($statement); function lastInsertId($name = null); function beginTransaction(); function commit(); function rollBack(); function errorCode(); function errorInfo(); } 