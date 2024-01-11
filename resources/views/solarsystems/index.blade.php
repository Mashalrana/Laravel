<?php 
foreach($solarSystems as $solarSystem): ?>
    <p><?= $solarSystem->name ?> - Number of Planets: <?= $solarSystem->planets_count ?></p>
<?php endforeach; ?>
