<?php


namespace App\Core;

use PDO;

class MysqlConnector
{
    /**
     * @var PDO
     */
    private $db;

    /**
     * MysqlConnector constructor.
     */
    public function __construct()
    {
        $connectionString = "mysql:host=" . getenv('DB_HOST') . ";dbname=" . getenv("MYSQL_DATABASE") . ";charset=utf8";
        $opt = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES => false,
        ];

        $this->db = new PDO($connectionString, 'root', getenv("MYSQL_ROOT_PASSWORD"), $opt);
    }

    /**
     * @return PDO
     */
    public function connect()
    {
        return $this->db;
    }

    /**
     * @param $queryString
     * @return mixed
     */
    public function query($queryString)
    {
        $query = $this->db->query($queryString);
        $query->execute();
        return $query->fetch();
    }
}