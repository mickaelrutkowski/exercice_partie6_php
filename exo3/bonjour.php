<!DOCTYPE html>
<html lang="fr" >
<head>
  <title>Réception de paramètres dans l'URL</title>
  <meta charset=utf-8 />
</head>
<body>

<?php if (isset($_GET['startDate']) && isset($_GET['endDate'])){?>
 <p><?= 'Bonjour début' .' '. $_GET['startDate'];?></p>
  <p><?= 'Bonjour fin' .' '. $_GET['endDate'];?></p>
<?php }
else{
  echo 'error';
}
?>

</body>
</html>
