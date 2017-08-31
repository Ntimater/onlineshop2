<?php

use yii\db\Migration;

/**
 * Handles the creation of table `customer`.
 */
class m170830_072050_create_customer_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('customer', [
            'id' => $this->primaryKey(),
            'customer_name' => $this->string()->notNull(),
            'male' => $this->string()->notNull(),
            'customer_number' => $this->string()->notNull(),
            'customer_email' => $this->string()->notNull()->unique(),
            'customer_phone_number' => $this->integer(12)->notNull(),
            'customer_photo' => $this->string()->notNull(),
            'registration_date' => $this->dateTime()->notNull(),
            'mode_of_payment' => $this->string()->notNull()
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('customer');
    }
}
