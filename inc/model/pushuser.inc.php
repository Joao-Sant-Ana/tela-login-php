<?php
    require_once "../controller/verifyerrors.inc.php";
    class UserCreator
    {
        private string $username;//Username propertie
        private string $email;//Email proppertie
        private string $hashpassword;//Password proppertie

        public function __construct(string $username, string $email, string $hashpassword) {
            $this->username = $username;
            $this->email = $email;
            $this->hashpassword = $hashpassword;
        }

        private function PushToDB(object $pdo, string $username, string $email, string $pw)//Inserts user data into the database.
        {
            $query = "INSERT INTO users (username, email, password) VALUE (:username, :email, :password)";//SQL query

            $stmt = $pdo->prepare($query);//Prepare the query
            $stmt->bindParam(":username", $username);//Use the properties to fill the placeholders of the query
            $stmt->bindParam(":email", $email);
            $stmt->bindParam(":password", $pw);//Here we use the hashed PW

            $stmt->execute();//Execute the query inside the SQL
        }

        public function SaveToDB(object $pdo)//Public call to the 'PushToDB' method for more secure
        {
            $this->PushToDB($pdo, $this->username, $this->email, $this->hashpassword);//Properties use as parameters
        }
    }