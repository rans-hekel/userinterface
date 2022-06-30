<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "pubgindonesia".
 *
 * @property int $id
 * @property int $id_account
 * @property string $nickname_account
 * @property string $purchase
 * @property string $method_payment
 * @property int $transaction_invoice
 */
class PubgIndonesia extends \yii\db\ActiveRecord
{
    public $image;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pubgindonesia';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_account', 'nickname_account', 'purchase', 'method_payment', 'transaction_invoice'], 'required'],
            [['id_account'], 'integer'],
            [['nickname_account', 'transaction_invoice'], 'string', 'max' => 255],
            [['purchase'], 'string', 'max' => 30],
            [['method_payment'], 'string', 'max' => 20],
            ['image', 'file', 'extensions' => 'jpg, jpeg, png'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_account' => 'Id Account',
            'nickname_account' => 'Nickname Account',
            'purchase' => 'Purchase',
            'method_payment' => 'Method Payment',
            'transaction_invoice' => 'Transaction Invoice',
        ];
    }
}
