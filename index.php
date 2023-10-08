<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Formulaire 2</title>
</head>
<body>
<main>
    
<form  action="thanks.php" method="post">
        <div>
          <label  for="prénom">Prénom :</label>
          <input  type="text"  id="nom"  name="user_firstname" required= true>
        </div>
        <div>
          <label  for="nom">Nom :</label>
          <input  type="text"  id="nom"  name="user_lastname" required= true>
        </div>
        <div>
          <label  for="courriel">Courriel :</label>
            <input  type="email"  id="courriel"  name="user_email" required= true>
        </div>
        <div>
          <label  for="phone">Téléphone :</label>
          <input  type="text"  id="nom"  name="user_phone" required= true>
        </div>
        <div>
          <label  for="sujet">Sujet :</label>
          <select id="nom"  name="user_sujet" required= true>
            <option value="information">demande d'info</option>
            <option value="remboursement">remboursement</option>
            <option value="recours">recours</option>
          </select>
        </div>
        <div>
          <label  for="message">Message :</label>
          <textarea  id="message"  name="user_message" required= true></textarea>
        </div>
        <div  class="button">
          <button  type="submit">Envoyer votre message</button>
        </div>
      </form>
      </main>

</body>
</html>