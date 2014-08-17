<?php
  /** Tiedosto, jonka tarkoituksena on näyttää reseptin tiedot.
    * Olettaa, että muuttuja $resepti on asetettu. */ 
?><div class="resepti">
  <div class="row nimi">
    <label>Nimi:</label>
    <div class="value"><?php echo $resepti->getNimi(); ?></div>
  </div>
  <div class="row gluteeniton">
    <label>Gluteeniton:</label>
    <div class="value"><?php echo $resepti->getGluteeniton(); ?></div>
  </div>
  <div class="row maidoton">
    <label>Maidoton:</label>
    <div class="value"><?php echo $resepti->getMaidoton(); ?></div>
  </div>
</div>