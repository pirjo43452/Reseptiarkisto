<?php

/**
 * Description of Raaka_aine
 *
 * @author Pirjo
 */
class Raaka_aine {

    private $id;
    private $raaka_aine;

    public function __construct($id, $raaka_aine) {
        $this->id = $id;
        $this->raaka_aine = $raaka_aine;
    }

    public static function getRaaka_aineet() {
        $yhteys = getTietokantayhteys();

        $sql = "SELECT id, raaka_aine from raaka_aine";
        $kysely = getTietokantayhteys()->prepare($sql);
        $kysely->execute();
        $tulokset = array();
        foreach ($kysely->fetchAll(PDO::FETCH_OBJ) as $tulos) {
            $raaka_aine = new Raaka_aine($tulos->id, $tulos->raaka_aine);

//$array[] = $muuttuja; lisää muuttujan arrayn perään. 
//Se vastaa melko suoraan ArrayList:in add-metodia.
            $tulokset[] = $raaka_aine;
        }
        return $tulokset;
    }

    public function getRaaka_aine() {
        return $this->raaka_aine;
    }
    
    public function setRaaka_aine($aine) {
        $this->raaka_aine = $aine;
    }

    public function raaka_aine() {
        echo $this->raaka_aine;
    }

}

$sokeri = new Raaka_aine("sokeri");

$sokeri->raaka_aine();
$sokeri->getRaaka_aine();
?>