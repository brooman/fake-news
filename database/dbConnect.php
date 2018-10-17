<?php

declare(strict_types=1);

class dbConnect
{
    //Config
    private $fileName = __DIR__.'/newsfeed.sqlite';

    //PDO object
    private $pdo;

    public function __construct()
    {
        //Create PDO connection
        // Create (connect to) SQLite database in file
        $dsn = "sqlite:$this->fileName";
        $this->pdo = new PDO($dsn);
        // Set errormode to exceptions
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE,
                            PDO::ERRMODE_EXCEPTION);
    }

    /**
     * Get data from database.
     *
     * @param string $query
     * @param array  $params
     *
     * @return array
     */
    public function getData(string $query, array $params): array
    {
        $sth = $this->pdo->prepare($query);
        $sth->execute($params);

        return $sth->fetchAll();
    }

    /**
     * INSERT / UPDATE / DELETE data.
     *
     * @param string $query
     * @param array  $params
     *
     * @return array
     */
    public function setData(string $query, array $params): array
    {
        $sth = $this->pdo->prepare($query);
        $sth->execute($params);
    }
}
