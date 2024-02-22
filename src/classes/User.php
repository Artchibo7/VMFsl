<?php

class User{
    private $_id;
    private $_nom;
    private $_prenom;
    private $_email;
    private $_telephone;
    private $_adresse;
    private $_role
    
    
    function __construct((string $nom, string $prenom, string $email, int|string $telephone, string $adresse, int|string $id = "à créer", $role = "user"))
    {
        $this->setId($id);
        $this->setNom($nom);
        $this->setPrenom($prenom);
        $this->setEmail($email);
        $this->setTelephone($telephone);
        $this->setAdresse($adresse);
        $this->setRole($role);
    }

    public function getId():int{
        return $this->_id;
    }
    public function setId(int|string $id){
        if(is_string($id) && $id === "à créer"){
            $this->_id = $this->CreerNouvelId();
        }else{
            $this->_id = $id;
        }
    }

    public function getNom(): string{
        return $this->_nom;
    }
    public function setNom(): string{
        $this->_nom = $nom;
    }

    public function getPrenom(): string{
        return $this->_prenom;
    }
    public function setPrenom(): string{
        $this->_prenom = $prenom;
    }

    public function getEmail(): string{
        return $this->_email;
    }
    public function setEmail(): string{
        $this->_email = $email;
    }

    public function getTelephone(): int{
        return $this->_telephone;
    }
    public function setTelephone(): int{
        $this->_telephone = $telephone;
    }

    public function getAdresse(): string{
        return $this->_adresse;
    }
    public function setAdresse(): string{
        $this->_adresse = $adresse;
    }public function getRole(): string{
        return $this->_role;
    }
    public function setRole(): void{
        $this->_role = $role;
    }


}

public function isAdmin(){
    if($this->getRole() == "admin"){
        return true;
    }else{
        return false;
    }
}

private function CreerNouvelId(){
    $Database = new Database();
    $users = $Database->getAllUsers();

    $IDs = [];

    foreach($users as $user){
        $IDs[] = $user->getId();
    }

    $i = 1;
    $unique = false;
    while($unique === false){
        if (in_array($i, $IDs)){
            $i ++;
        }else{
            $unique = true;
        }
    }
    return $i;

    public function getObjectToArray(): array{
        return[
            "id" => $this->getId(),
            "nom" => $this->getNom(),
            "prenom" => $this->getPrenom(),
            "email" => $this->getEmail(),
            "telephone" => $this->getTelephone(),
            "adresse" => $this->getAdresse(),
            "role" => $this->getRole()
        ];
    }
}