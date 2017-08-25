<?php

use yii\db\Migration;

/**
 * Handles the creation of table `itemes`.
 */
class m170822_092202_create_itemes_table extends Migration
{
    /**
     * @inheritdoc
     */
     public function up()
    {
        $this->createTable('itemes', [
            'IdItem' => $this->primaryKey(),
            'DateRegist' => $this->string()->notNull(),
            'DateExpiration' => $this->string()->notNull(),
            'Quantity' => $this->string()->notNull(),
            'Price' => $this->string()->notNull(),
            'Description' => $this->string()->notNull(),
            'Image' => $this->string()->notNull(),
            'Categories' => $this->string()->notNull(),
            'DedicatePers' => $this->string()->notNull(),
            'PhoneNumber' => $this->string()->notNull(),
            'StatusItem' => $this->string()->notNull(),
            'IdFromShop' => $this->integer()->notNull(),
           
     

        ]);
         // creates index for column `IdItem`
           $this->createIndex(
            'idx-itemes-itemes_id',
            'itemes',
            'IdItem'
        );

        // add foreign key for table `Shops`
        $this->addForeignKey(
            'fk-itemes-itemes_id',
            'itemes',
            'IdFromShop',
            'shops',
            'IdShop',
            'CASCADE'
        );
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
         // drops foreign key for table `Shops`
        $this->dropForeignKey(
            'fk-itemes-itemes_id',
            'itemes'
        );

        // drops index for column `IdItem`
        $this->dropIndex(
            'idx-itemes-itemes_id',
             'itemes'
        );

        $this->dropTable('itemes');
    }

}
