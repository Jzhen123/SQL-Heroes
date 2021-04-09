<?php
// Gets every row of information for each hero that is active and returns JSON
  function getAllHeroes($conn) {
    $sql = "SELECT id, name, about_me, biography FROM heroes WHERE statusID = 1";
    $result = $conn->query($sql);
    $data=array();
    if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
        array_push($data, $row);
      }
    }
    return json_encode($data); 
  }

// Selects a hero by utilizing id and returns JSON
  function getHeroByID($conn, $heroId) {
    $sql = "SELECT * FROM heroes WHERE id = " . $heroId;
    $result = $conn->query($sql); 
    $data=array(); 
    
    if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
        array_push($data, $row);
      }
    }

    $listOfAbilities = getAllHeroesAbilities($conn);
    $listOfAbilities = json_decode($listOfAbilities);
    foreach ($listOfAbilities as $hero) {
      if ($hero->name == $data[0]["name"]) {
        $heroAbility =  $hero->abilities;
      }
    }
    
    $data[0]["abilities"] =  $heroAbility;
    return json_encode($data);   
  }

// Shows every Heroes current abilities
  function getAllHeroesAbilities($conn) {
    $sql = "SELECT heroes.name, abilities.ability
            FROM ((ability_hero        
            INNER JOIN heroes ON ability_hero.hero_id = heroes.id)
            INNER JOIN abilities ON ability_hero.ability_id = abilities.id)";
    $result = $conn->query($sql);
    $data=array();
    $combined = [];

    if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
        array_push($data, $row);
      }
    }
     
    foreach($data as $el) {
        if(!isset($combined[$el["name"]])) {
            $combined[$el["name"]]["name"] = $el["name"];
            $combined[$el["name"]]["abilities"] = $el["ability"];
        } else {
            $combined[$el["name"]]["abilities"] .= ", " . $el["ability"];
        }
    }
    $combined = array_values($combined); 
    return json_encode($combined);
  }

// Shows all the current abilities
  function showAllAbilities($conn) {
    $sql = "SELECT * FROM abilities";
    $result = $conn->query($sql);
    
    $data=array();
    if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
        array_push($data, $row);
      }
    }
    return json_encode($data); 
  }
?>