<?php
use model\Evenement;
use model\PDOEvenementRepository;
require 'WerkPakket1/vendor/autoload.php';

class PDORepositoryTest extends PHPUnit\Framework\TestCase
{
    public function setUp()
    {
        $this->mockPDO = $this->getMockBuilder('PDO')
            ->disableOriginalConstructor()
            ->getMock();
        $this->mockPDOStatement =
            $this->getMockBuilder('PDOStatement')
                ->disableOriginalConstructor()
                ->getMock();
    }

    public function testVindEvenement()
    {
        $evenement = new Evenement(1, 'rock w', '2017-05-25' , '2017-05-25' , 1000, 4);
        $this->mockPDOStatement->expects($this->atLeastOnce())
            ->method('bindParam');
        $this->mockPDOStatement->expects($this->atLeastOnce())
            ->method('execute');
        $this->mockPDOStatement->expects($this->atLeastOnce())
            ->method('fetchAll')
            ->will($this->returnValue(
                [
                    [   'id' => $evenement->getId(),
                        'naam' => $evenement->getNaam(),
                        'begindatum' => $evenement->getBeginDatum(),
                        'einddatum' => $evenement->getEindDatum(),
                        'prijs' => $evenement ->getPrijs(),
                        'persoonId' => $evenement->getPersoonId()
                    ]
                ]));
        $this->mockPDO->expects($this->atLeastOnce())
            ->method('prepare')
            ->will($this->returnValue($this->mockPDOStatement));
        $pdoRepository = new PDOEvenementRepository($this->mockPDO);
        $actEvenement = $pdoRepository->findAllEvenementenById($evenement->getId());
        $this->assertEquals($evenement, $actEvenement);
    }


    public function testBestaatEvenement()
    {
        $evenement1 = new Evenement(1, 'rock w', '2017-05-25' , '2017-05-25' , 1000, 2);
        $evenement2 = new Evenement(2, 'rock w', '2017-05-25' , '2017-05-25' , 1000, 1);
        $evenements = Array($evenement1, $evenement2);
        $this->mockPDOStatement->expects($this->atLeastOnce())
            ->method('execute');
        $this->mockPDOStatement->expects($this->atLeastOnce())
            ->method('fetchAll')
            ->will($this->returnValue(
                [
                    [ 'id' => $evenement1->getId(),
                        'naam' => $evenement1->getNaam(),
                        'begindatum' => $evenement1->getBeginDatum(),
                        'einddatum' => $evenement1->getEindDatum(),
                        'prijs' => $evenement1 ->getPrijs(),
                        'persoonId' => $evenement1->getPersoonId()
                    ],
                    [ 'id' => $evenement2->getId(),
                        'naam' => $evenement2->getNaam(),
                        'begindatum' => $evenement2->getBeginDatum(),
                        'einddatum' => $evenement2->getEindDatum(),
                        'prijs' => $evenement2 ->getPrijs(),
                        'persoonId' => $evenement2->getPersoonId()
                    ]
                ]));
        $this->mockPDO->expects($this->atLeastOnce())
            ->method('prepare')
            ->will($this->returnValue($this->mockPDOStatement));
        $pdoRepository = new PDOEvenementRepository($this->mockPDO);
        $actEvenementen =
            $pdoRepository->findAllEvenementen();
        $this->assertEquals($evenements, $actEvenementen);
    }





    public function testVindEvenementPerPersoon()
    {
        $this->mockPDOStatement->expects($this->atLeastOnce())
            ->method('bindParam');
        $this->mockPDOStatement->expects($this->atLeastOnce())
            ->method('execute');
        $this->mockPDOStatement->expects($this->atLeastOnce())
            ->method('fetchAll')
            ->will($this->returnValue([]));
        $this->mockPDO->expects($this->atLeastOnce())
            ->method('prepare')
            ->will($this->returnValue($this->mockPDOStatement));
        $pdoRepository = new PDOEvenementRepository($this->mockPDO);
        $actEvenement = $pdoRepository->findAllEvenementenByPersoon(20);
        $this->assertEquals($actEvenement, '');
    }




    public function testVindEvenementOPDatum()
    {
        $this->mockPDOStatement->expects($this->atLeastOnce())
            ->method('bindParam');
        $this->mockPDOStatement->expects($this->atLeastOnce())
            ->method('execute');
        $this->mockPDOStatement->expects($this->atLeastOnce())
            ->method('fetchAll')
            ->will($this->returnValue([]));
        $this->mockPDO->expects($this->atLeastOnce())
            ->method('prepare')
            ->will($this->returnValue($this->mockPDOStatement));
        $pdoRepository = new PDOEvenementRepository($this->mockPDO);
        $actEvenement = $pdoRepository->findAllEvenementenByDatum('2017-05-17', '2017-05-17');
        $this->assertEquals($actEvenement, '');
    }



    public function testfindAllEvenementenPersoonDatum()
    {
        $evenement = new Evenement(1, 'rock w', '2017-05-25' , '2017-05-25' , 1000, 3);
        $allEvenementen = Array($evenement);
        $this->mockPDOStatement->expects($this->atLeastOnce())
            ->method('bindParam');
        $this->mockPDOStatement->expects($this->atLeastOnce())
            ->method('execute');
        $this->mockPDOStatement->expects($this->atLeastOnce())
            ->method('fetchAll')
            ->will($this->returnValue(
                [
                    [ 'id' => $evenement->getId(),
                        'naam' => $evenement->getNaam(),
                        'begindatum' => $evenement->getBeginDatum(),
                        'einddatum' => $evenement->getEindDatum(),
                        'prijs' => $evenement ->getPrijs(),
                        'persoonId' => $evenement->getPersoonId()
                    ]
                ]));
        $this->mockPDO->expects($this->atLeastOnce())
            ->method('prepare')
            ->will($this->returnValue($this->mockPDOStatement));
        $pdoRepository = new PDOEvenementRepository($this->mockPDO);
        $actEvenement =
            $pdoRepository->findAllEvenementenPersoonDatum($evenement->getKlantnummer() ,$evenement->getBeginDatum(), $evenement->getEindDatum());
        $this->assertEquals($allEvenementen, $actEvenement);
    }



    public function testAddEvent()
    {
        $evenement = new Evenement(1, 'rock w', '2017-05-25' , '2017-05-25' , 1000);
        $this->mockPDOStatement->expects($this->atLeastOnce())
            ->method('bindParam');
        $this->mockPDOStatement->expects($this->atLeastOnce())
            ->method('execute');
        $this->mockPDO->expects($this->atLeastOnce())
            ->method('prepare')
            ->will($this->returnValue($this->mockPDOStatement));
        $pdoRepository = new PDOEvenementRepository($this->mockPDO);
        $actEvenement = $pdoRepository->addEvenement($evenement);
        $this->assertEquals('done!', $actEvenement);
    }

    public function testUpdateEvent()
    {
        $evenement = new Evenement(1, 'rock w', '2017-05-25' , '2017-05-25' , 1000);
        $this->mockPDOStatement->expects($this->atLeastOnce())
            ->method('bindParam');
        $this->mockPDOStatement->expects($this->atLeastOnce())
            ->method('execute');
        $this->mockPDO->expects($this->atLeastOnce())
            ->method('prepare')
            ->will($this->returnValue($this->mockPDOStatement));
        $pdoRepository = new PDOEvenementRepository($this->mockPDO);
        $actEvenement = $pdoRepository->updateEvenement($evenement);
        $this->assertEquals('done!', $actEvenement);
    }

    public function tearDown()
    {
        $this->mockPDO = null;
        $this->mockPDOStatement = null;
    }
}