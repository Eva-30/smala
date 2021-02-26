<?php 
$pseudo = htmlspecialchars($_POST['pseudo']);
$pseudo = strtolower($pseudo);
            
// Vérfication que la bdd de la disponibilite du pseudo
$stmt = $pdo->prepare('SELECT * FROM users WHERE user_pseudo = :pseudo');
$stmt->execute(array(
    ":pseudo"=>$pseudo
));
$resultat = $stmt->fetch();
return $resultat;
?>


    