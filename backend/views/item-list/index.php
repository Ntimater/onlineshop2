<?php

use yii\helpers\Html;
use yii\grid\GridView;
?>

<?php foreach ($shops as $abc): ?>

    <p><?= $abc->NameShop ?> </p>
    <?php foreach ($abc->getItemes() as $itemes):

        $i=$itemes->IdItem;


        ?>

        <ul>

             <li><?= $itemes->Description ?> , <?= $itemes->Quantity ?>,<?= $itemes->Price?> , <?= $itemes->Categories ?>,<?= $itemes->DedicatePers?></li>
            <td width="112"><img src="img/IT009.jpg" width="130" height="100" /></td>

        </ul>
    <?php endforeach;?>

    <hr>
<?php endforeach; ?>

