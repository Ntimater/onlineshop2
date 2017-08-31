
<?php
use yii\helpers\Html;
use yii\grid\GridView;
?>
<div class="container" >
    <h3><b><center><div class="intro-lead-in" >MARKET</div> <center></b></h3>


    <?php foreach ($shops as $abc): ?>

<<<<<<< HEAD
        <h3><p><?= $abc->NameShop?></p></center></h3>
=======
            <h3><p><?= $abc->NameShop?></p></center></h3>
>>>>>>> d168206b05d485086fe6f8f857d07e68049717a4

        <?php foreach ($abc->getItemes() as $index => $itemes):?>
        <?php if ($index % 3 == 0): ?> <div class="row"> <?php endif; ?>
        <div class="col-md-4">
            <div class="thumbnail">
                 <ul>
                    <li>

<<<<<<< HEAD
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
=======
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
>>>>>>> d168206b05d485086fe6f8f857d07e68049717a4

                            </form>
                        </div>
                    </li>


                </ul>
            </div>

        </div>





        <?php if (($index + 1) % 3 == 0 || count($abc->getItemes())==($index+1)): ?> </div><?php endif; ?>

    <?php endforeach;?>
        <hr>
    <?php endforeach; ?>
<<<<<<< HEAD
</div>
=======
</div>
>>>>>>> d168206b05d485086fe6f8f857d07e68049717a4
