<?php 

class Contractor 
{
    protected $electrician; 
    protected $plumber; 

    public function __construct($electrician, $plumber, $designer)

    {
        $this->electrician = $electrician;
        $this->plumber = $plumber;
        $this->designer = $designer;

    }

}

class QueryBuilder 
{
    protected $pdo; 

    public function __construct(PDO $pdo)
    {
        $this->pdo =  $pdo; 
    }

    public function selectAll($table)
    {
        $statement = $this->pdo->prepare("SELECT * FROM {$table}");

        $statement->execute();
        
        return $statement->fetchAll(PDO::FETCH_CLASS);
    } 

}