<?php

use yii\db\Migration;

/**
 * Handles the creation of table `shops`.
 */
class m170822_063720_create_shops_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('shops', [
            'IdShop' => $this->primaryKey(),
            'TinNumber' => $this->string()->notNull(),
            'NameShop' => $this->string()->notNull(),
            'DateRegist' => $this->string()->notNull(),
            'DateRemove' => $this->string()->notNull(),
            'StatusShop' => $this->string()->notNull(),
            'OwnerShop' => $this->string()->notNull(),
            'PhoneNumber' => $this->string()->notNull(),
            'Address' => $this->string()->notNull(),
            'Email' => $this->string()->notNull(),
            
            

        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('shops');
    }
}
