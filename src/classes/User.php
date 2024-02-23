<?php

class User{
    private $_id;
    private $_nom;
    private $_prenom;
    private $_email;
    private $_telephone;
    private $_adresse;
    private $_role;
    
    
    function __construct(string $nom, string $prenom, string $email, int|string $telephone, string $adresse, int|string $id = "à créer", $role = "user")
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

    public function getNom(){
        return $this->_nom;
    }
    public function setNom($nom){
        $this->_nom = $nom;
    }

    public function getPrenom(){
        return $this->_prenom;
    }
    public function setPrenom($prenom){
        $this->_prenom = $prenom;
    }

    public function getEmail(){
        return $this->_email;
    }
    public function setEmail($email){
        $this->_email = $email;
    }

    public function getTelephone(){
        return $this->_telephone;
    }
    public function setTelephone($telephone){
        $this->_telephone = $telephone;
    }

    public function getAdresse(){
        return $this->_adresse;
    }
    public function setAdresse($adresse){
        $this->_adresse = $adresse;
    }public function getRole(){
        return $this->_role;
    }
    public function setRole($role): void{
        $this->_role = $role;
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

    }
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