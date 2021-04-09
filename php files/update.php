<?php 
// Restores the account of a given hero
  function restoreHero($conn, $heroID) {
    $sql = "SELECT statusID from heroes WHERE id=$heroID";
    $result = $conn->query($sql)->fetch_assoc()["statusID"];
    
    if ($result == 0) {
      $sql = "UPDATE heroes SET statusID = 1 WHERE id =$heroID";
      if ($conn->query($sql) === TRUE) {
        echo "Hero successfully restored!";
      } else {
        echo "Error deleting hero: " . $conn->error;
      }
      
    } elseif ($result == 1) {
        echo "Hero is already active!";
    } else {
        echo "Error deleting record: " . $conn->error;
    }
  }

// Adds a specfic ability to the user's Hero of choice
  function addAbility($conn, $heroID, $abilityID) {
    $sql = "INSERT INTO ability_hero (hero_id, ability_id) 
            VALUES ('$heroID', '$abilityID')";
    
    if ($conn->query($sql) === TRUE) {
      echo "New ability added!";
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
  }
?>