<?php

namespace Core;

use Core\Config;
use TexLab\MyDB\DB;
use TexLab\MyDB\DbEntity;
use TexLab\MyDB\QueryBuilderTrait;
use TexLab\MyDB\Runner;

class Login
{
    private $table;

    public function __construct()
    {
        $this->table = new Runner(
            DB::Link([
                'host' => Config::MYSQL_HOST,
                'username' => Config::MYSQL_USER_NAME,
                'password' => Config::MYSQL_PASSWORD,
                'dbname' => Config::MYSQL_DATABASE
            ])
        );
    }

//    public function userCheck(string $login, string $password): bool
//    {
//        return !empty($this->table->runSQL(
//            'SELECT*FROM form WHERE login="' . $login . '" AND password="' . $password . '"'
//        ));
//    }

//    public function userCheck2(string $login, string $password): bool
//    {
//        return !empty($this
//            ->table
//            ->setWhere('login="' . $login . '" AND password="' . $password . '"')
//            ->get()
//        );
//    }

    public function userCheck(string $login, string $password)
    {

        return $this->table->runSQL(
                <<<SQL
SELECT `group`.`kod` 
FROM `group`,`users` 
WHERE `group`.`id` = `users`.`group_id`
AND login="$login" AND password = "$password"
SQL
            )[0]['kod'] . "<br>";

    }

    public function lines()
    {
        echo $this->table->runSQL(
                <<<SQL
SELECT COUNT(*)
FROM `group`,`users`
SQL

            )[0]['COUNT(*)'] . ' - Количество стоблбцов';
    }

}