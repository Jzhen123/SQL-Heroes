<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>SQL Heroes</title>
  </head>
  <body>
    <h1 class="text-center pt-3 pb-2">SQL Heroes!</h1>
    <h4 class="text-center">Use any of the actions below!</h4>

  <div class="card mx-auto mt-3 p-4" style="width: 600px;">
    
    <h3 class="mb-0">Main:</h3>
    <p class="mb-0">Displays all the Heroes:</p>
    <div><i>-Get</i> <a href="/switchcase.php?route=getAllHeroes" target="_blank">/switchcase.php?route=getAllHeroes</a></div>
    <p class="mb-0">Displays all Heroes' Abilities:</p>
    <div><i>-Get</i> <a href="/switchcase.php?route=getAllHeroesAbilities" target="_blank">/switchcase.php?route=getAllHeroesAbilities</a></div>
    <p class="mb-0">Displays all the abilities:</p>
    <div><i>-Get</i> <a href="/switchcase.php?route=showAllAbilities" target="_blank">/switchcase.php?route=showAllAbilities</a></div>
    
    <h5 class="mb-0 mt-4"><i>Default ID for everything is 1</i></h5>
    
    <h3 class="mb-0 mt-0">Create:</h3>
      <p class="mb-0 mt-1">Creates a hero with random powers:</p>
    <div><i>-Get</i> <a href="/switchcase.php?route=createHero&name=Jimmy" target="_blank">/switchcase.php?route=createHero&amp;name={name}</a></div>
    
    <h3 class="mb-0 mt-4">Read:</h3>
      <p class="mb-0 mt-1">Shows information including abilities about a specific hero using their ID:</p>
    <div><i>-Get</i> <a href="/switchcase.php?route=getHeroByID&hero_id=1" target="_blank">/switchcase.php?route=getHeroByID&amp;hero_id={id}</a></div>
      
    <h3 class="mb-0 mt-4">Update:</h3>
      <p class="mb-0 mt-1">Restores a deleted Hero's profile:</p>
    <div><i>-Get</i> <a href="/switchcase.php?route=restoreHero&hero_id=1" target="_blank">/switchcase.php?route=restoreHero&amp;hero_ind={id}</a></div>
      <p class="mb-0 mt-1">Add an ability to any hero using a Hero's ID and an ability ID:</p>
    <div><i>-Get</i> <a href="/switchcase.php?route=addAbility&hero_id=1&ability_id=1" target="_blank">/switchcase.php?route=addAbility&amp;hero_ind={id}&amp;ability_id={id}</a></div>
    
    <h3 class="mb-0 mt-4">Delete:</h3>
      <p class="mb-0 mt-1">Soft Deletes a Hero's profile:</p>
    <div><i>-Get</i> <a href="/switchcase.php?route=deleteHero&hero_id=1" target="_blank">/switchcase.php?route=deleteHero&amp;hero_id={id}</a></div>
      <p class="mb-0 mt-1">Delete an ability from any hero using a Hero's ID and an ability ID:</p>
    <div><i>-Get</i> <a href="/switchcase.php?route=deleteAbility&hero_id=1&ability_id=1" target="_blank">/switchcase.php?route=deleteHero&amp;hero_id={id}&amp;ability_id={id}</a></div>
  </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
  </body>
</html>