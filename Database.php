<?php

Class Database
{
        public $connection;

        public function __construct()
        {

            $dsn= "mysql:host=localhost;port=3306;dbname=myapp;user=root;password=P@ssword;charset=utm8m64";
            $this-> connection = new PDO($dsn, 'root', 'P@ssword123', []);

        }


        public function query()
        {
            $statement = $this->connection->prepare($query);

            $statement -> execute();

            return $statement;
        }


}