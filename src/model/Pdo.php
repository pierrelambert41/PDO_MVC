<?php
/**
 * Created by PhpStorm.
 * User: pierre
 * Date: 19/10/17
 * Time: 10:07
 */


class Connect
{
    protected $pdo;

    public function __construct()
    {
        $this->pdo = new \PDO(DSN, USERNAME, PASSWORD);
    }

}