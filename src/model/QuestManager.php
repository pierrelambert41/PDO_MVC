<?php
/**
 * Created by PhpStorm.
 * User: pierre
 * Date: 19/10/17
 * Time: 10:10
 */

include 'Pdo.php';

class QuestManager extends Connect
{

    public function findAll()
    {
        $query = "SELECT * FROM quest";
        $statement = $this->pdo->query($query);

        return $statement->fetchAll();
    }

    public function find(int $id)
    {
        $query = "SELECT * FROM quest WHERE id=:id";
        $statement = $this->pdo->prepare($query);
        $statement->bindValue('id', $id, \PDO::PARAM_INT);
        $statement->execute();

        $persons = $statement->fetchAll();
        return $persons[0];
    }

}