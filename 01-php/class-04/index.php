<?php
require_once("inc/config.inc.php");
require_once("inc/Entities/Player.class.php");
require_once("inc/Entities/Team.class.php");
require_once("inc/FileManager.class.php");
require_once("inc/FileParser.class.php");
require_once("inc/Page.class.php");

$fileContent = FileManager::readCsvFile("./data/orioles.csv"); //static > ::
$team = new Team();
$team->setTeam(FileParser::convertToObject($fileContent));

// Global Variables
// $_POST
// $_GET
// $_COOKIE
// $_SESSION .....
if(!empty($_POST)){
    $newPlayer = new Player(
        $_POST["id"],
        $_POST["name"],
        $_POST["position"],
        $_POST["bat"],
        $_POST["throw"],
        $_POST["age"],
        $_POST["height"],
        $_POST["weight"],
        $_POST["bplace"]
    );
    $team->insertPlayer($newPlayer);
}

if(!empty($_GET)){
    $team->sortPlayers($_GET['sortby']);
    echo Page::playerTable($team->getTeam());
} else {
    echo Page::playerForm();
    echo Page::playersTable($team->getTeam());
}
// var_dump($fileContent);
// var_dump(FileParser::convertToObject($fileContent));
// var_dump($fileContent);
echo Page::pageHeader("Flex about");
echo Page::pageBanner();
// echo Page::mainContent();
echo Page::pageFooter();
echo Page::pageEnd();
// $page = new Page();
// $page->testing();