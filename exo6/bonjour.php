<!DOCTYPE html>
<html lang="fr" >
<head>
  <title>Réception de paramètres dans l'URL</title>
  <meta charset=utf-8 />
</head>
<body>

<?php if (isset($_GET['building']) && isset($_GET['room'])){?>
 <p><?= 'building' .' '. $_GET['building'];?></p>
  <p><?= 'room' .' '. $_GET['room'];?></p>
<?php }
else{
  echo 'error';
}
?>

</body>
</html>
