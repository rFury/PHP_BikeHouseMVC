<?php
class Accessory {
    private $idAcc, $Nom, $Type, $prix, $detail, $annee, $quantite, $marque, $stock, $Img;

    function __construct($idAcc = "", $Nom = "", $Type = "", $prix = "", $detail = "", $annee = "", $quantite = "", $marque = "", $stock = "", $Img = "") {
        $this->idAcc = $idAcc;
        $this->Nom = $Nom;
        $this->Type = $Type;
        $this->prix = $prix;
        $this->detail = $detail;
        $this->annee = $annee;
        $this->quantite = $quantite;
        $this->marque = $marque;
        $this->stock = $stock;
        $this->Img = $Img;
    }

    public function getIdAcc() {
        return $this->idAcc;
    }

    public function getNom() {
        return $this->Nom;
    }

    public function getType() {
        return $this->Type;
    }

    public function getPrix() {
        return $this->prix;
    }

    public function getDetail() {
        return $this->detail;
    }

    public function getAnnee() {
        return $this->annee;
    }

    public function getQuantite() {
        return $this->quantite;
    }

    public function getMarque() {
        return $this->marque;
    }

    public function getStock() {
        return $this->stock;
    }

    public function getImg() {
        return $this->Img;
    }

    public function setIdAcc($idAcc) {
        $this->idAcc = $idAcc;
    }

    public function setNom($Nom) {
        $this->Nom = $Nom;
    }

    public function setType($Type) {
        $this->Type = $Type;
    }

    public function setPrix($prix) {
        $this->prix = $prix;
    }

    public function setDetail($detail) {
        $this->detail = $detail;
    }

    public function setAnnee($annee) {
        $this->annee = $annee;
    }

    public function setQuantite($quantite) {
        $this->quantite = $quantite;
    }

    public function setMarque($marque) {
        $this->marque = $marque;
    }

    public function setStock($stock) {
        $this->stock = $stock;
    }

    public function setImg($Img) {
        $this->Img = $Img;
    }
}
?>