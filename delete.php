<?php
// Soft Deletes a Hero based on the name given
  function deleteHero($conn, $heroID) {
    $sql = "SELECT statusID from heroes WHERE id=$heroID";
    $result = $conn->query($sql)->fetch_assoc()["statusID"];
    
    if ($result == 1) {
      $sql = "UPDATE heroes SET statusID = 0 WHERE id =$heroID";
      if ($conn->query($sql) === TRUE) {
        echo "Record deleted successfully";
      } else {
        echo "Error deleting hero: " . $conn->error;
      }
      
    } elseif ($result == 0) {
        echo "Hero has already been deleted";
    } else {
        echo "Error deleting record: " . $conn->error;
    }
  }

// Hard Deletes all instances of a specific ability based on abilityID and HeroID input
  function deleteAbility($conn, $heroID, $abilityID) {
    $sql = "DELETE FROM ability_hero WHERE hero_id = $heroID AND ability_id = $abilityID";
    
    if ($conn->query($sql) === TRUE) {
      echo "Ability deleted!";
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
  }
?>