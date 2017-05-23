<?php
namespace controller;
use model\EvenementRepository;
use view\EvenementJsonView;
use model\Evenement;

    class EvenementController {
        private $evenementRepository;
        private $view;

        public function __construct(EvenementRepository $evenementRepository, EvenementJsonView $view)
        {
            $this->evenementRepository = $evenementRepository;
            $this->view = $view;
        }

        public function handleFindAllEvenementen() {
            $evenement = $this->evenementRepository->findAllEvenementen();
            echo json_decode($evenement, JSON_PRETTY_PRINT);
        }

        public function handleFindAllEvenementenById($id)
        {
            $evenement = $this->evenementRepository->findAllEvenementenById($id);
            echo json_encode($evenement, JSON_PRETTY_PRINT);
        }
        public function handleFindAllEvenementenByPersoon($persoon_id)
        {
            $evenement = $this->evenementRepository->findAllEvenementenByPersoon($persoon_id);
            echo json_encode($evenement, JSON_PRETTY_PRINT);
        }
        public function handleFindAllEvenementenByDatum($beginDatum, $eindDatum)
        {
            $evenement = $this->evenementRepository->findAllEvenementenByDatum($beginDatum, $eindDatum);
            echo json_encode($evenement, JSON_PRETTY_PRINT);
        }
        public function handleFindAllEvenementenByPersoonDatum($persoon_id, $beginDatum, $eindDatum)
        {
            $evenement = $this->evenementRepository->findAllEvenementenByPersoonDatum($persoon_id, $beginDatum, $eindDatum);
            echo json_encode($evenement, JSON_PRETTY_PRINT);
        }
        public function handleAddEvenementen($event) {
            $evenement = $this->evenementRepository->addEvenementen($event);
            echo json_encode($evenement, JSON_PRETTY_PRINT);
        }
        public function handleUpdateEvenement($event) {
            $evenement = $this->evenementRepository->updateEvenement($event);
            echo json_encode($evenement, JSON_PRETTY_PRINT);
        }
        public function handleDeleteEvenement($id) {
            $evenement = $this->evenementRepository->deleteEvenement($id);
            echo json_encode($evenement, JSON_PRETTY_PRINT);
        }
    }
}
}