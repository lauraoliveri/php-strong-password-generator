<?php 


function GeneratePassword($plen) {
    $password='';


    $allCharacters='ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefjhijklmnopqrstuvwxyz1234567890!?&%$/()_';

    for ( $i=0; $i < $plen ; $i++) { 

        $randomNum= rand(0,strlen($allCharacters)- 1);
        var_dump($allCharacters[$randomNum]);
    }
    
    return $password;
}


$length= null;
if (isset($_GET['length'])) {
    $length = intval($_GET['length']);


    // la password ha un min di 3 e un max di 15 caratteri
    if ($length >= 3 && $length <= 15) {
        $generatedPassword = GeneratePassword('length');

        var_dump($generatedPassword);
    }
}

?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Strong Password Generator</title>
</head>
<body>
    <main>
        <div>
            <form method="GET">
                <label for="inputPassword5" class="form-label">Password</label>
                <input type="text" name="length" class="form-control" placeholder="Metti la lunghezza della password" min="3" max="15" required>
            </form>
        </div>

        <div>
        <!-- <?php 

        ?> -->
        </div>
    </main>
</body>
</html>