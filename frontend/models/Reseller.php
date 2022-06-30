<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "reseller".
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property int $phone_number
 * @property string $address
 * @property string $transaction_invoice
 */
class Reseller extends \yii\db\ActiveRecord
{
    public $image;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'reseller';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'email', 'phone_number', 'address', 'transaction_invoice'], 'required'],
            [['phone_number'], 'integer'],
            [['name', 'email'], 'string', 'max' => 35],
            [['address', 'transaction_invoice'], 'string', 'max' => 255],
            ['image', 'file', 'extensions' => 'jpg, jpeg, png'],
            ['email', 'email'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'email' => 'Email',
            'phone_number' => 'Phone Number',
            'address' => 'Address',
            'transaction_invoice' => 'Transaction Invoice',
        ];
    }
}
