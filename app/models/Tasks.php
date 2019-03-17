<?php

namespace App\Models;

use PDOException;
use App\Logger;
use App\Db;

class Tasks
{
    /**
     * @var \PDO
     */
    private $connection;

    /**
     * ExchangeRatesDb constructor.
     */
    public function __construct()
    {
        $this->connection = Db::getInstance()->getConnection();
    }

    /**
     * @return array
     */
    public function selectFirstTask() {
        try {
            $sql = "SELECT requests.id AS `id`, offers.name AS `name`, requests.price AS `price`, requests.count AS `count`, operators.fio AS `fio` FROM requests 
                    JOIN offers ON requests.offer_id = offers.id 
                    JOIN operators ON requests.operator_id = operators.id
                    WHERE requests.count > 2
                    AND operators.id = 10 OR operators.id = 12";
            $select = $this->connection->query($sql);
            $allDates = $select->fetchAll(\PDO::FETCH_ASSOC);
            return $allDates;
        } catch(PDOException $e) {
            Logger::addError($e->getMessage());
            return ['error' => 'Ошибка запроса'];
        }
    }

    /**
     * @return array
     */
    public function selectSecondTask() {
        try {
            $sql = "SELECT offers.name AS `name`, SUM(requests.count) AS `count`, SUM(requests.price * requests.count) AS `price`
                    FROM requests 
                    JOIN offers ON requests.offer_id = offers.id
                    GROUP BY offers.name";
            $select = $this->connection->query($sql);
            $allDates = $select->fetchAll(\PDO::FETCH_ASSOC);
            return $allDates;
        } catch(PDOException $e) {
            Logger::addError($e->getMessage());
            return ['error' => 'Ошибка запроса'];
        }
    }

}