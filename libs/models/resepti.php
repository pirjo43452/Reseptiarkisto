<?php

/**
 * Description of Resepti
 *
 * @author Pirjo
 */
class Resepti {

    private $id;
    private $reseptin_nimi;
    private $annokset;
    private $valmisteluaika;
    private $kypsymisaika;
    private $uunin_asteet;
    private $munaton;
    private $maidoton;
    private $gluteeniton;
    private $alkuruoka;
    private $paaruoka;
    private $jalkiruoka;
    private $leivonnainen;
    private $suolainen_leivonnainen;
    private $salaatti;
    private $keitto;
    private $kuva;
    private $valmistusohje;
    private $laatija;

    public function __construct($id, $reseptin_nimi, $annokset, $valmisteluaika, $kypsymisaika, $uunin_asteet, $munaton, $maidoton, $gluteeniton, $alkuruoka, $paaruoka, $jalkiruoka, $leivonnainen, $suolainen_leivonnainen, $salaatti, $keitto, $kuva, $valmistusohje, $laatija) {
        $this->id = $id;
        $this->reseptin_nimi = $reseptin_nimi;
        $this->annokset = $annokset;
        $this->valmisteluaika = $valmisteluaika;
        $this->kypsymisaika = $kypsymisaika;
        $this->uunin_asteet = $uunin_asteet;
        $this->munaton = $munaton;
        $this->maidoton = $maidoton;
        $this->gluteeniton = $gluteeniton;
        $this->alkuruoka = $alkuruoka;
        $this->paaruoka = $paaruoka;
        $this->jalkiruoka = $jalkiruoka;
        $this->leivonnainen = $leivonnainen;
        $this->suolainen_leivonnainen = $suolainen_leivonnainen;
        $this->salaatti = $salaatti;
        $this->keitto = $keitto;
        $this->kuva = $kuva;
        $this->valmistusohje = $valmistusohje;
        $this->laatija = $laatija;
    }

    public static function getReseptit() {
        $yhteys = getTietokantayhteys();

        $sql = "SELECT id, reseptin_nimi, annokset, valmisteluaika, kypsymisaika, uunin_asteet, munaton, maidoton, gluteeniton, alkuruoka, paaruoka, jalkiruoka, leivonnainen, suolainen_leivonnainen, salaatti, keitto, kuva, valmistusohje, laatija from resepti";
        $kysely = getTietokantayhteys()->prepare($sql);
        $kysely->execute();
        $tulokset = array();
        foreach ($kysely->fetchAll(PDO::FETCH_OBJ) as $tulos) {
            $resepti = new Resepti($tulos->id, $tulos->reseptin_nimi, $tulos->annokset, $tulos->valmisteluaika, $tulos->kypsymisaika, $tulos->uunin_asteet, $tulos->munaton, $tulos->maidoton, $tulos->gluteeniton, $tulos->alkuruoka, $tulos->paaruoka, $tulos->jalkiruoka, $tulos->leivonnainen, $tulos->suolainen_leivonnainen, $tulos->salaatti, $tulos->keitto, $tulos->kuva, $tulos->valmistusohje, $tulos->laatija);

//$array[] = $muuttuja; lisää muuttujan arrayn perään. 
//Se vastaa melko suoraan ArrayList:in add-metodia.
            $tulokset[] = $resepti;
        }
        return $tulokset;
    }

    public function getReseptin_nimi() {
        return $this->reseptin_nimi;
    }

    public function getAnnokset() {
        return $this->annokset;
    }

    public function getValmisteluaika() {
        return $this->valmisteluaika;
    }

    public function getKypsymisaika() {
        return $this->kypsymisaika;
    }

    public function getUunin_asteet() {
        return $this->uunin_asteet;
    }

    public function getKuva() {
        return $this->kuva;
    }

    public function getValmistusohje() {
        return $this->valmistusohje;
    }

    public function getLaatija() {
        return $this->laatija;
    }

    public function setReseptin_nimi($reseptin_nimi) {
        $this->$reseptin_nimi;
    }

    public function setAnnokset($annokset) {
        $this->$annokset;
    }

    public function setValmisteluaika($valmisteluaika) {
        $this->$valmisteluaika;
    }

    public function setKypsymisaika($kypsymisaika) {
        $this->$kypsymisaika;
    }

    public function setUunin_asteet($uunin_asteet) {
        $this->$uunin_asteet;
    }

    public function setKuva($kuva) {
        $this->$kuva;
    }

    public function setValmistusohje($valmistusohje) {
        $this->$valmistusohje;
    }

    public function setLaatija($laatija) {
        $this->$laatija;
    }

    public function resepti() {
        echo $this->resepti;
    }

}

?>