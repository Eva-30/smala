<?php



if(isset($_POST['pseudo'])){

      try{
     
            $pdo = new PDO(DB_DRIVER . ":host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=" . DB_CHARSET, DB_LOGIN, DB_PASS, DB_OPTIONS);
             
            $pseudo = htmlspecialchars($_POST['pseudo']);
            $pseudo = strtolower($pseudo);
             

            // Vérfication que la bdd de la disponibilite du pseudo

            $stmt = $pdo->prepare('SELECT * FROM users WHERE user_pseudo = :pseudo');

            $stmt->execute(array(
                ":pseudo"=>$pseudo
            ));

            $resultat = $stmt->fetch();

            return $resultat;
           
            //Afficher le résultat si pseudo trouver dans la bdd afficher le form de modif


        }catch(PDOException $e) {
     
             // en cas d'erreur, on récup et on affiche, grâce à notre try/catch
             exit("❌🙀💀 OOPS :\n" . $e->getMessage());
     
             }


    }