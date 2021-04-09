<?php
// Creates a Hero and adds it to the database
  function createHero($conn, $name) {
    $sql = "SELECT name FROM heroes";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
        if ($row["name"] == $name) {
          echo "There is already a hero with the name $name";
          return;
        }
      }
    } 
    
    $sql = "INSERT INTO heroes (name, about_me, biography)
    VALUES ('" . $name . "', 'Is really good at coding', 'Probably some AI coded by Jake')";
    if ($conn->query($sql) === TRUE) {
      echo "New Hero $name created successfully";
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
  }
    
// Adds a random ability from the abilities list to a specific hero
  function addRandomAbility ($conn, $name) {    
    $sql = "SELECT id FROM heroes WHERE name = '" . $name . "'";
    $result = $conn->query($sql);
    if ($conn->query($sql) == TRUE) {
        $heroID = ($result->fetch_assoc())["id"];
      } else {
        echo "Error getting heroID: " . $conn->error;
      }

    $sql = "SELECT id FROM abilities ORDER BY RAND() LIMIT 1";
    $result = $conn->query($sql);
    if ($conn->query($sql) == TRUE) {
        $abilityID = ($result->fetch_assoc())["id"];
      } else {
        echo "Error getting abilityID: " . $conn->error;
      }
    
    $query = "INSERT INTO ability_hero (hero_id, ability_id)
            VALUES (?, ?)";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("ss", $heroID, $abilityID);
    $stmt->execute(); 
  }
?>