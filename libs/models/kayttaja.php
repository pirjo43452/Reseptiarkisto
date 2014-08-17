<?php

/**
 * Description of Kayttaja
 *
 * @author Pirjo
 */
class Kayttaja {

    private $id;
    private $kayttaja;
    private $salasana;
    private $rooli;

    public function __construct($id, $kayttaja, $salasana, $rooli) {
        $this->id = $id;
        $this->kayttaja = $kayttaja;
        $this->salasana = $salasana;
        $this->rooli = $rooli;
    }

    public static function getKayttajat() {
        $yhteys = getTietokantayhteys();

        $sql = "SELECT id,kayttaja, salasana, rooli from kayttaja";
        $kysely = getTietokantayhteys()->prepare($sql);
        $kysely->execute();
        $tulokset = array();
        foreach ($kysely->fetchAll(PDO::FETCH_OBJ) as $tulos) {
            $kayttaja = new Kayttaja($tulos->id, $tulos->kayttaja, $tulos->salasana, $tulos->rooli );
            
//$array[] = $muuttuja; lisää muuttujan arrayn perään. 
//Se vastaa melko suoraan ArrayList:in add-metodia.
            $tulokset[] = $kayttaja;
        }
        return $tulokset;
    }
    
    public function getUsername() {
        return $this->kayttaja;
    }

}
?>

<!--
$yhteys = getTietokantayhteys();

$sql = "SELECT id,tunnus, password from users";
$kysely = getTietokantayhteys()->prepare($sql); 
$kysely->execute();

$rivit = $kysely->fetchAll();
echo $rivit[0]['tunnus'];

$rivit = $kysely->fetchAll(PDO::FETCH_OBJ);
echo $rivit[0]->tunnus;

public static function etsiKaikkiKayttajat() {
$sql = "SELECT id,tunnus, password FROM users";
$kysely = getTietokantayhteys()->prepare($sql); $kysely->execute();

$tulokset = array();
foreach($kysely->fetchAll(PDO::FETCH_OBJ) as $tulos) {
$kayttaja = new Kayttaja();
$kayttaja->setId($tulos->id);
$kayttaja->setTunnus($tulos->tunnus);
$kayttaja->setSalanana($tulos->salasana);

//$array[] = $muuttuja; lisää muuttujan arrayn perään. 
//Se vastaa melko suoraan ArrayList:in add-metodia.
$tulokset[] = $kayttaja;
}
return $tulokset;
}
-->
