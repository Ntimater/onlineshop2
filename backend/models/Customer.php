<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "customer".
 *
 * @property integer $id
 * @property string $customer_name
 * @property string $male
 * @property string $customer_number
 * @property string $customer_email
 * @property integer $customer_phone_number
 * @property string $customer_photo
 * @property string $registration_date
 * @property string $mode_of_payment
 */
class Customer extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'customer';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['customer_name', 'male', 'customer_number', 'customer_email', 'customer_phone_number', 'customer_photo', 'registration_date', 'mode_of_payment'], 'required'],
            [['customer_phone_number'], 'integer'],
            [['registration_date'], 'safe'],
            [['customer_name', 'male', 'customer_number', 'customer_email', 'customer_photo', 'mode_of_payment'], 'string', 'max' => 255],
            [['customer_email'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'customer_name' => Yii::t('app', 'Customer Name'),
            'male' => Yii::t('app', 'Male'),
            'customer_number' => Yii::t('app', 'Customer Number'),
            'customer_email' => Yii::t('app', 'Customer Email'),
            'customer_phone_number' => Yii::t('app', 'Customer Phone Number'),
            'customer_photo' => Yii::t('app', 'Customer Photo'),
            'registration_date' => Yii::t('app', 'Registration Date'),
            'mode_of_payment' => Yii::t('app', 'Mode Of Payment'),
        ];
    }
}
