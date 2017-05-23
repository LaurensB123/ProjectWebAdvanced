<?php

class PDOEvenementRepository implements EvenementRepository {
    private $connection = null;

    public function __construct(\PDO $connection)
    {
        $this->connection = $connection;
    }

    public function findAllEvenementen(){
        try {
            $statement = $this->connection->prepare("SELECT * FROM evenement;");
            $statement->execute();
            $results = $statement->fetchAll(\PDO::FETCH_ASSOC);

                if (count($results) > 0) {
                    return new Evenement($results["id"],$results["naam"],$results["beginDatum"],
                    $results["eindDatum"],$results["prijs"],$results["persoonId"]);
                } else {
                    return null;
                }
            } catch (\Exception $exception) {
                return $exception->getMessage();
        }
    }
    public function findAllEvenementenById($id){

        try {
            $statement = $this->connection->prepare("SELECT * FROM evenement WHERE id = ?");
            $statement->bindParam(1, $id, \PDO::PARAM_INT);
            $statement->execute();
            $results = $statement->fetchAll(\PDO::FETCH_ASSOC);
            //puts returned data in array
            if (count($results) > 0) {
                return new Evenement($results['id'], $results['naam'], $results['beginDatum'],
                    $results['eindDatum'], $results['prijs'], $results['persoonId']);
            } else {
                return null;
            }
        } catch (\Exception $exception) {
            return $exception->getMessage();
        }
    }
    public function findAllEvenementenByPersoon($persoon_id){

        try {
            $statement = $this->connection->prepare('SELECT * FROM evenement WHERE persoonId = ?');
            $statement->bindParam(1, $persoon_id, \PDO::PARAM_INT);
            $statement->execute();
            $results = $statement->fetchAll(\PDO::FETCH_ASSOC);
            $arrayResults = array();
            if (count($results) > 0) {
                foreach ($results as $event) {
                    array_push($arrayResults, new Evenement($event['id'], $event['naam'], $event['beginDatum'],
                        $event['eindDatum'], $event['prijs'], $event['persoonId']));
                }
                return $arrayResults;
            } else {
                return null;
            }
        } catch (\Exception $exception) {
            return $exception->getMessage();
        }
    }
    public function findAllEvenementenByDatum($beginDatum, $eindDatum){

        try {
            $statement = $this->connection->prepare('SELECT * FROM venement WHERE beginDatum = ? AND eindDatum = ?');
            $statement->bindParam(1, $beginDatum, \PDO::PARAM_STR);
            $statement->bindParam(2, $eindDatum, \PDO::PARAM_STR);
            $statement->execute();
            $results = $statement->fetchAll(\PDO::FETCH_ASSOC);
            $arrayResults = array();
            if (count($results) > 0) {
                foreach ($results as $event) {
                    array_push($arrayResults, new Evenement($event['id'], $event['naam'], $event['begindatum'],
                        $event['einddatum'], $event['prijs'], $event['persoonId']));
                }
                return $arrayResults;
            } else {
                return null;
            }
        } catch (\Exception $exception) {
            return $exception->getMessage();
        }
    }
    public function findAllEvenementenByPersoonDatum($persoon_id, $beginDatum, $eindDatum){
        try {
            $statement = $this->connection->prepare('SELECT * FROM evenement WHERE begindatum = ? AND einddatum = ? AND persoonId = ?');
            $statement->bindParam(1, $beginDatum, \PDO::PARAM_STR);
            $statement->bindParam(2, $eindDatum, \PDO::PARAM_STR);
            $statement->bindParam(3, $persoon_id, \PDO::PARAM_INT);
            $statement->execute();
            $results = $statement->fetchAll(\PDO::FETCH_ASSOC);
            $arrayResults = array();
            if (count($results) > 0) {
                foreach ($results as $event) {
                    array_push($arrayResults, new Evenement($event['id'], $event['naam'], $event['beginDatum'],
                        $event['eindDatum'], $event['prijs'], $event['persoonId']));
                }
                return $arrayResults;
            } else {
                return null;
            }
        } catch (\Exception $exception) {
            return $exception->getMessage();
        }
    }

    public function addEvenementen($evenement){
        try {
            $statement = $this->pdo->prepare("INSERT INTO evenement (naam, beginDatum, eindDatum, prijs, persoonId) VALUES (?, ?, ?, ?, ?);");
            $beginDatum = $evenement->getBeginDatum()->format("Y-m-d-h-m-s");
            $eindDatum = $evenement->getEinddatum()->format("Y-m-d-h-m-s");
            $naam = $evenement->getNaam();
            $persoonId = $evenement->getPersoonId();
            $prijs = $evenement->getPrijs();
            $statement->bindParam(1, $naam, PDO::PARAM_STR);
            $statement->bindParam(2, $beginDatum, PDO::PARAM_STR);
            $statement->bindParam(3, $eindDatum, PDO::PARAM_STR);
            $statement->bindParam(4, $persoonId, PDO::PARAM_INT);
            $statement->bindParam(5, $prijs, PDO::PARAM_INT);
            $statement->execute();
        } catch (\Exception $exception) {
            return null;
        }
    }
    public function updateEvenement($evenement){

        try {
            $statement = $this->pdo->prepare("UPDATE evenement SET naam=?, beginDatum=?, eindDatum=?, prijs=?, persoonId=?) WHERE id=?");
            $beginDatum = $evenement->getBeginDatum()->format("Y-m-d-h-m-s");
            $eindDatum = $evenement->getEinddatum()->format("Y-m-d-h-m-s");
            $naam = $evenement->getNaam();
            $persoonId = $evenement->getPersoonId();
            $prijs = $evenement->getPrijs();
            $statement->bindParam(1, $naam, PDO::PARAM_STR);
            $statement->bindParam(2, $beginDatum, PDO::PARAM_STR);
            $statement->bindParam(3, $eindDatum, PDO::PARAM_STR);
            $statement->bindParam(4, $persoonId, PDO::PARAM_INT);
            $statement->bindParam(5, $prijs, PDO::PARAM_INT);
            $statement->execute();
        } catch (\Exception $exception) {
            return null;
        }
    }
    public function deleteEvenement($id){
        try {
            $statement = $this->pdo->prepare("DELETE FROM venement WHERE id=?");
            $statement->bindParam(1, $id, PDO::PARAM_STR);
            $statement->execute();
        } catch (\Exception $exception) {
            return null;
        }
    }
}