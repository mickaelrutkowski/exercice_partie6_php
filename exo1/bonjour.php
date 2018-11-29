<!DOCTYPE html>
<html lang="fr" >
<head>
  <title>Réception de paramètres dans l'URL</title>
  <meta charset=utf-8 />
</head>
<body>
    <?php
if (isset($_GET['age'])){
  echo 'Bonjour j\'ai' .' '. $_GET['nom'] .' '. 'ans';
}
else{
  echo 'il faut renseigner un age';
}
?>
  <p>Bonjour <?php echo $_GET['prenom'] . ' ' . $_GET['nom']; ?> !</p>
</body>
</html>
