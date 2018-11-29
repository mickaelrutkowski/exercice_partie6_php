<!DOCTYPE html>
<html lang="fr" >
<head>
  <title>Réception de paramètres dans l'URL</title>
  <meta charset=utf-8 />
</head>
<body>

<?php if (isset($_GET['language']) && isset($_GET['server'])){?>
 <p><?= 'langage' .' '. $_GET['language'];?></p>
  <p><?= 'server' .' '. $_GET['server'];?></p>
<?php }
else{
  echo 'error';
}
?>

</body>
</html>
