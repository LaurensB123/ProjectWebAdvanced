<?php
require "AltoRouter.php";
require_once "vendor/autoload.php";
use \model\PDOEvenementRepository;
use \view\EvenementJsonView;
use \controller\EvenementController;

$user = "root";
$password = "";
$database = "monkeybusiness";
$hostname = "127.0.0.1";
$pdo = null;

try {
    $pdo = new PDO("mysql:host=$hostname; dbname=$database",$user,$password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $evenementPDORepository = new PDOEvenementRepository($pdo);
    $JsonView = new JsonView();
    $evenementController = new EvenementController($evenementPDORepository, $JsonView);

    $router = new AltoRouter();
    $router->setBasePath("/WerkPakket1");

    $router->map("GET","/evenement",
        function () use (&$evenementController)
        {   header("Content-Type: application/json");
            $evenementController->handleFindAllEvenement();});

    $router->map('GET','/evenement/[i:id]',
        function($id) use (&$evenementController) {
            header("Content-Type: application/json");
            $evenementController->handleFindAllEvenementenById($id);
        }
    );

    $router->map('GET','/evenement/persoon/[i:id]',
        function($id) use (&$evenementController) {
            header("Content-Type: application/json");
            $evenementController->handleFindAllEvenementenByPersoon($id);
        }
    );

    $router->map('GET','/evenement/from/[:from]/until/[:until]',
        function($from, $until) use (&$evenementController) {
            header("Content-Type: application/json");
            $evenementController->handleFindAllEvenementenByDatum($from, $until);
        }
    );

    $router->map('GET','/evenement/klant/[i:id]/from/[:from]/until/[:until]',
        function($id, $from, $until) use (&$evenementController) {
            header("Content-Type: application/json");
            $evenementController->handleFindAllEvenementenByPersoonDatum($id, $from, $until);
        }
    );

    $router->map('POST', '/evenement/',
        function () use ($evenementController) {
            $content = trim(file_get_contents("php://input"));
            $decoded = json_decode($content, true);
            $evenement = new Evenement($decoded["naam"], new DateTime($decoded["beginDatum"]), new DateTime($decoded["eindDatum"]), $decoded["persoon_id"], $decoded["prijs"]);
            $evenementController->createEvent($evenement);
        }
    );

    $router->map('PUT', '/evenement/',
        function () use ($evenementController) {
            $content = trim(file_get_contents("php://input"));
            $decoded = json_decode($content, true);
            $evenement = new Evenement($decoded["naam"], new DateTime($decoded["beginDatum"]), new DateTime($decoded["eindDatum"]), $decoded["persoon_id"], $decoded["prijs"]);
            $evenement->setId($decoded["id"]);
            $evenementController->updateEvent($evenement);
        }
    );

    $router->map('DELETE', '/evenement/[i:id]/',
        function ($id) use ($eventController) {
            $eventController->deleteEvenement($id);
        }
    );


    $match = $router->match();
    if ($match  && is_callable($match["target"])) {
        call_user_func_array($match["target"], $match["params"]);
    } else {
        echo "Error";
    }

} catch (Exception $exception) {
    echo $exception->getMessage();
}