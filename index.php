<?php 
  $tervehdys = "Heippa!"; 
?><!DOCTYPE HTML>
<html>
<head><title><?php echo $tervehdys; ?></title></head>
<body>
  <h1><?php echo $tervehdys; ?></h1>
  <?php echo "Hei maailma!", "Hei ", $nimi; ?>
  <?php
  
//Lista asioista array-tietotyyppiin laitettuna:
$lista = array("Kirahvi", "Trumpetti", "Jeesus", "Parta");
?><!DOCTYPE HTML>
<html>
  <head><title>Otsikko</title></head>
  <body>
    <h1>Listaelementtitesti</h1>
    <ul>
    <?php foreach($lista as $asia) { ?>
      <li><?php echo $asia; ?></li>
    <?php } ?>
    </ul>
  </body>
</html>

<?php if ($a == 5): ?>
A is equal to 5
<?php endif; ?>


<?php
if ($a == 5):
    echo "a equals 5";
    echo "...";
elseif ($a == 6):
    echo "a equals 6";
    echo "!!!";
else:
    echo "a is neither 5 nor 6";
endif;
?>


</body>
</html>
