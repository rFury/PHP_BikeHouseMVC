<?php
class User {
    public $user_id;
    public $user_nom;
    public $prenom;
    public $mail;
    public $telephone;
    public $adresse;
    public $passwordX;

    public function __construct($user_id = "", $user_nom = "", $prenom = "", $mail = "", $telephone = "", $adresse = "", $passwordX = "") {
        $this->user_id = $user_id;
        $this->user_nom = $user_nom;
        $this->prenom = $prenom;
        $this->mail = $mail;
        $this->telephone = $telephone;
        $this->adresse = $adresse;
        $this->passwordX = $passwordX;
    }

    public function getUserId() {
        return $this->user_id;
    }

    public function getUserNom() {
        return $this->user_nom;
    }

    public function getPrenom() {
        return $this->prenom;
    }

    public function getMail() {
        return $this->mail;
    }

    public function getTelephone() {
        return $this->telephone;
    }

    public function getAdresse() {
        return $this->adresse;
    }

    public function getPasswordX() {
        return $this->passwordX;
    }

    public function setUserId($user_id) {
        $this->user_id = $user_id;
    }

    public function setUserNom($user_nom) {
        $this->user_nom = $user_nom;
    }

    public function setPrenom($prenom) {
        $this->prenom = $prenom;
    }

    public function setMail($mail) {
        $this->mail = $mail;
    }

    public function setTelephone($telephone) {
        $this->telephone = $telephone;
    }

    public function setAdresse($adresse) {
        $this->adresse = $adresse;
    }

    public function setPasswordX($passwordX) {
        $this->passwordX = $passwordX;
    }
}


?>
