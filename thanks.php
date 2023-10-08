<?php 

$errors = [];

$data = array_map('trim', $_POST);
$data = array_map('htmlentities', $data);

if($_SERVER['REQUEST_METHOD'] === 'POST') {
   
    if (!isset($data['user_firstname']) || empty($data['user_firstname']))  
    $errors[]= "Renseignez le champ";

    if (!isset($data['user_lastname']) || empty($data['user_lastname']))  
    $errors[]= "Renseignez le champ";

    if (!isset($data['user_email']) || empty($data['user_email']))  
    $errors[]= "Renseignez le champ";

    if (!filter_var($data['user_email'], FILTER_VALIDATE_EMAIL)) 
    $errors[] = "l'adresse mail n'est pas au bon format.";

    if (!isset($data['user_phone']) || empty($data['user_phone']))  
    $errors[]= "Renseignez le champ";

    if (!isset($data['user_sujet']) || empty($data['user_sujet']))  
    $errors[]= "Renseignez le champ";

    if (!isset($data['user_message']) || empty($data['user_message']))  
    $errors[]= "Renseignez le champ";

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    <body>
        <?php if (count($errors) > 0) : ?>             
            <div class="errorPanel">
                <p>Nous rencontrons les problèmes suivants pour traiter votre demande : </p>
                    <ul>
                        <?php foreach ($errors as $error) : ?>
                            <li><?= $error ?></li>
                        <?php endforeach; ?>
                    </ul>
            </div>        
                <div>
                    <?php else : ?>
                         <p>Merci <?= $_POST['user_firstname'].' '.$_POST['user_lastname']?> de nous avoir contacté à propos de “<?=$_POST['user_sujet']?>”.</p>
                        <br>
                        <p>Un de nos conseillers vous contactera soit à l’adresse <?=$_POST['user_email']?> ou par téléphone au <?=$_POST['user_phone']?> dans les plus brefs délais pour traiter votre demande : </p>
                        <br>
                        <p><?=$_POST['user_message']?> </p>
                </div>
            <?php endif; ?>

    </body>
</html>