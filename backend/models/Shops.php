<?php

namespace app\models;

use Yii;
use app\models\Itemes;

/**
 * This is the model class for table "shops".
 *
 * @property int $IdShop
 * @property string $TinNumber
 * @property string $NameShop
 * @property string $DateRegist
 * @property string $DateRemove
 * @property string $StatusShop
 * @property string $OwnerShop
 * @property string $PhoneNumber
 * @property string $Address
 * @property string $Email
 */
class Shops extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'shops';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['TinNumber', 'NameShop', 'DateRegist', 'DateRemove', 'StatusShop', 'OwnerShop', 'PhoneNumber', 'Address', 'Email'], 'required'],
            [['TinNumber', 'NameShop', 'DateRegist', 'DateRemove', 'StatusShop', 'OwnerShop', 'PhoneNumber', 'Address', 'Email'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'IdShop' => 'Id Shop',
            'TinNumber' => 'Tin Number',
            'NameShop' => 'Name Shop',
            'DateRegist' => 'Date Regist',
            'DateRemove' => 'Date Remove',
            'StatusShop' => 'Status Shop',
            'OwnerShop' => 'Owner Shop',
            'PhoneNumber' => 'Phone Number',
            'Address' => 'Address',
            'Email' => 'Email',
        ];
    }

   public function getItemes()
  {
    return Itemes::find()->where (['IdFromShop'=>$this ->IdShop])->all();
      # code...
  }
}
