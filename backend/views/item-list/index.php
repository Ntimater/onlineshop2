<?php

use yii\helpers\Html;
use yii\grid\GridView;
?>

<?php foreach ($shops as $abc): ?>

    <p><?= $abc->NameShop ?> </p>
    <?php foreach ($abc->getItemes() as $itemes): ?>

        <ul>

             <li><?= $itemes->Description ?> , <?= $itemes->Quantity ?>,<?= $itemes->Price?> , <?= $itemes->Categories ?>,<?= $itemes->DedicatePers?></li>

        </ul>
    <?php endforeach;?>

    <hr>
<?php endforeach; ?>