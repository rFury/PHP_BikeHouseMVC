<?php
class connexion
{
    private $dbc;

    public function __construct()
    {
        $this->dbc = new PDO('mysql:host=localhost;dbname=bike_house', 'root', '');
    }

    public function getCnx()
    {
        return $this->dbc;
    }
}
?>