<?php
  include 'read.php'; // Imports read.php functions
  include 'connect.php'; // Imports connect.php functions
  include 'create.php'; // Imports create.php functions
  include 'delete.php'; // Imports delete.php functions
  include 'update.php'; // Imports update.php functions

  $route = $_GET['route']; // Stores the route in a variable
  switch ($route) {
    // Gets all of the Heroes and their about me's
    case "getAllHeroes":                 
      $myData = getAllHeroes($conn);
      echo $myData;
      break;
    // Gets all of the Heroes and their abilities
    case "getAllHeroesAbilities":
      $myData = getAllHeroesAbilities($conn);
      echo $myData;
      break;       
    // Gets all the abilities
    case "showAllAbilities":
      $myData = showAllAbilities($conn);
      echo $myData;
      break;
    // Creates a new hero a user given name and a random ability
    case "createHero":
      $name = $_GET["name"];
      createHero($conn, $name);
      addRandomAbility($conn, $name);
      break;
    // Gets a Hero and its information using a user given ID
    case "getHeroByID":
      $id = $_GET["hero_id"];
      $myData = getHeroByID($conn, $id);
      echo $myData;
      break;
    // Restores a Hero with a user given ID
    case "restoreHero":
      $id = $_GET["hero_id"];
      restoreHero($conn, $id);
      break;
    // Adds an ability to a hero. Ability and Hero chosen by user
    case "addAbility":
      $heroID = $_GET["hero_id"];
      $abilityID = $_GET["ability_id"];
      addAbility($conn, $heroID, $abilityID);
      break;  
    // Deletes a Hero with a user given ID
    case "deleteHero":
      $id = $_GET["hero_id"];
      deleteHero($conn, $id);
      break;
    // Deletes all instances of a certain ability for a Hero chosen by the user
    case "deleteAbility":
       $heroID = $_GET["hero_id"];
       $abilityID = $_GET["ability_id"];
       deleteAbility($conn, $heroID, $abilityID);
       break;
    default:
      $myData = json_encode([]);
  }
    $conn->close();
?>