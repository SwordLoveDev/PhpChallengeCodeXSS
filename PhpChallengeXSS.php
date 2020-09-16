<center>
<form method="post">  <!-- On peux mettre get aussi. -->
  <textarea name="text" placeholder="Votre commentaire"></textarea></br>
  <input type="submit" name="bouton" value="Envoyer" />
</form>

<?php
if(isset($_POST["bouton"])){
  $text = $_POST["text"];
  echo "<p>Commentaire : </p>  ".$text;
}?>

</center>