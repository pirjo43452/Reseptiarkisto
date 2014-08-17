<?php
  /** Tiedosto, jonka tarkoituksena on näyttää lista reseptejä.
    * Olettaa, että muuttujassa $tiedot on kentät reseptit. */ 
?>
<h1>Reseptit</h1>
<p>Reseptejä yhteensä <?php echo count($reseptit); ?> kpl</p>  
<div class="reseptit">
  <?php foreach($reseptit as $resepti): ?>
  <?php require 'resepti.php'; ?>
  <?php endforeach; ?>
</div>