<?php
    session_start();
    require_once "../core/connection.inc.php";
    
    class DbQuery
    {        
        private function QueryDB(object $pdo)// Query the DB and save the info for later use
        {
            $query = "SELECT * FROM users";
            $stmt = $pdo->prepare($query);//Prepare statement
            $stmt->execute();

            return $stmt->fetchAll(PDO::FETCH_ASSOC);//Return a associative array from the results of the query           
        }

        public function GetQuery(object $pdo)//Public function to return the query values from $QueryDB
        {
            return $this->QueryDB($pdo);
        }
    }
