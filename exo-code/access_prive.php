<?php

$email = $_POST ['email'];
$password = $_POST ['password'];

$pdo= new PDO ('mysql:host=localhost;dbname=identifiants','root','');

$query= $pdo->query( 'SELECT * FROM apprenant');
$resultat = $query->fetch( PDO::FETCH_ASSOC);

$emaildb = $resultat['email'];
$passworddb = $resultat['password'];

if( $email === $emaildb && $passworddb === $password){

    echo "BRAVO C'EST GOOD TU ES CONNECTE";
}


else{

    
    echo "NON C'EST PAS LE BON MOT DE PASSE";
}

?>