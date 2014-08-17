<?php

/**
 * Description of Reseptin_aine
 *
 * @author Pirjo
 */
class Reseptin_aine {

    private $raaka_aine_id;
    private $resepti_id;
    private $maara;

    //Miten tämän saa toimimaan???
    public function __construct($raaka_aine_id, $resepti_id, $maara) {
        $this->raaka_aine_id = $raaka_aine_id;
        $this->resepti_id = $resepti_id;
        $this->maara = $maara;
    }

    public static function getReseptin_aineet() {
        $yhteys = getTietokantayhteys();

        $sql = "SELECT raaka_aine_id, resepti_id, maara from reseptin_aine";
        $kysely = getTietokantayhteys()->prepare($sql);
        $kysely->execute();
        $tulokset = array();
        foreach ($kysely->fetchAll(PDO::FETCH_OBJ) as $tulos) {
            $reseptin_aine = new Reseptin_aine($tulos->raaka_aine_id, $tulos->resepti_id, $tulos->maara);

//$array[] = $muuttuja; lisää muuttujan arrayn perään. 
//Se vastaa melko suoraan ArrayList:in add-metodia.
            $tulokset[] = $reseptin_aine;
        }
        return $tulokset;
    }

    public function getMaara() {
        return $this->maara;
    } 
    
    public function setMaara($maara_ja_yksikko) {
        $this->maara = $maara_ja_yksikko;
    }

    public function maara() {
        echo $this->maara;
    }

}

?>