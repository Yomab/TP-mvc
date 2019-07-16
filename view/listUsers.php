<?php
require '../controller/listUsersController.php';


?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <title>listUsers</title>
    </head>
    <body>
     <?php   require '../view/headerView.php'; ?>
        <form action="" method="POST">  
            <select name="selector">
                <option value="" selected disabled>selectionner un service</option>
                <option value="1" >Maintenance</option>
                <option value="2" >Web Developer</option>
                <option value="3" >Web Designer</option>
                <option value="4" >Référenceur</option>
                
            </select>
            <input type="submit" value="selectionner">
        </form>
    <?php if(empty($_POST['selector'])):?>
        
        <table class="highlight"> 
            <thead>
                <tr><th>Nom :</th><th>Prénom :</th><th>phone :</th><th>age :</th><th>addresse :</th><th>code postal :</th><th>téléphone :</th><th>service :</th></tr>
            </thead>
            <tbody>
                <?php foreach($displayUsersResult as $displayUser){?>
                <tr>
                    <td> <?=$displayUser['lastName']?>  </td>
                    <td> <?=$displayUser['firstName']?> </td>
                    <td> <?=$displayUser['phone']?> </td>
                    <td> <?=age($displayUser['birthDate'])?> </td>
                    <td> <?=$displayUser['adress']?> </td>
                    <td> <?=$displayUser['zipCode']?> </td>  
                    <td> <?=$displayUser['phone']?> </td>
                    <td> <?=$displayUser['id_Services']?> </td>
                </tr>
                
                <?php } ?>
            </tbody>
        </table>
        <?php else:
         foreach ($userResult as $value):?>
    <td><?= $value['lastName'] ?></td>
    <td><?= $value['firstName'] ?></td>
         <?php endforeach;
         
         endif;?>
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
