
<?php

use yii\helpers\Html;
use yii\grid\GridView;
?>
<div class="container" >
    <h3><b><center><div class="intro-lead-in" >MARKET</div> <center></b></h3>


    <?php foreach ($shops as $abc): ?>

            <h3><p><?= $abc->NameShop?></p></center></h3>

                <?php foreach ($abc->getItemes() as $index => $itemes):?>
                <?php if ($index % 3 == 0): ?> <div class="row"> <?php endif; ?>
                <div class="col-md-4">
                <div class="thumbnail">
                     <ul>
                        <li>

                            <?= $itemes->Description ?> ,
                            <?= $itemes->Quantity ?>,
                            <font color="red"><?= $itemes->Price ?></font>,
                            <?= $itemes->Categories ?>,
                            <?= $itemes->DedicatePers?>
                            <hr><img src="http://www.nyc.gov.rw/uploads/RTEmagicC_Tshirt.jpg.jpg" alt="google.com">
                            <div class="radio-group">
                                <form action="">
                                    <input type="radio" name="gender" value="1"> Buy
                                    <input type="radio" name="gender" value="2"> Booking
                                    <input type="submit" value="Approve">

                                </form>
                            </div>
                        </li>


                    </ul>
                </div>

                </div>





        <?php if (($index + 1) % 3 == 0): ?> </div><?php endif; ?>

    <?php endforeach;?>



        </div>
        <hr>

    <?php endforeach; ?>
</div>
