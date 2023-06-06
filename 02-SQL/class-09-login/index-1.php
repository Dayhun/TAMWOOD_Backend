<?php

require_once("./inc/config.inc.php");
require_once("./inc/Entities/User.class.php");
require_once("./inc/Utilities/PDOService.class.php");
require_once("./inc/Utilities/DAO/UserDAO.class.php");
require_once("./inc/Utilities/LoginManager.class.php");
require_once("./inc/Utilities/Page.class.php");

session_start();
LoginManager::verifyLogin();
UserDAO::startDb();

$currentUser = $_SESSION["username"];
echo Page::getPageHeader();
// if ( ! empty($_POST)) {
//     $newUser = new User();
//     $newUser->setFName($_POST['fName']);
//     $newUser->setLName($_POST['lName']);
//     $newUser->setEmail($_POST['email']);
//     $newUser->setAge($_POST['age']);
//     $newUser->setUsername($_POST['username']);
//     $newUser->setGender($_POST['gender']);

//     $newPass = password_hash($_POST['password'], PASSWORD_DEFAULT);
//     $newUser->setPassword($newPass);

//     $userExist = UserDAO::getUserByUsername($_POST['username']);
    
//     if (!$userExist) {
//         UserDAO::insertUser($newUser);  
//         echo Page::successMessage();
//         unset($_POST);
//     }
// }

// echo Page::formNewUser();

echo "Hello" . $currentUser->getFName() . ", ". $currentUser->getLastName();

echo '<a href="logout.php">Log out</a>';

echo Page::userTable(
    UserDAO::getAllUsers()
);

echo Page::getPageFooter();