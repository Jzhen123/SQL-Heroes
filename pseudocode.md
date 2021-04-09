CRUD Operations for the Facebook for Heroes:

    Create - hero, ability, arch nemesis, rival, sidekick, love interest, parents (create a new record in the database)

    Read - all heroes, heroes that have the flying ability, relationship type, love triangles (reading records in the database, out of multiple tables(related))

    Update - hero’s bio, new abilities, lose abilities, win/loses (battles), sidekicks (modifies an existing record, where condition - id = immutable number)

    Delete - cascade and delete the base or do a soft delete (delete the record, where condition - id = immutable number)

——————————————

Actions:

    Add a new Hero

    Make a relationship between two heroes

    Add a Relationship Type

    Add a new Ability

    Assign or link an existing Ability to a Hero (ability id, hero id)

    Modify existing relationship between heroes

——————————————

Functions:

    getAllHeroes - $conn param, returns JSON formatted list of all heroes

    createHero - $conn param, 'INSERT'($id, $name, $about_me, $biography, $image_url) as params. 
        -Create in CRUD

    getHeroByID - $conn param, heroID, JSON formatted list of the specific hero
        -READ in CRUD

    updateHero - $conn param, ID required to choose hero, 'SET'($id, $name, $about_me, $biography, $image_url) as params.
        -UPDATE in CRUD

    deleteHero - $conn param, ID required to choose hero, "DELETE" using given ID.



    


    
