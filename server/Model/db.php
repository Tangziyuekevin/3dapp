<?php
class DB
{
    /**
     * @return DBUtils
     */
    public static function getDB() {
        $dsn = "sqlite:./sqlite/info.db";
        $pdo = new PDO($dsn);
        return $pdo;
    }

}

