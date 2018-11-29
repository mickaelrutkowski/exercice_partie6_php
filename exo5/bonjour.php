<!DOCTYPE html>
<html lang="fr" >
<head>
  <title>Réception de paramètres dans l'URL</title>
  <meta charset=utf-8 />
</head>
<body>

<?php if (isset($_GET['week'])){?>
 <p><?= 'week' .' '. $_GET['week'];?></p>
<?php }
else{
  echo 'error';
}
?>

</body>
</html>
