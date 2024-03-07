<?php
    class InsertUserDb
    {
        private object $pdo;
        private string $username;
        private string $email;
        private string $password;

        public function __construct(object $pdo, string $username, string $email, string $password) {
            $this->username = $username;
            $this->email = $email;
            $this->password = $password;
            $this->pdo = $pdo;
        }

        private function HashPw() : string //Generates a secure password hash
        {
            $options = ['cost' => 12];//Level up the value to difficult the brute force

            return password_hash($this->password, PASSWORD_DEFAULT, $options);//Return the hashed pw
        }

        //Insert User
        public function InsertUser() 
        {
                $pushUser = new UserCreator($this->username, $this->email, $this->HashPw());
                $pushUser->SaveToDB($this->pdo);
        }
    }