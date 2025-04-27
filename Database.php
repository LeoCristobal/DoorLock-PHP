<?php

class Database
{
    public $pdo;
    public function __construct($config, $username = 'root', $password = '')
    {
        $dsn = "mysql:" . http_build_query($config, '', ';');
        $this->pdo = new PDO($dsn, $username, $password, [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);
    }
    public function query($query, $params = [])
    {
        $statement = $this->pdo->prepare($query);
        $statement->execute($params);
        return $statement;
    }
}
