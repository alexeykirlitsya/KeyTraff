<?php

namespace App;

class Db
{
    /**
     * @var object
     */
    private static $instance;
    /**
     * @var string
     */
    private $host = DB_HOST;
    /**
     * @var string
     */
    private $dbName = DB_NAME;
    /**
     * @var string
     */
    private $user = DB_USER;
    /**
     * @var string
     */
    private $pass = DB_PASS;
    /**
     * @var \PDO
     */
    private $connection;
    /**
     * Db constructor.
     */
    public function __construct()
    {
        $dsn = "mysql:host=$this->host;dbname=$this->dbName;charset=utf8";
        $opt = [
            \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION,
            \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC,
            \PDO::ATTR_EMULATE_PREPARES => false
        ];

        $this->connection = new \PDO ($dsn, $this->user, $this->pass, $opt);
    }
    /**
     * Singleton get instance
     * @return Db
     */
    public static function getInstance()
    {
        if (!self::$instance) {
            self::$instance = new self();
        }
        return self::$instance;
    }
    /**
     * Get connection
     * @return \PDO
     */
    public function getConnection()
    {
        return $this->connection;
    }
}