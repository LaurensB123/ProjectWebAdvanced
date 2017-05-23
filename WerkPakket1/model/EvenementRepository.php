<?php

interface EvenementRepository {
    public function findAllEvenementen();
    public function findAllEvenementenById($id);
    public function findAllEvenementenByPersoon($persoon_id);
    public function findAllEvenementenByDatum($beginDatum, $eindDatum);
    public function findAllEvenementenByPersoonDatum($persoon_id, $beginDatum, $eindDatum);

    public function addEvenementen($evenement);
    public function updateEvenement($evenement);
    public function deleteEvenement($id);
}