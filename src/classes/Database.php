<?php
final class Database{
    private $_DB;

    public function __construct(){
        $this->_DB = __DIR__ . "/../csv/users.csv";
    }

    public function getAllUsers(): array{
        $connexion = fopen($this->_DB, "r");
        $users = [];

        while(($user = fgetcsv($connexion, 1000, ",")) !== FALSE){
            $users[] = new User($user[1], $user[2], $user[3], $user[4], $user[0], $user[5]);
        }

        fclose($connexion);
        return $users;
    }

    public function getThisUsersById(int $id): User|bool{
        $connexion = fopen($this->_DB, "r");
        while(($user = fgetcsv($connexion, 1000, ",")) !==FALSE){
            if((int) $user[0] === $id){
                $user = new User($user[1], $user[2], $user[3], $user[4], $user[0], $user[5]);
                break;
            }else{
                $user = false;
            }
        }
        return $user;
    }

    public function saveUsers(User $user): bool{
        $connexion = fopen($this->_DB, "ab");
        $return = fputcsv($connexion, $user->getObjectoArray());
        fclose($connexion);
        return $return;
    }

}