<?php

namespace app\models;

use Yii;


/**
 * This is the model class for table "itemes".
 *
 * @property int $IdItem
 * @property string $DateRegist
 * @property string $DateExpiration
 * @property string $Quantity
 * @property string $Price
 * @property string $Description
 * @property string $Image
 * @property string $Categories
 * @property string $DedicatePers
 * @property string $PhoneNumber
 * @property string $StatusItem
 * @property int $IdFromShop
 *
 * @property Shops $fromShop
 */
class Itemes extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'itemes';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['DateRegist', 'DateExpiration', 'Quantity', 'Price', 'Description', 'Image', 'Categories', 'DedicatePers', 'PhoneNumber', 'StatusItem', 'IdFromShop'], 'required'],
            [['IdFromShop'], 'integer'],
            [['DateRegist', 'DateExpiration', 'Quantity', 'Price', 'Description', 'Image', 'Categories', 'DedicatePers', 'PhoneNumber', 'StatusItem'], 'string', 'max' => 255],
            [['IdFromShop'], 'exist', 'skipOnError' => true, 'targetClass' => Shops::className(), 'targetAttribute' => ['IdFromShop' => 'IdShop']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'IdItem' => 'Id Item',
            'DateRegist' => 'Date Regist',
            'DateExpiration' => 'Date Expiration',
            'Quantity' => 'Quantity',
            'Price' => 'Price',
            'Description' => 'Description',
            'Image' => 'Image',
            'Categories' => 'Categories',
            'DedicatePers' => 'Dedicate Personal',
            'PhoneNumber' => 'Remaining Quantity',
            'StatusItem' => 'Status Item',
            'IdFromShop' => 'Id From Shop',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFromShop()
    {
        return $this->hasOne(Shops::className(), ['IdShop' => 'IdFromShop']);
    }
    

    
}
