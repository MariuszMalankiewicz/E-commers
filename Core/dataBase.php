<?php

class Database
{

    public $connection;

    public function __construct($config, $username = 'root', $password = '')
    {
        
        $dsn = ('mysql:'.http_build_query($config, '', ';'));

        try 
        {
            $this->connection = new PDO($dsn, $username, $password, [
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            ]);
        }
        catch (PDOException $e) 
        {
            print "Error!: " . $e->getMessage() . "<br/>";

            die();
        }

    }

    public function query($query, $param = [])
    {
        $statement = $this->connection->prepare($query);

        $statement->execute($param);

        return $statement;
    }

}
?>