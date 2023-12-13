<?php
class Bike {
    private $bike_idBike;
    private $bike_imgBike;
    private $bike_nom;
    private $bike_type;
    private $bike_prix;
    private $bike_detail;
    private $bike_annee;
    private $bike_taille;
    private $bike_stock;

    public function __construct($bike_idBike = "", $bike_imgBike = "", $bike_nom = "", $bike_type = "", $bike_prix = "", $bike_detail = "", $bike_annee = "", $bike_taille = "", $bike_stock = "") {
        $this->bike_idBike = $bike_idBike;
        $this->bike_imgBike = $bike_imgBike;
        $this->bike_nom = $bike_nom;
        $this->bike_type = $bike_type;
        $this->bike_prix = $bike_prix;
        $this->bike_detail = $bike_detail;
        $this->bike_annee = $bike_annee;
        $this->bike_taille = $bike_taille;
        $this->bike_stock = $bike_stock;
    }

    public function getIdBike() {
        return $this->bike_idBike;
    }

    public function getImgBike() {
        return $this->bike_imgBike;
    }

    public function getBikeNom() {
        return $this->bike_nom;
    }

    public function getBikeType() {
        return $this->bike_type;
    }

    public function getBikePrix() {
        return $this->bike_prix;
    }

    public function getBikeDetail() {
        return $this->bike_detail;
    }

    public function getBikeAnnee() {
        return $this->bike_annee;
    }

    public function getBikeTaille() {
        return $this->bike_taille;
    }

    public function getBikeStock() {
        return $this->bike_stock;
    }

    public function setIdBike($bike_idBike) {
        $this->bike_idBike = $bike_idBike;
    }

    public function setImgBike($bike_imgBike) {
        $this->bike_imgBike = $bike_imgBike;
    }

    public function setBikeNom($bike_nom) {
        $this->bike_nom = $bike_nom;
    }

    public function setBikeType($bike_type) {
        $this->bike_type = $bike_type;
    }

    public function setBikePrix($bike_prix) {
        $this->bike_prix = $bike_prix;
    }

    public function setBikeDetail($bike_detail) {
        $this->bike_detail = $bike_detail;
    }

    public function setBikeAnnee($bike_annee) {
        $this->bike_annee = $bike_annee;
    }

    public function setBikeTaille($bike_taille) {
        $this->bike_taille = $bike_taille;
    }

    public function setBikeStock($bike_stock) {
        $this->bike_stock = $bike_stock;
    }
}
?>