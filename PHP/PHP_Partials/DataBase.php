<?php
// connect to the database and execute a query

class DataBase
{
    public $connection;
    public $statment;
    public function __construct($config, $username = "root", $password = "Hazem2003h")
    {



        //better way to create DSN
        $dsn = "mysql:" . http_build_query($config, "", ";");

        // $dsn = "mysql:host={$config['host']};dbname={$config['dbname']};port={$config['port']};charser={$config['charset']}";

        $this->connection = new PDO($dsn, $username, $password, [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]);
    }
    public function query($query, $params = [])
    {


        $this->statment = $this->connection->prepare($query);

        $this->statment->execute($params);

        return $this;
    }

    public function find()
    {
        return $this->statment->fetch();
    }
    public function findorfail()
    {
        $result = $this->find();

        if (!$result) {
            abort(Response::NotFound);
        }
        return $result;
    }
    public function fetchall()
    {
        return $this->statment->fetchAll();
    }
}
