<?php
namespace ExemploPDOMySQL;

Class MySQLConnection extends \PDO{
    public function _construct() {
        parent::_construct('mysql:host=localhost;dbname=biblioteca', 'root', '');
    }
}