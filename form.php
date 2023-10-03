

<form  action="thanks.php" method="post">
        <div>
          <label  for="prénom">Prénom :</label>
          <input  type="text"  id="nom"  name="user_firstname">
        </div>
        <div>
          <label  for="nom">Nom :</label>
          <input  type="text"  id="nom"  name="user_lastname">
        </div>
        <div>
          <label  for="courriel">Courriel :</label>
            <input  type="email"  id="courriel"  name="user_email">
        </div>
        <div>
          <label  for="phone">Téléphone :</label>
          <input  type="text"  id="nom"  name="user_phone">
        </div>
        <div>
          <label  for="sujet">Sujet :</label>
          <select id="nom"  name="user_sujet">
            <option value="information">demande d'info</option>
            <option value="remboursement">remboursement</option>
            <option value="recours">recours</option>
          </select>
        </div>
        <div>
          <label  for="message">Message :</label>
          <textarea  id="message"  name="user_message"></textarea>
        </div>
        <div  class="button">
          <button  type="submit">Envoyer votre message</button>
        </div>
      </form>

  
